<?php	
	$query = "SELECT * FROM staff_info WHERE staff_id = $ap4";
		
	$query = $conn -> query($query);
	$row = $query -> fetch_assoc();
	
	$nameap4 = $row['name'];
	$cawanganap4 = $row['cawangan'];
?>