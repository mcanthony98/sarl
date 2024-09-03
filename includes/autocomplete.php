<?php
include "connect.php";

if (isset($_GET['term'])) {
    $term = mysqli_real_escape_string($conn, $_GET['term']);

    $query = "SELECT name FROM cities WHERE name LIKE '%$term%' LIMIT 5";
    $result = $conn->query($query);

    $cities = array();
    while ($row = $result->fetch_assoc()) {
        $cities[] = $row['name'];
    }

    echo json_encode($cities);
}
?>
