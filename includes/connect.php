<?php

define('DB_SERVER', 'srv497.hstgr.io');
define('DB_USERNAME', 'u640333703_sarl');
define('DB_PASSWORD', '!5v2DZbvn+WG');
define('DB_DATABASE', 'u640333703_sarl');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Success";
}
?>