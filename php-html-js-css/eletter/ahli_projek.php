<?php
		$query = "SELECT * FROM staff_info WHERE staff_id = $ap1";
		
		$query = $conn -> query($query);
		$row = $query -> fetch_assoc();
		
		$nameap1 = $row['name'];
		$cawanganap1 = $row['cawangan'];
		
			
	
?>