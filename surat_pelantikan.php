<?php 
	include "conn.php";
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM certificate WHERE rec_id = $id";
	$query = $conn -> query($sql);
	$row = $query -> fetch_assoc();
		
	$ref_no = $row['ref_no'];
	$kp = $row['kp_id'];
	$tajuk = $row['title'];
	$pelantikan = $row['pelantikan'];
	$tarikh_mula = strtotime($row['tarikh_mula']);
	$tarikh_tamat = strtotime($row['tarikh_tamat']);
	$generate = strtotime($row['date_generate']);
	
	$dayM = date('d', $tarikh_mula);
	$monthM = date('m', $tarikh_mula);
	$mm = array("Januari", "Februari","Mac", "April", "Mei", "Jun", "Julai", "Ogos", "September", "October", "November","Disember");
	$monthM = $mm[$monthM-1];
	$yearM = date('Y', $tarikh_mula);
	
	$dayT = date('d', $tarikh_tamat);
	$monthT = date('m', $tarikh_tamat);
	$mt = array("Januari", "Februari","Mac", "April", "Mei", "Jun", "Julai", "Ogos", "September", "October", "November","Disember");
	$monthT = $mt[$monthT-1];
	$yearT = date('Y', $tarikh_tamat);
	
?>

<html>
	<head>
		<style>
		html, body {
		  background: rgb(204,204,204); 
		  font: 10pt "Arial";
		  line-height: 1.4em;
		  color : 111;
		}
		body .page {
		  background: white;
		  display: block;
		  margin: 0 auto;
		  margin-bottom: 0.5cm;
		  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
		  width: 22cm;
		  height: 28.5cm;
		}

		.print {
			background: transparent;
			width: 21cm;
			height: 65.0 cm;
			display: block;
			margin: 0 auto;
			
		}

		p {
			padding-left: 80px;
			padding-right: 80px;
			text-align: justify;
			//letter-spacing: 1px;
			word-spacing: 3px;
			color: #000000;
		}
		pre {
			padding-left: 90px;
			padding-right: 100px;
			text-align: justify;
			//letter-spacing: 1px;
			word-spacing: 3px;
			color: #000000;
			font: 11pt "Arial";
		}

		@media print {
		  body, page[size="A4"] {
			margin: 0;
			box-shadow: 0;
		  }
		}

		</style>
		
				
		<script src="js/jquery.min.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>-->
				
		<script type="text/javascript" >
			alert("To print the certificate , Please click ctrl+P");
		</script>
		
		<?php
			$day = date('d',$generate);
			$month = date('m',$generate);
			$m = array("Januari", "Februari","Mac", "April", "Mei", "Jun", "Julai", "Ogos", "September", "October", "November","Disember");
			$month = $m[$month-1];
			$year = date('Y',$generate);
		?>
		<link rel="icon" type="image/png" href="images/logo.png" />
		<title>ER1</title>
	</head>
		
	<body> <!--onLoad="javascript:print()"-->
		<div class="page">
			<img src="images/header_uitm.png" style="margin-left: 30px; margin-right:30px; margin-top:25px; width: 20.5cm" alt="Header img">
			<p style="padding-left: 50%"> Surat Kami : <b><?php echo "$ref_no" ?></b></p>
			<p style="padding-left: 50%"> Tarikh <span style="display: inline-block; margin-left: 36px;"> :</span> <b><?php echo "$day $month $year"?></b></p> <!--<span id="date"></span>-->
			<br>
			<!--<p><//?php echo "$kp" ?></p>-->
			<?php include "ketua_projek.php" ?>
			<p><b><?php echo "$name <br> $position <br> $fakulti <br> Universiti Teknologi MARA Cawangan $cawangan <br> Kampus Samarahan";?></b></p>
			
			<p><br>Prof/Prof Madya/Dr/Tuan/Puan </p>
			<p style="text-transform: uppercase;"><strong>PELANTIKAN SEBAGAI <?php echo "$pelantikan";?> <?php echo "$tajuk"?></strong></p>
			
			<p>Dengan hormatnya perkara di atas adalah dirujuk.</p>
			
			<p style="text-align:justify;">2.&Tab;&Tab; Sukacita dimaklumkan bahawa *Tuan Dr.* adalah dilantik sebagai <b><?php echo "$pelantikan";?> <?php echo "$tajuk"?></b>, berkuat kuasa <b>mulai <?php echo "$dayM $monthM $yearM"?> hingga <?php echo "$dayT $monthT $yearT"?></b>.</p>

			<p style="text-align:justify;">3.&Tab;&Tab; Semoga  *Tuan Dr* menerima pelantikan ini dan diucapkan selamat menjalankan tugas dengan penuh dedikasi dan jayanya.</p>
			<p>Sekian, terima kasih.</p>
			<p>Yang benar</p>
			<br>
			<p><strong>PROFESOR MADYA DR. ABANG ZAINOREN BIN ABANG ABDURAHMAN<br>Timbalan Rektor<br>Penyelidikan dan Jaringan Industri</strong></p>
		</div>
	</body>
</html>




		

	
