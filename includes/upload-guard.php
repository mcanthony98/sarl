<?php
/**
 * Safe handling for file uploads.
 *
 * Uploads used to be moved straight into /uploads under the name the browser
 * supplied, with no check on the type - both from the admin area and from the
 * public job-application form. That let anyone drop an executable file
 * (shell.php) into a web-readable directory. Everything now goes through
 * sarl_store_upload(), which accepts only a fixed whitelist of media types and
 * always builds the stored filename itself, so a caller can never choose the
 * extension or traverse out of the uploads directory.
 *
 * uploads/.htaccess refuses to serve anything executable from that tree as a
 * second line of defence.
 */

define('SARL_UPLOAD_DIR', __DIR__ . '/../uploads/');

/**
 * File types the site is allowed to serve from /uploads.
 * SVG is deliberately excluded: it can carry script.
 */
function sarl_allowed_upload_extensions()
{
    return array(
        'jpg', 'jpeg', 'png', 'gif', 'webp', 'avif',
        'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx',
    );
}

/**
 * Document types accepted for a CV / resume upload.
 */
function sarl_allowed_document_extensions()
{
    return array('pdf', 'doc', 'docx', 'rtf', 'odt');
}

/**
 * Move one uploaded file into /uploads under a safe, generated name.
 *
 * @param string     $tmp_file      PHP temp path ($_FILES[...]['tmp_name']).
 * @param string     $original_name Name the browser sent; used only for the slug.
 * @param string     $prefix        Prefix (timestamp or uniqid) keeping names unique.
 * @param int        $error         $_FILES[...]['error'] for this file.
 * @param string     $subdir        Optional subdirectory of /uploads, e.g. 'cvs'.
 * @param array|null $allowed       Optional extension whitelist; defaults to media types.
 *
 * @return string Stored path relative to /uploads (e.g. 'cvs/abc-cv.pdf'),
 *                or '' when nothing valid was uploaded.
 */
function sarl_store_upload($tmp_file, $original_name, $prefix, $error = UPLOAD_ERR_OK, $subdir = '', $allowed = null)
{
    if ((int) $error !== UPLOAD_ERR_OK) {
        return '';
    }

    $tmp_file = (string) $tmp_file;
    if ($tmp_file === '' || !is_uploaded_file($tmp_file)) {
        return '';
    }

    if ($allowed === null) {
        $allowed = sarl_allowed_upload_extensions();
    }

    $extension = strtolower(pathinfo((string) $original_name, PATHINFO_EXTENSION));
    if (!in_array($extension, $allowed, true)) {
        return '';
    }

    // Build the stored name from scratch rather than trusting the browser:
    // a slug of the original base name, prefixed to keep it unique.
    $base = pathinfo((string) $original_name, PATHINFO_FILENAME);
    $base = preg_replace('/[^A-Za-z0-9_-]+/', '-', (string) $base);
    $base = trim((string) $base, '-');
    if ($base === '') {
        $base = 'file';
    }
    $base = substr($base, 0, 80);

    // The subdirectory is caller-supplied, never user-supplied: keep it to a
    // single plain segment so it can't escape the uploads directory.
    $subdir = trim((string) $subdir, '/');
    if ($subdir !== '' && !preg_match('/^[A-Za-z0-9_-]+$/', $subdir)) {
        return '';
    }

    $dir = SARL_UPLOAD_DIR . ($subdir === '' ? '' : $subdir . '/');
    if (!is_dir($dir) && !mkdir($dir, 0755, true)) {
        return '';
    }

    $prefix = preg_replace('/[^A-Za-z0-9._-]+/', '', (string) $prefix);

    $stored = $prefix . $base . '.' . $extension;
    $counter = 1;
    while (file_exists($dir . $stored)) {
        $stored = $prefix . $base . '-' . $counter . '.' . $extension;
        $counter++;
    }

    if (!move_uploaded_file($tmp_file, $dir . $stored)) {
        return '';
    }

    return ($subdir === '' ? '' : $subdir . '/') . $stored;
}
