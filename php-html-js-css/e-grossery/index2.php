<?php include("conn.php");

	if (isset($_POST['staff_email']))
	{
		//find username and password from the database
		$sql = " SELECT * FROM staff WHERE staff_email = '".$_POST['staff_email']."' AND staff_pass = '".$_POST['staff_pass']."' ";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$num = $query -> num_rows;
		
		//check if username and password are correct|
		
		if ($num==1)
		{
			$_SESSION['staff_email']= $row['staff_email'];
			$_SESSION['staff_name']= $row['staff_name'];
			//$_SESSION['type']= $row['type'];
			header("Location: dashboard.php");
			/*if($row['type'] == "admin")
			{
				header("Location: homepage.php");
			}*/

		}
		else 
		{
			echo "<script>alert('You have entered a wrong username or password!');
			window.location='index2.php';</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<title>KK SUPER MART ONLINE GROCERY</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
	</head>
<body>
	<div align ="center" style="margin-top:10%">
		<img class="mb-4" src="./images/logo.png" alt="" width="240" height="135">
		<h2>KK SUPER MART ONLINE GROCERY</h2>
		<!--<div class="btn-group col-2 mt-2">
			<a href="registerCust.php" class="btn btn-sm btn-primary">Sign Up</a>
		</div>-->
        <div class="btn-group col-2 mt-2">
            <a type="button" href="#" data-toggle="modal" data-target="#login" class="btn btn-sm btn-primary">Login</a>
        </div>
		<p class="mt-5 text-muted">Developed by Abdul Azim Bin Ismail <br> UiTM KAMPUS SHAH ALAM <br> &copy; All Rights Reserved 2020</p>
		<!--<p class="mb-3 text-muted">&copy; 2020 RMU</p>-->

        <form action="index2.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade mt-5" id="login">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Login</h2>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="staffid">Email</label><br>
                                <input class="form-control" type="text" placeholder="Enter Email*" name="staff_email" style="text-align: center" required>
                            </div>
                            <div class="form-group">
                                <label for="psw">Password</label><br>
			                    <input class="form-control" type="password" placeholder="Enter Password*" name="staff_pass" style="text-align: center" required>
                            </div>
							<div class="form-group">
								<label>Forget <a href="#">Password?</a></label>
							</div>
                        </div>
                        <div class="modal-footer">							
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <br><button type="submit" class="btn btn-primary" name="generate_st">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
		
		</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
		<script src="js/popper.min.js"></script>
	</body>
</html>