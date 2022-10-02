<?php
	include "conn.php";
?>

<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>e-Letter</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<script src="bootstrap/js/bootstrap.min.js" ></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		
	</head>
	<body>
		<?php include "navbar.php"?>
		<div>
			<main role="main" class="ml-sm-auto px-5">
				<div align="center">
					<div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 mt-5">
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="import_st.php" name="suratTawaran" class="btn btn-sm btn-primary">SURAT TAWARAN</a>
						</div>
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="import_sst.php" name="suratST" class="btn btn-sm btn-primary">SURAT SETUJU TERIMA</a>
						</div>
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="import_spt.php" name="suratPT" class="btn btn-sm btn-primary">SURAT PELANJUTAN TEMPOH</a>
						</div>
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="import_sp.php" name="suratP" class="btn btn-sm btn-primary">SURAT PELANTIKAN</a>
						</div>
					</div>
				</div>
			</main>
		</div>
		
		<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
	</body>
</html>