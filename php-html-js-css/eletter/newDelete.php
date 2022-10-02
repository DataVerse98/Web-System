<?php include("conn.php"); //$conn ?> 
<?php
	$id = $_GET['id'];
	$surat = $_GET['surat'];

	$sql = "DELETE certificate FROM certificate WHERE rec_id = '$id'";
	$conn -> query($sql);
	
	header("Location: import.php?surat=$surat");
?>