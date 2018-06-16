<?php 

require "conf_connection.php";
header("Content-type: text/json");

//current time
$x = time() * 1000;

	$sql = "SELECT * FROM gps ORDER BY ID DESC LIMIT 1";	
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$y = intval($row['alt']);
			}
		}
		else{
			$y = 0;
		}
	// Create a PHP array and echo it as JSON
	$ret = array($x, $y);
	$conn->close();
	echo json_encode($ret);

?>