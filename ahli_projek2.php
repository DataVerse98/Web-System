<?php	
	$query = "SELECT * FROM staff_info WHERE staff_id = $ap2";
		
	$query = $conn -> query($query);
	$row = $query -> fetch_assoc();
	
	$nameap2 = $row['name'];
	$cawanganap2 = $row['cawangan'];
	
	
?>