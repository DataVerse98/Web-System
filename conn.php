<?php
// To make connection from a system to a database in the server

		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "rmu";
		
		// Create connection
		$conn = new mysqli ($servername, $username, $password, $database);
		
		// Check connection
		if ( $conn->connect_error)
		{
			die("Connection failed: ". $conn->connect_error);
		}
		// Start session
		session_start();
?>