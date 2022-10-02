<?php	
	$query = "SELECT * FROM staff_info WHERE staff_id = $ap3";
		
	$query = $conn -> query($query);
	$row = $query -> fetch_assoc();
	
	$nameap3 = $row['name'];
	$cawanganap3 = $row['cawangan'];
?>