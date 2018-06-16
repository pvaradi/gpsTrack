<?php
$servername = "db.inf.duf.hu";
$username = "p_o7nd1h";
$password = "o7nd1h";
$dbname = "p_o7nd1h";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Set the character encoding
mysqli_set_charset($conn, 'utf8');	
?>