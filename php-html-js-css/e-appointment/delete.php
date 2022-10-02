<?php
    include "conn.php";
    
	$id = $_GET['id'];

	$sql = "DELETE FROM appointment WHERE ic_num = '$id'";
	$conn -> query($sql);
	
	header("Location: index.php");

?>