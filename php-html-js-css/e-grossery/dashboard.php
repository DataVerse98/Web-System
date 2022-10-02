<?php
include "conn.php";
	#$cust_id = $_SESSION['cust_id'];
	#$cust_name = $_SESSION['cust_name'];
	
	$sql = " SELECT * FROM item";
	$query = $conn -> query($sql);
	$row = $query -> fetch_assoc();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>KK SUPER MART ONLINE GROCERY</title>
    <link rel="icon" type="image/png" href="./images/logo.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--Template css files-->
    <link rel="stylesheet" href="css/dashboard_css.css" type="text/css" />
    <link rel="stylesheet" href="css/skins/pink.css" type="text/css" />

    <!--material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Live Style Switcher - Demo Only-->
    <link rel="stylesheet" class="alternate-style" title="pink" href="css/skins/pink.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="blue" href="css/skins/blue.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="orange" href="css/skins/orange.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="yellow" href="css/skins/yellow.css" type="text/css" disabled/>
    <link rel="stylesheet" class="alternate-style" title="green" href="css/skins/green.css" type="text/css" disabled/>
    <link rel="stylesheet" href="css/styleSwitcher.css" type="text/css" />
  </head>
  <body>

    <!--Preloader-->
    <div class="preloader">
      <div class="loader">

      </div>
    </div>
    <!--Preloader End-->

    <!--Main container-->
    <div class="main-container">
      <!--Aside-->
      <div class="aside">
        <!--logo-->
        <div class="logo">
          <a href="#">KKMART</a>
        </div>
        <!--end logo-->

        <!--Name-->
        <div class="name">
          <a href=""><?php echo $_SESSION['staff_name']; //"Student's Name" ?></a>
        </div>
        <!--Name end-->

        <!--nav Toggler Btn-->
        <div class="nav-toggler">
          <span></span>
        </div>
        <!--end nav Toggler Btn-->

        <!--navbar-->
        <ul class="nav">
          <li>
            <a href="#home" class="active"><i class="fa fa-home"></i> Home</a>
          </li>
          <li>
            <a href="#profile"><i class="fa fa-user"></i> Profile</a>
          </li>
          <li>
            <a href="#list"><i class="fa fa-list"></i> List</a>
          </li>
          <li>
            <a href="#insert"><i class="fa fa-list"></i> Insert</a>
          </li>
          <li>
            <a href="#contact"><i class="fa fa-comments"></i> Contact</a>
          </li>
        </ul>
        <!--end navbar-->

        <!--copyright-->
        <div class="copyright-text">
          &copy; 2022 Template
        </div>
        <!--end copyright-->
      </div>
      <!--end Aside-->

      <!--Main Content-->
      <div class="main-content">
        <!--home section-->
        <section class="home section active" id="home">
			<div class="container">
				<div class="intro">
					<img src="images/logo.png" alt="" class="shadow-dark" />
					<h1>Dashboard</h1>
					<p>Developed by Abdul Azim & The Teammate</p>
					<p>KK SUPERMART</p>
					<div class="social-links">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</section>
        <!--end home section-->

        <!--Profile section-->
		<section class="profile section" id="profile">
			<div class="container">
			</div>
		</section>
        
        <!--end Profile section-->

        <!--List Section-->
        <section class="list section" id="list">
			<div class="container">
				<div class="row">
					<div class="section-title padd-15">
						<h2>List Item</h2>
					 </div>
				</div>
				<div class="wrapper">
					<?php do { ?>
					  <div class="card">
						<img src="<?php echo $row['picture']?>" alt="">
						<div class="content">
						  <div class="row">
							<div class="details">
							  <span><?php echo $row['item_name']?></span>
							  <p><?php echo $row['item_description']?></p>
							</div>
							<div class="price"><?php echo $row['price']?></div>
						  </div>
						  <div class="buttons">
							<a href="#" class="cart-btn">Update</a>
						  </div>
						</div>
					  </div>
					<?php } while($row = $query -> fetch_assoc()) ?>
				</div>
			</div>
		</section>
        <!--List Section End-->
		
		<!--Insert Section-->
        <section class="insert section" id="insert">
			<div class="container">
				<div class="row">
					<div class="section-title padd-15">
						<h2>Add Item</h2>
					</div>
				</div>
				<div class="row">
				</div>
				<div class="row">
					<form action="uploadProd.php" class="item-form padd-15" method="post" enctype="multipart/form-data">
						<!--<div class="row">
							<div class="drag-area padd-15">
								<div class="icon">
									<i class="fas fa-cloud-upload-alt"></i>
								</div>
								<header>Drag & Drop to Upload File</header>
								<span>OR</span>
								<a href="#">Browse File</a>
								<input type="file" class="img-input" name="prodImage" value="Browse File" />
							</div>
						</div>-->
						<div class="row">
						  <div class="form-item col-6 padd-15">
							<div class="form-group">
							  <input
								type="text"
								class="form-control"
								name="name"
								placeholder="Item Name*"
							  />
							</div>
						  </div>
						  <div class="form-item col-6 padd-15">
							<div class="form-group">
							  <input
								type="text"
								class="form-control"
								name="item_desc"
								placeholder="Item Description*"
							  />
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="form-item col-6 padd-15">
							<div class="form-group">
							  <input
								type="text"
								name="stock"
								class="form-control"
								placeholder="Stock*"
							  />
							</div>
						  </div>
						  <div class="form-item col-6 padd-15">
							<div class="form-group">
							  <input
								type="text"
								class="form-control"
								name="price"
								placeholder="Price*"
							  />
							</div>
						  </div>
						</div>
						<div class="row">
							<div class="form-item col-12 padd-15">
							<div class="form-group">
							  <input
								type="file"
								class="form-control"
								name="prodImage"
								placeholder="Item Name*"
							  />
							</div>
						  </div>
						</div>
						<div class="row">
							<div class="col-12 padd-15">
								<button type="submit" name="uploadItem" class="btn">Add Product</button>
							  </div>
						</div>
					</form>
				</div>
			</div>
		</section>
        <!--Insert Section End-->

        <!--Contact Section-->
        <section class="contact section" id="contact">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Contact Me</h2>
              </div>
            </div>
            <div class="row">
              <!--contact-info-item-->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>Call Us On</h4>
                <p>+60135519843</p>
              </div>
              <!--contact-info-item end-->
              <!--contact-info-item-->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-map-marker"></i></div>
                <h4>Office</h4>
                <p>In your heart</p>
              </div>
              <!--contact-info-item end-->
              <!--contact-info-item-->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <h4>Email</h4>
                <p>info@gmail.com</p>
              </div>
              <!--contact-info-item end-->
            </div>
            <!--Contact form-->
            <div class="row">
              <form action="" class="contact-form padd-15">
                <div class="row">
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Name*"
                      />
                    </div>
                  </div>
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Email*"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Subject*"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <textarea
                        type="text"
                        class="form-control"
                        placeholder="Your Message. . . *"
                      /></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 padd-15">
                    <button type="submit" class="btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <!--Contact form end-->
          </div>
        </section>
        <!--Contact Section End-->
      </div>
      <!--Main Content End-->
    </div>
    <!--Main container-->

    <!--Live Style Switcher - Demo Only-->
    <div class="style-switcher">
      <div class="toggle-style-switcher">
        <i class="fa fa-cog fa-spin"></i>
      </div>
      <h5>Style Switcher</h5>
      <ul>
        <li><a href="#" title="pink" style="background-color: #ec1839;" onclick="setActiveStyle('pink')"></a></li>
        <li><a href="#" title="blue" style="background-color: #2196f3;" onclick="setActiveStyle('blue')"></a></li>
        <li><a href="#" title="orange" style="background-color: #fa5b0f;" onclick="setActiveStyle('orange')"></a></li>
        <li><a href="#" title="yellow" style="background-color: #ffb400;" onclick="setActiveStyle('yellow')"></a></li>
        <li><a href="#" title="green" style="background-color: #72b626;" onclick="setActiveStyle('green')"></a></li>
      </ul>
      <h5>Body Skin</h5>
      <label>
        <input type="radio" class="body-skin" name="body-style" value="light" checked="true">
        Light
      </label>
      <label>
        <input type="radio" class="body-skin" name="body-style" value="dark">
        Dark
      </label>
      <h5></h5>
      <label>
        <a class="btn" href="logout.php">Log Out</a>
      </label>
    </div>
    <!--Live Style Switcher - Demo Only End-->

    <!--Remplate js-->
    <script src="js/script.js"></script>
	<script src="js/dashboard_js.js"></script>

    <!--Live Style js - Demo Only-->
    <script src="js/styleSwitcher.js"></script>

    

  </body>
</html>
