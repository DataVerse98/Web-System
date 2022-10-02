<?php include("conn.php");
	$cust_id = $_SESSION['cust_id'];
	$cust_name = $_SESSION['cust_name'];
	
	$sql = "SELECT * FROM shopping_cart JOIN item USING (item_id) WHERE cust_id = '$cust_id'";
	$query = $conn -> query($sql);
	$row = $query -> fetch_assoc();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="css/swiper_css.css">
		<link rel="stylesheet" href="css/cart_css2.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<title>KK SUPER MART ONLINE GROCERY</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<span class="navbar-brand">
				<img src="./images/logo.png" width="60" height="30" class="d-inline-block align-top" alt="">
            KK SUPER MART ONLINE GROCERY
			</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="homepage.php">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="product.php">Product</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $cust_name;?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="logout.php">Log Out</a>
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Support</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="small-container cart-page">
			<table>
				<tr>
					<th>Product</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</tr>
				<?php
					$sum = 0;
				do{?>
				<tr>
					<td>
						<div class="cart-info">
							<img src="<?php echo $row['picture'];?>" alt="">
							<div>
								<p><?php echo $row['item_name'];?></p>
								<small>RM<?php echo $row['price'];?></small>
								<br>
								<a href="deleteCart.php?id=<?php echo $row['cart_id']?>">Remove</a>
							</div>
						</div>
					</td>
					<td><input type="number" value="<?php echo $row['qty']?>"></td>
					<td>RM<?php echo $row['price']*$row['qty'];?></td>
				</tr>
				<?php $sum = $sum + $row['price']*$row['qty']; }while($row = $query -> fetch_assoc());?>
			</table>
			
			<div class="total-price">
				<table>
					<tr>
						<td>Subtotal</td>
						<td>RM<?php echo $sum;?></td>
					</tr>
					<tr>
						<td>Tax</td>
						<td>RM<?php echo $tax = 0.06 * $sum;?></td>
					</tr>
					<tr>
						<td>Total</td>
						<td>RM<?php echo $total = $sum + $tax;?></td>
					</tr>
				</table>
			</div>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
	</body>
</html>