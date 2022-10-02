<?php include("conn.php"); //$conn ?> 
<?php
	$id = $_GET['id'];

	$sql = "DELETE certificate FROM certificate WHERE rec_id = '$id'";
	$conn -> query($sql);
	
	header("Location: import_spt.php");
?>