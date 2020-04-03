<?php

$conn = new mysqli('127.0.0.1','root','','eshop');

if ($conn->connect_error) {
	echo "Connection Failed " . $conn->connect_error;
}

?>