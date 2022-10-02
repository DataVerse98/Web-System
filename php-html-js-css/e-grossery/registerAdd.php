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
						<a class="nav-link" href="#">Cancel</a>
					</li>
				</ul>
			</div>
		</nav>
		<div align="center" style="margin-top: 100px;">
			<div><h1>Please fill in details</h1></div>
			<form method="post" action="index.php" onsubmit="return validate()">
				<table cellpadding="10">
					<tr><td>Street: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<tr><td>Street Number: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<tr><td>Zip Code: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<tr><td>City: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<tr><td>Country: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<tr><td>Phone: </td><td><input type="text" name="name" class="form-control" required></td></tr>
					<!--<tr><td><button></button></td></tr>-->
					<tr><td colspan="2" align="right"><input type="submit" class="btn btn-success btn-sm" value="Next"><a href="#" class="btn btn-danger btn-sm">Cancel</a></td></tr>
				</table>
			</form>
		</div>
	</body>
</html>