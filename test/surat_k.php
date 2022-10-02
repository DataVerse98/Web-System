<?php 
	include "conn.php";
    
    $id = $_GET['id'];
	$sql = "SELECT * FROM certificate WHERE rec_id = $id";
    $query = $conn -> query($sql);
    $row = $query -> fetch_assoc();
    
    $ref_no = $row['ref_no'];
    $kp = $row['kp_id'];		
    $ap1 = $row['ap1_id'];
    $ap2 = $row['ap2_id'];
    $tajuk = $row['title'];
    $kod_projek = $row['kod_projek'];
    $tarikh_mula = strtotime($row['tarikh_mula']);
    $tarikh_tamat = strtotime($row['tarikh_tamat']);
    $kos = $row['kos'];
    
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
		  
		  color : 111;
		}
		body .page {
		  background: white;
		  display: block;
		  margin: 0 auto;
		  margin-bottom: 0.5cm;
		  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
		  width: 22cm;
		  height: 28.3cm;
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
            line-height: 1.4em;
		}


		@media print {
		  body, page[size="A4"] {
			margin: 0;
			box-shadow: 0;
		  }
		}

		</style>
		
				
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" >
			alert("To print the certificate , Please click ctrl+P");
		</script>
		
				
		<?php
			//$date = date("j F Y");
			$day = date('d');
			$month = date('m');
			$m = array("Januari", "Februari","Mac", "April", "Mei", "Jun", "Julai", "Ogos", "September", "October", "November","Disember");
			$month = $m[$month-1];
			$year = date('Y');
		?>
		<link rel="icon" type="image/png" href="images/logo.png" />
		<title>e-Letter RMU</title>
	</head>
		
	<body> <!--onLoad="javascript:print()"-->
		<div class="page">
			<img src="images/header_uitm.png" style="width: 22cm; " alt="Header img"> <!--opacity: 0-->
			<p> Surat Kami : <b><?php echo "$ref_no"?></b></p>
			<p> Tarikh <span style="display: inline-block; margin-left: 36px;"> :</span> <b><?php echo "$day $month $year"?></b></p>
			<br>
			
			<?php include "ketua_projek.php"?>
			<p><b><?php echo "$name <br> Ketua Projek <br> $fakulti <br> UiTM $cawangan <br> *poskod*"; ?></br></b></p>
			
			<p> Prof Madya/Dr/Tuan/Puan </p>
			
			<p><strong>KELULUSAN PERMOHONAN DANA KECEMERLANGAN UiTM <span style="text-transform: uppercase;"><?php echo $cawangan; ?> <?php echo $year?></span></strong></p>

            <p style="padding-left: 120px;"><b>Tajuk Projek<span style="display: inline-block; margin-left: 60px;">:</span> <?php echo $tajuk?></b></p>
			<p style="padding-left: 120px;"><b>Kod Projek <span style="display: inline-block; margin-left: 61px;" >:</span> <?php if($kod_projek!=null){echo $kod_projek;}?></b></p>
			<p style="padding-left: 120px;"><b>Tempoh <span style="display: inline-block; margin-left: 84px;" >:</span> <?php echo "$dayM $monthM $yearM"?> sehingga <?php echo "$dayT $monthT $yearT"?></b></p>
            <p style="padding-left: 120px;"><b>Jumlah Peruntukan <span style="display: inline-block; margin-left: 8px;">:</span> <?php echo $kos;?></b></p>
            
            <p style="padding-left: 120px;"><b>Ahli Projek <span style="display: inline-block; margin-left: 62px;">:</span> <?php if($ap1!=null){include "ahli_projek.php"; echo $nameap1;}?><br><span style="padding-left: 152px;"><?php if($ap2!=null){include "ahli_projek2.php"; echo $nameap2;}?><span></b></p>

            <p>Dengan hormatnya perkara di atas adalah dirujuk.</p>

			<p style="text-align:justify;">2.&Tab;&Tab; Sukacita dimaklumkan pihak Universiti telah meluluskan bagi membiayai cadangan penyelidikan Prof Madya/Dr/Tuan/Puan di bawah Dana Kecemerlangan UiTM <?php $cawangan?> <?php echo $year ?>. </p>
			<p style="text-align: justify;">3.    Jumlah peruntukan di atas hendaklah mengikut pecahan vot yang telah dipersetujui oleh pihak Panel Penilai DKCM <?php echo $year?>. Sekiranya pecahan vot dalam Cadangan Penyelidikan anda berbeza, sila pastikan anda menghantar pecahan vot yang terbaharu kepada pejabat RMU mengikut jumlah besar terkandung di atas. <br>(Ini untuk memastikan urusan tuntutan dari pihak Bendahari berjalan lancar).</p>
			<p style="text-align: justify;"> 4.      Antara syarat dana ini adalah seperti berikut:</p>
			<p style="text-align: justify; padding-left: 120px"> 4.1 <span>Pihak penyelidik adalah diminta untuk mengisi borang setuju terima projek penyelidikan dan mendaftarkan penyelidikan ini ke dalam Sistem PuTras sekurang-kurangnya 14 hari selepas daripada tarikh surat ini.</span></p>
			<p style="text-align: justify; padding-left: 120px"> 4.2 <span>Penyelidik mesti menghantar laporan kemajuan pada setiap enam (6) bulan secara atas talian  dalam sistem Putras.</span></p>
            <p style="text-align: justify; padding-left: 120px"> 4.3 <span>Pihak RMU akan menghantar surat pengesahan tamat penyelidikan selepas sahaja menerima  laporan akhir daripada pihak penyelidik. </span></p>
			
		</div>
		<div class="page">
			<br><br><br><br><br>
			<p style="text-align: justify; padding-left: 120px"> 4.4 <span>Penghargaan kepada geran Dana Kecemerlangan UiTM Sarawak mestilah dinyatakan  dengan jelas dalam setiap penerbitan.</span></p>
			<p style="text-align: justify; padding-left: 120px"> 4.5 <span>Sila rujuk ke pejabat atau laman sesawang RMU UiTM Sarawak bagi tatacara untuk pengurusan projek.</span> </p>
			<p style="text-align: justify; padding-left: 120px"> 4.6 <span>Kegagalan penyelidik untuk menyiapkan laporan penyelidikan dalam tempoh yang diberi boleh dikenakan tindakan tatatertib.</span> </p>
            <p style="text-align: justify; padding-left: 120px"> 4.7 <span>Semua perkara di atas adalah tertakluk kepada Garis Panduan Pemantauan Penyelidikan UiTM.</span> </p>
			<p style="text-align: justify;"> Sekian, harap maklum. </p>
			<br>
			<p><strong>“SELAMAT MENJALANKAN PENYELIDIKAN DENGAN JAYANYA”</strong></p>
			<p>Yang benar</p>
			<br>
			<br>
			<br>
			<p><strong>PROFESOR DATO DR. JAMIL HAJI HAMALI</strong></p>
			<p><strong>Rektor</strong></p>
		</div>
	</body>
</html>




		

	
