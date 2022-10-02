<?php include("conn.php"); 
	
	$id = $_GET['id'];
	
	$sql = "DELETE shopping_cart FROM shopping_cart WHERE cart_id = '$id'";
	$conn -> query($sql);
	
	header('Location: cart.php');
?>