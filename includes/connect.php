<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sarlcoke_sarlgtweb');
define('DB_PASSWORD', '!5v2DZbvn+WG');
define('DB_DATABASE', 'sarlcoke_sarlgtweb');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$conn->set_charset('utf8mb4'); // Always set character encoding
?>
