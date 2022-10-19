<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "proweb";

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database not connected");

// Check connection
#if ($conn->connect_error) {
#  die("Connection failed: " . $conn->connect_error);
#}
#echo "Connected successfully";

?>