<?php

	$query = "SELECT * FROM staff_info WHERE staff_id = $kp";
	
	$query = $conn -> query($query);
	$row = $query -> fetch_assoc();
	
	$name = $row['name'];
	$cawangan = $row['cawangan'];
	$fakulti = $row['department'];
	$position = $row['position'];
	
	
	
?>