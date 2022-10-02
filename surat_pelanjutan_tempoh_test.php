<?php 
	include "conn.php";
	
	if(isset($_POST['generate_spt'])){
		$ref_no = $_POST['ref_no'];
		$kp = $_POST['kp'];		
		$ap1 = $_POST['ap1'];
		$ap2 = $_POST['ap2'];
		$ap3 = $_POST['ap3'];
		$ap4 = $_POST['ap4'];
		$tajuk = $_POST['tajuk'];
		$info = $_POST['info'];
		//$kelulusan = $_POST['kelulusan'];
		$tempoh = $_POST['tempoh'];
		$tarikh_mula = strtotime($_POST['tarikh_mula']);
		$tarikh_tamat = strtotime($_POST['tarikh_tamat']);
		
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
	}
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
		<title>ER1</title>
	</head>
		
	<body> <!--onLoad="javascript:print()"-->
		<?php if($ap3==null){?>
		<div class="page">
			<img src="images/header_uitm.png" style="margin-left: 30px; margin-right:30px; margin-top:25px; width: 20.5cm" alt="Header img"> <!--opacity: 0-->
			<p style="padding-left: 50%"> Surat Kami : <b><?php echo "$ref_no"?></b></p>
			<p style="padding-left: 50%"> Tarikh <span style="display: inline-block; margin-left: 36px;"> :</span> <b><?php echo "$day $month $year"?></b></p>
			<br>
			<?php if($kp!=null){ ?>
				<p><b><?php include "ketua_projek.php"; echo "$name <br> Ketua Projek <br> Universiti Teknologi MARA Cawangan $cawangan <br> Kampus Samarahan";?></b></p>
				<?php }?>
				<?php if($ap1!=null){?>
				<p><b><?php include "ahli_projek.php"; echo "$nameap1 <br> Ahli Projek <br> Universiti Teknologi MARA Cawangan $cawanganap1 <br> Kampus Samarahan"; ?></b></p>
				<?php }?>
				<?php if($ap2!=null){?>
				<p><b><?php  include "ahli_projek2.php"; echo "$nameap2 <br> Ahli Projek <br> Universiti Teknologi MARA Cawangan $cawanganap2 <br> Kampus Samarahan"; ?></b></p>
				<?php }?>
				
			<p><br>Prof/Prof Madya/Dr/Tuan/Puan </p>
			<p style="text-transform: uppercase;"><strong>KELULUSAN PELANJUTAN TEMPOH PROJEK PENYELIDIKAN KALI PERTAMA:<br>
				DANA KECEMERLANGAN UiTM SARAWAK<br> "<?php echo"$tajuk"?>"</strong></p>
			<p>Dengan hormatnya perkara di atas adalah dirujuk.</p>
			
			<p style="text-align:justify;">2.&Tab;&Tab; Sukacita dimaklumkan bahawa Jawatankuasa Penyelidikan Negeri (JPN) telah <b>meluluskan</b> permohonan pelanjutan tempoh projek penyelidikan <b>kali pertama</b> bagi tajuk projek tuan/puan tersebut di atas, dengan syarat-syarat seperti berikut:</p>
			<p style="text-align: justify; padding-left: 120px"> i.&Tab; Tempoh pelanjutan yang telah diluluskan ialah <?php echo"$tempoh"?>, iaitu bermula <b><?php echo "$dayM $monthM $yearM"?> hingga <?php echo "$dayT $monthT $yearT"?></b></p>
			<p style="text-align: justify; padding-left: 120px"> ii.&Tab; Pelanjutan tempoh projek penyelidikan kali kedua adalah <u>tidak dibenarkan</u> bagi Geran ini.  Sehubungan itu, penyelidik adalah dinasihatkan untuk menggunakan sebaik-baiknya baki tempoh yang ada untuk menamatkan projek penyelidikan ini.</p>
			<p style="text-align: justify; padding-left: 120px"> iii.&Tab; Penggunaan peruntukan dan perbelanjaan setelah tamat projek adalah tidak dibenarkan.  Permohonan perolehan yang melibatkan Pesanan Tempatan (LO) oleh penyelidik hendaklah dilakukan tidak lewat daripada tiga (3) bulan sebelum tamat projek.</p>
			<p style="text-align: justify; padding-left: 120px"> iv.&Tab; Pembelian peralatan ICT (komputer, peranti storan, toner pencetak, dan sebagainya) dan peralatan pejabat (alat tulis, kertas, dan sebagainya) adalah <b>tidak dibenarkan menggunakan Geran ini</b>.  Lain-lain pembelian bahan/peralatan adalah diminta agar tuan/puan mematuhi Peraturan Kewangan dan Perakaunan UiTM yang sedang berkuatkuasa.</p>
			
		</div>
		<div class="page">
			<br><br><br>
			<p style="text-align: justify; padding-left: 120px"> v.&Tab; Bagi tujuan audit pemantauan geran penyelidikan, semua dokumen kewangan perbelanjaan peruntukan menggunakan Geran ini hendaklah dibuat satu (1) salinan ke dalam Fail Projek di Pejabat RMU.</p>
			<p style="text-align: justify; padding-left: 120px"> vi.&Tab; Semua urusan surat-menyurat rasmi penyelidik berkaitan Projek ini hendaklah menggunakan Nombor Fail Projek mengikut nombor Surat Tawaran projek ini, dan hendaklah dibuat satu (1) salinan ke dalam Fail Projek di Pejabat RMU. </p>
			<p style="text-align: justify; padding-left: 120px"> vii.&Tab; Surat Pengesahan Penerimaan Borang Tamat Projek dan/atau Surat Pengesahan Penerimaan Laporan Akhir Projek akan dikeluarkan kepada penyelidik setelah Borang Tamat Projek dan/atau Laporan Akhir Projek dikemukakan kepada pejabat RMU. </p>
			<p style="text-align: justify; padding-left: 120px"> viii.&Tab; Penghargaan kepada Geran Dana Kecemerlangan UiTM Sarawak perlu dinyatakan dengan jelas dalam setiap penerbitan atau penghasilan harta intelek menggunakan Geran ini. </p>
			<p style="text-align: justify; padding-left: 120px"> ix.&Tab; Universiti berhak membatalkan kelulusan geran dan menamatkan projek sekiranya peruntukan tidak digunakan setelah enam (6) bulan daripada tarikh kelulusan dikeluarkan atau prestasi projek tidak memuaskan. </p>
			<p style="text-align: justify; padding-left: 120px"> x.&Tab; Syarat-syarat tersebut di atas adalah tertakluk kepada pindaan Garis Panduan Pemantauan Geran Penyelidikan UiTM dari semasa ke semasa.  Penyelidik adalah diingatkan untuk sentiasa merujuk kepada Garis Panduan tersebut. </p>
			<p style="text-align:justify;">3.&Tab;&Tab; Kelulusan ini <?php echo $info ?>.</p>
			<p>Sekian, terima kasih.</p>	
			<p><strong>“SELAMAT MENJALANKAN PENYELIDIKAN DENGAN JAYANYA”</strong></p>
			<p>Yang benar</p>
			<br>
			<p><strong>PROFESOR DATO DR. JAMIL HAJI HAMALI<br>Rektor</strong></p>
		</div>
		<?php }else {?>
			<div class="page">
			<img src="images/header_uitm.png" style="margin-left: 30px; margin-right:30px; margin-top:25px; width: 20.5cm" alt="Header img"> <!--opacity: 0-->
			<p style="padding-left: 50%"> Surat Kami : <b><?php echo "$ref_no"?></b></p>
			<p style="padding-left: 50%"> Tarikh <span style="display: inline-block; margin-left: 36px;"> :</span> <b><?php echo "$day $month $year"?></b></p>
			<br>
			<?php if($kp!=null){ ?>
				<p><b><?php include "ketua_projek.php"; echo "$name <br> Ketua Projek <br> Universiti Teknologi MARA Cawangan $cawangan <br> Kampus Samarahan";?></b></p>
				<?php }?>
				<?php if($ap1!=null){?>
				<p><b><?php include "ahli_projek.php"; echo "$nameap1 <br> Ahli Projek <br> Universiti Teknologi MARA Cawangan $cawanganap1 <br> Kampus Samarahan"; ?></b></p>
				<?php }?>
				<?php if($ap2!=null){?>
				<p><b><?php  include "ahli_projek2.php"; echo "$nameap2 <br> Ahli Projek <br> Universiti Teknologi MARA Cawangan $cawanganap2 <br> Kampus Samarahan"; ?></b></p>
				<?php }?>
				<?php if($ap3!=null){?>
				<p><b><?php  include "ahli_projek3.php"; echo "$nameap3 <br> Ahli Projek <br> Universiti Teknologi MARA Cawangan $cawanganap3 <br> Kampus Samarahan"; ?></b></p>
				<?php }?>
				<?php if($ap4!=null){?>
				<p><b><?php  include "ahli_projek4.php"; echo "$nameap4 <br> Ahli Projek <br> Universiti Teknologi MARA Cawangan $cawanganap4 <br> Kampus Samarahan"; ?></b></p>
				<?php }?>
				
			<p><br>Prof/Prof Madya/Dr/Tuan/Puan </p>
			<p style="text-transform: uppercase;"><strong>KELULUSAN PELANJUTAN TEMPOH PROJEK PENYELIDIKAN KALI PERTAMA:<br>
				DANA KECEMERLANGAN UiTM SARAWAK<br> "<?php echo"$tajuk"?>"</strong></p>
			<p>Dengan hormatnya perkara di atas adalah dirujuk.</p>
			
			<p style="text-align:justify;">2.&Tab;&Tab; Sukacita dimaklumkan bahawa Jawatankuasa Penyelidikan Negeri (JPN) telah <b>meluluskan</b> permohonan pelanjutan tempoh projek penyelidikan <b>kali pertama</b> bagi tajuk projek tuan/puan tersebut di atas, dengan syarat-syarat seperti berikut:</p>
			<p style="text-align: justify; padding-left: 120px"> i.&Tab; Tempoh pelanjutan yang telah diluluskan ialah <?php echo"$tempoh"?>, iaitu bermula <b><?php echo "$dayM $monthM $yearM"?> hingga <?php echo "$dayT $monthT $yearT"?></b></p>
			<p style="text-align: justify; padding-left: 120px"> ii.&Tab; Pelanjutan tempoh projek penyelidikan kali kedua adalah <u>tidak dibenarkan</u> bagi Geran ini.  Sehubungan itu, penyelidik adalah dinasihatkan untuk menggunakan sebaik-baiknya baki tempoh yang ada untuk menamatkan projek penyelidikan ini.</p>
			
		</div>
		<div class="page">
			<br><br><br>
			<p style="text-align: justify; padding-left: 120px"> iii.&Tab; Penggunaan peruntukan dan perbelanjaan setelah tamat projek adalah tidak dibenarkan.  Permohonan perolehan yang melibatkan Pesanan Tempatan (LO) oleh penyelidik hendaklah dilakukan tidak lewat daripada tiga (3) bulan sebelum tamat projek.</p>
			<p style="text-align: justify; padding-left: 120px"> iv.&Tab; Pembelian peralatan ICT (komputer, peranti storan, toner pencetak, dan sebagainya) dan peralatan pejabat (alat tulis, kertas, dan sebagainya) adalah <b>tidak dibenarkan menggunakan Geran ini</b>.  Lain-lain pembelian bahan/peralatan adalah diminta agar tuan/puan mematuhi Peraturan Kewangan dan Perakaunan UiTM yang sedang berkuatkuasa.</p>
			<p style="text-align: justify; padding-left: 120px"> v.&Tab; Bagi tujuan audit pemantauan geran penyelidikan, semua dokumen kewangan perbelanjaan peruntukan menggunakan Geran ini hendaklah dibuat satu (1) salinan ke dalam Fail Projek di Pejabat RMU.</p>
			<p style="text-align: justify; padding-left: 120px"> vi.&Tab; Semua urusan surat-menyurat rasmi penyelidik berkaitan Projek ini hendaklah menggunakan Nombor Fail Projek mengikut nombor Surat Tawaran projek ini, dan hendaklah dibuat satu (1) salinan ke dalam Fail Projek di Pejabat RMU. </p>
			<p style="text-align: justify; padding-left: 120px"> vii.&Tab; Surat Pengesahan Penerimaan Borang Tamat Projek dan/atau Surat Pengesahan Penerimaan Laporan Akhir Projek akan dikeluarkan kepada penyelidik setelah Borang Tamat Projek dan/atau Laporan Akhir Projek dikemukakan kepada pejabat RMU. </p>
			<p style="text-align: justify; padding-left: 120px"> viii.&Tab; Penghargaan kepada Geran Dana Kecemerlangan UiTM Sarawak perlu dinyatakan dengan jelas dalam setiap penerbitan atau penghasilan harta intelek menggunakan Geran ini. </p>
			<p style="text-align: justify; padding-left: 120px"> ix.&Tab; Universiti berhak membatalkan kelulusan geran dan menamatkan projek sekiranya peruntukan tidak digunakan setelah enam (6) bulan daripada tarikh kelulusan dikeluarkan atau prestasi projek tidak memuaskan. </p>
			<p style="text-align: justify; padding-left: 120px"> x.&Tab; Syarat-syarat tersebut di atas adalah tertakluk kepada pindaan Garis Panduan Pemantauan Geran Penyelidikan UiTM dari semasa ke semasa.  Penyelidik adalah diingatkan untuk sentiasa merujuk kepada Garis Panduan tersebut. </p>
			<p style="text-align:justify;">3.&Tab;&Tab; Kelulusan ini <?php echo $info ?>.</p>
			<p>Sekian, terima kasih.</p>	
			<p><strong>“SELAMAT MENJALANKAN PENYELIDIKAN DENGAN JAYANYA”</strong></p>
			<p>Yang benar</p>
			<br>
			<p><strong>PROFESOR DATO DR. JAMIL HAJI HAMALI<br>Rektor</strong></p>
		</div>
		<?php }?>
	</body>
</html>




		

	
