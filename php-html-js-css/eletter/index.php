<?php
	include "conn.php";
?>

<html>
	<head>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LGSystem</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
		<!--<script src="js/jquery.min.js"></script>-->
		
		
	</head>
	<body>
		<?php include "navbar.php"?>
		<?php include "page_surat_tawaran.php"?>
		<?php include "page_surat_st.php"?>
		<?php include "page_surat_pt.php"?>
		<?php include "page_surat_p.php"?>
		<!--?php include "page_surat_k.php"?-->
		<div>
			<main role="main" class="ml-sm-auto px-5">
				<div align="center">
					<div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 mt-5">
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="#" data-toggle="modal" data-target="#suratTawaran" class="btn btn-sm btn-primary">SURAT TAWARAN</a>
						</div>
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="#" data-toggle="modal" data-target="#suratST" class="btn btn-sm btn-primary">SURAT SETUJU TERIMA</a>
						</div>
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="#" data-toggle="modal" data-target="#suratPT" class="btn btn-sm btn-primary">SURAT PELANJUTAN TEMPOH</a>
						</div>
						<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="#" data-toggle="modal" data-target="#suratP" class="btn btn-sm btn-primary">SURAT PELANTIKAN</a>
						</div>
						<!--<div class="btn-group col-sm-6 mb-3">
							<a type="button" href="#" data-toggle="modal" data-target="#suratK" class="btn btn-sm btn-primary">SURAT KELULUSAN</a>
						</div>-->
					</div>
					<p class="mt-5 text-muted">Developed by Abdul Azim Bin Ismail <br> Penyelidikan Jaringan Industri UiTM Cawangan Sarawak <br> &copy; All Rights Reserved 2020</p>
				</div>
			</main>
		</div>
		
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
		<script src="js/popper.min.js"></script>
	</body>
</html>