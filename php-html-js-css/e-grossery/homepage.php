<?php include("conn.php");
	
	$cust_name = $_SESSION['cust_name'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
		<link rel="stylesheet" type="text/css" href="css/swiper_css.css">
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
					<li class="nav-item">
						<a class="nav-link" href="product.php">Product</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $cust_name;?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="logout.php">Log Out</a>
							<!--<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" value="">Import</a>-->
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Support</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="swiper-container">
			<div class="swiper-wrapper">
			  <div class="swiper-slide">
				<div class="imgBx">
					<img src="images/UiTM k1.jpg">
				</div>
				<div class="details">
					<!--<h3>Pic 1<br><span>img1</span></h3>-->
				</div>
			  </div> 
			  <div class="swiper-slide">
				<div class="imgBx">
					<img src="images/pic1.jpg">
				</div>
				<div class="details">
					<!--<h3>Pic 1<br><span>img1</span></h3>-->
				</div>
			  </div>
			  <div class="swiper-slide">
				<div class="imgBx">
					<img src="images/pic2.jpg">
				</div>
				<div class="details">
					<!--<h3>Pic 1<br><span>img1</span></h3>-->
				</div>
			  </div>
			  
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
		
		<script type="text/javascript" src="js/swiper.min.js"></script>
		
		<script>
			var swiper = new Swiper('.swiper-container', {
			  effect: 'coverflow',
			  grabCursor: true,
			  centeredSlides: true,
			  slidesPerView: 'auto',
			  coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows : true,
			  },
			  pagination: {
				el: '.swiper-pagination',
			  },
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
	</body
</html>
