<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "r6";

	// Create connection
	$con = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if ($con->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}

?>