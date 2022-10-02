<?php include("conn.php");

	if (isset($_POST['email']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$street = $_POST['street'];
		$street_num = $_POST['street_num'];
		$zip_code = $_POST['zip_code'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		
		//check for duplicate id
		$sqlid = "SELECT * FROM customers WHERE cust_email = '$email'";
		$queryid = $conn -> query($sqlid);
		$numid = $queryid -> num_rows;
		
		$sql = "SELECT * FROM customers WHERE rec_id = (SELECT MAX(rec_id) FROM customers)";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$id = $row['rec_id'] + 1;
		$cust_id = "cust".$id;
		$add_id = "add".$id;
		
		
		if($numid == 0) {
		$sql2 = "INSERT INTO customers (cust_id, cust_name, cust_email, cust_pass) VALUES ('$cust_id', '$name', '$email', '$pass')";
		$sql3 = "INSERT INTO address (add_id, cust_id, street, street_num, zip_code, city, country, phone) VALUES ('$add_id', '$cust_id', '$street', '$street_num', '$zip_code', '$city', '$country', '$phone')";
			if(($conn -> query($sql2) === true) && ($conn -> query($sql3) === true)) {
				echo "<script>alert('Well Done !'); window.location='index.php'</script>";
			} else { 
				echo "<script>alert('Do it Again !');</script>";
			}
		} else { echo "<script>alert('This account has been registered!');</script>"; }
		
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		
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
						<a class="nav-link" href="index.php">Cancel</a>
					</li>
				</ul>
			</div>
		</nav>
		<div align="center" style="margin-top: 100px;">
			<div><h1>Please fill in details</h1></div>
			<form method="post" action="registerCust.php" onsubmit="return validate()">
				<table cellpadding="10">
					<tr><td>Name: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<tr><td>Email: </td><td><input type="email" name="email" class="form-control" required></td></tr>
					<tr><td>Password: </td><td><input type="password" name="pass" class="form-control" required></td></tr>
					<tr><td>Street: </td><td><input type="text" name="street" class="form-control" required></td></tr>
					<tr><td>Street Number: </td><td><input type="text" name="street_num" class="form-control" required></td></tr>
					<tr><td>Zip Code: </td><td><input type="text" name="zip_code" class="form-control" required></td></tr>
					<tr><td>City: </td><td><input type="text" name="city" class="form-control" required></td></tr>
					<tr><td>Country: </td><td><input type="text" name="country" class="form-control" required></td></tr>
					<tr><td>Phone: </td><td><input type="text" name="phone" class="form-control" required></td></tr>
					<tr><td colspan="2" align="right"><input type="submit" class="btn btn-success btn-sm mr-1" value="Submit"><a href="index.php" class="btn btn-danger btn-sm ml-1">Cancel</a></td></tr>
				</table>
			</form>
		</div>
		
		<script>
			function validate() {
				var name = document.getElementsByName("name")[0].value;
				
				if(isNaN(name) == false) {
					alert("This field does not accept non alphabetic character!");
					return false;
				}
			}
		</script>
	</body>
</html>