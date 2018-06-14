<?php
require "conf_connection.php";
header('Content-Type: application/json');

$query = "DELETE FROM gps";	

$result = mysqli_query($conn, $query);

mysqli_close($conn);
?>