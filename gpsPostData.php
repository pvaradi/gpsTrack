<?php

require "conf_connection.php";

$lat = $_GET['lat'];
$lng = $_GET['lng'];

$sql = "INSERT INTO gps (lat, lng) VALUES ('$lat', '$lng')";

if ($conn->query($sql) === TRUE) {
	//echo "New record created successfully";
} else {
	echo "Error" . $sql . $conn->error;
}
$conn->close();
?>