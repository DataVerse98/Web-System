<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="../css/test2.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<title>e-Letter RMU</title>
	</head>
	<body>
		<nav class="navbar navbar-light bg-light fixed-top flex-md-nowrap shadow">
			<span class="navbar-brand">
				<img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				RESEARCH MANAGEMENT UNIT (RMU)
			</span>
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
					<a class="nav-link" href="page.php">Log out</a>
				</li>
			</ul>
		</nav>
		<div>
			<main role="main" class="ml-sm-auto px-5">
				<div align="center">
					<div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 mt-5">
						<form method="post" action="#">
							<!--<h1>e-Lettter</h1>-->
							<table cellpadding="10">
								<tr><td>Letter Type </td><td>
								<select type="text" name="letter_type" class="form-control" required>
									<option selected value="default">Choose...</option>
									<option value="empty">option 1</option>
									<option value="empty">option 2</option>
								</select></td></tr>
								<tr><td>Ref. No. </td><td>
								<input type="text" name="ref_no" class="form-control" required></td></tr>
								<tr><td>Staff ID </td><td>
								<input type="text" name="staff_id" class="form-control" required></td></tr>
								<tr><td class="modal-footer">
									<a type="button" class="btn btn-secondary" href="dashboard.php" data-dismiss="modal" >Cancel</a>
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</td></tr>
							</table>
						</form>
					</div>
				</div>
			</main>
		</div>
	</body>
</html>