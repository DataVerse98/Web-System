<?php include("conn.php");

	$cust_id = $_SESSION['cust_id'];
	$cust_name = $_SESSION['cust_name'];
	
	$sql = " SELECT * FROM item";
	$query = $conn -> query($sql);
	$row = $query -> fetch_assoc();
	
	
	if(isset($_GET['item_id'])){
		$id = $_GET['item_id'];
		$sql3 = "SELECT * FROM shopping_cart";
		$query3 = $conn -> query($sql3);
		$row3 = $query3 -> fetch_assoc();
		
		$sql6 = "SELECT * FROM shopping_cart WHERE rec_id = (SELECT MAX(rec_id) FROM shopping_cart)";
		$query6 = $conn -> query($sql6);
		$row6 = $query6 -> fetch_assoc();
		$id6 = $row6['rec_id'] + 1;
		$cart_num = "cart".$id6;
		
		$counter = FALSE;
		do{
			if(($row3['item_id'] == $id)&&($row3['cust_id'] == $cust_id)){
				$counter = TRUE;
			}
		}while($row3 = $query3 -> fetch_assoc());
		
		if($counter === FALSE){
			$qty = 1;
			$sql4 = "INSERT INTO shopping_cart (cart_id, item_id, cust_id, qty) VALUES ('$cart_num', '$id', '$cust_id', '$qty')";
			if($conn -> query($sql4) === true) {
				
			}
		} else {
			$sql4 = "SELECT * FROM shopping_cart WHERE item_id = '$id' AND cust_id = '$cust_id'";
			$query4 = $conn -> query($sql4);
			$row4 = $query4 -> fetch_assoc();
			$newQty = $row4['qty'] + 1; 
			$sql5 = "UPDATE shopping_cart SET qty = '$newQty' WHERE item_id = '$id' AND cust_id = '$cust_id'";
			if($conn -> query($sql5) === true) {}
		}
		
	}
	
	$sql2 = "SELECT * FROM shopping_cart WHERE cust_id = '$cust_id'";
	$query2 = $conn -> query($sql2);
	$row2 = $query2 -> fetch_assoc();
	$num2 = $query2 -> num_rows;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="css/swiper_css.css">
		<link rel="stylesheet" href="css/cart_css.css">
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
						<a class="nav-link" href="#">Product</a>
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
		<div class="item-container">
			<div class="wrapper">
			  <a href="cart.php" class="cart-nav">
				<div class="icon">
				  <i class="fas fa-shopping-cart"></i>
				  <span>Cart</span>
				</div>
				<div class="item-count"><?php echo $num2;?></div>
			  </a>
			  <!--<form action="" method="POST" enctype="multipart/form-data"> <!--product.php?id=<!-?php echo $_GET['item_id']; ?>"-->
			  
			  <?php do { ?>
			  <div class="card">
				<img src="<?php echo $row['picture']?>" alt="">
				<div class="content">
				  <div class="row">
					<div class="details">
					  <span><?php echo $row['item_name']?></span>
					  <p><?php echo $row['item_description']?></p>
					</div>
					<div class="price">RM<?php echo $row['price']?></div>
				  </div>
				  <div class="buttons">
					<a href="product.php?item_id=<?php echo $row['item_id']; ?>" class="cart-btn">Add to Cart</a>
				  </div>
				</div>
			  </div>
			  <?php } while($row = $query -> fetch_assoc()) ?>
			  <!--</form>-->
			  <!--<div class="card">
				<img src="images/product/headphone.png" alt="">
				<div class="content">
				  <div class="row">
					<div class="details">
					  <span>Headphone</span>
					  <p>Premium headphone</p>
					</div>
					<div class="price">$30</div>
				  </div>
				  <div class="buttons">
					<button>Buy Now</button>
					<button class="cart-btn">Add to Cart</button>
				  </div>
				</div>
			  </div>
			  <div class="card">
				<img src="images/product/headphone.png" alt="">
				<div class="content">
				  <div class="row">
					<div class="details">
					  <span>Headphone</span>
					  <p>Premium headphone</p>
					</div>
					<div class="price">$30</div>
				  </div>
				  <div class="buttons">
					<button>Buy Now</button>
					<button class="cart-btn">Add to Cart</button>
				  </div>
				</div>
			  </div>
			  <div class="card">
				<img src="images/product/headphone.png" alt="">
				<div class="content">
				  <div class="row">
					<div class="details">
					  <span>Headphone</span>
					  <p>Premium headphone</p>
					</div>
					<div class="price">$30</div>
				  </div>
				  <div class="buttons">
					<button>Buy Now</button>
					<button class="cart-btn">Add to Cart</button>
				  </div>
				</div>
			  </div>-->
			</div>
		</div>
		<!--<script src="js/cart_js.js"></script>-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
		
	</body
</html>
