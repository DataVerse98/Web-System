<?php include("conn.php");

	if (isset($_POST['staffid']))
	{
		//find username and password from the database
		$sql = " SELECT * FROM user WHERE staff_id = '".$_POST['staffid']."'AND password = '".$_POST['psw']."' ";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$num = $query -> num_rows;
		
		//check if username and password are correct|
		
		if ($num==1)
		{
			$_SESSION['staff_id']= $row['staff_id']; 
			$_SESSION['type']= $row['type'];
			
			if($row['type'] == "admin")
			{
				header("Location: homepage.php");
			}

		}
		else 
		{
			echo "<script>alert('You have entered a wrong username or password!');
			window.location='loginv2.php';</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {font-family: Arial, Helvetica, sans-serif;}

			/* Full-width input fields */
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

			/* Set a style for all buttons */
			button {
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}

			button:hover {
			  opacity: 0.8;
			}

			/* Extra styles for the cancel button */
			.cancelbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}

			/* Center the image and position the close button */
			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			  position: relative;
			}

			img.avatar {
			  width: 40%;
			  border-radius: 50%;
			}

			.container {
			  padding: 16px;
			}

			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			/* The Modal (background) */
			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}

			/* Modal Content/Box */
			.modal-content {
			  background-color: #fefefe;
			  margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			  border: 1px solid #888;
			  width: 30%; /* Could be more or less, depending on screen size */
			}

			/* The Close Button (x) */
			.close {
			  position: absolute;
			  right: 25px;
			  top: 0;
			  color: #000;
			  font-size: 35px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: red;
			  cursor: pointer;
			}

			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)} 
			  to {-webkit-transform: scale(1)}
			}
			  
			@keyframes animatezoom {
			  from {transform: scale(0)} 
			  to {transform: scale(1)}
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
				 display: block;
				 float: none;
			  }
			  .cancelbtn {
				 width: 100%;
			  }
			}
		</style>
		<title>e-Letter</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
	</head>
<body>
	<div align ="center" style="margin-top:10%">
		<img class="mb-4" src="./images/logo-big.png" alt="" width="240" height="135">
		<h2>DCKM UiTM Sarawak Portal</h2>

		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2020 RMU</p>
		<div id="id01" class="modal">
		  
		<form class="modal-content animate" action="loginv2.php" method="post">
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div class="container">
			  <label for="staffid"><b>Staff ID</b></label>
			  <input type="text" placeholder="Enter Staff ID" name="staffid" style="text-align: center" required>

			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="psw" style="text-align: center" required>
				
			  <button type="submit">Login</button>
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" style="background-color: #b22222">Cancel</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			  <br>
			  <label>
			  <div class="psw">Forgot <a href="#">password?</a></div>
			  </label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
			  
			  
			</div>
		</form>
</div>

			<script>
				// Get the modal
				var modal = document.getElementById('id01');

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>
		</div>
	</body>
</html>