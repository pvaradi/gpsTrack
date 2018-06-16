<?php

require "conf_connection.php";

$lat = $_GET['lat'];
$lng = $_GET['lng'];
$alt = $_GET['alt'];

$sql = "INSERT INTO gps (lat, lng, alt) VALUES ('$lat', '$lng', '$alt')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
} else {
	echo "Error" . $sql . $conn->error;
}
$conn->close();
?>