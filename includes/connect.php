<?php

define('DB_SERVER', 'srv491.hstgr.io');
define('DB_USERNAME', 'u640333703_sarl');
define('DB_PASSWORD', '!5v2DZbvn+WG');
define('DB_DATABASE', 'u640333703_sarl');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $conn->set_charset('utf8mb4'); // Always set character encoding
    echo "Database connection successful!";
} catch (mysqli_sql_exception $e) {
    error_log($e->getMessage()); // Log error instead of showing to user
    exit('Database connection failed.');
}
?>
