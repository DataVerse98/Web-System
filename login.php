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
			window.location='login.php';</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<title>LGSystem</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
	</head>
<body>
	<div align ="center" style="margin-top:10%">
		<img class="mb-4" src="./images/logo-big.png" alt="" width="240" height="135">
		<h2>LGSystem UiTM Sarawak</h2>
        <div class="btn-group col-2 mt-2">
            <a type="button" href="#" data-toggle="modal" data-target="#login" class="btn btn-sm btn-primary">Login</a>
        </div>
		<p class="mt-5 text-muted">Developed by Abdul Azim Bin Ismail <br> Penyelidikan Jaringan Industri UiTM Cawangan Sarawak <br> &copy; All Rights Reserved 2020</p>
		<!--<p class="mb-3 text-muted">&copy; 2020 RMU</p>-->

        <form action="login.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade mt-5" id="login">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Login</h2>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="staffid">Staff ID</label><br>
                                <input class="form-control" type="text" placeholder="Enter Staff ID" name="staffid" style="text-align: center" required>
                            </div>
                            <div class="form-group">
                                <label for="psw">Password</label><br>
			                    <input class="form-control" type="password" placeholder="Enter Password" name="psw" style="text-align: center" required>
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