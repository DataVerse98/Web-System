<?php 
	include "conn.php";
	
	if(isset($_POST['generate_sst'])){
		$tajuk = $_POST['tajuk'];
		$kod = $_POST['kod'];
		$kategori = $_POST['kategori'];
		$tempoh = $_POST['tempoh'];
		$kos = $_POST['kos'];
		$kp = $_POST['kp'];
	}
?>

<html>
	<head>
		<style>
		html, body {
		  background: rgb(204,204,204); 
		  font: 11pt "Arial";
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
			
		}
		
		.tab { 
            display: inline-block; 
            margin-left: 40px; 
        } 
		
		table {
			table-layout: fixed;
			width: 100%;
		  border-collapse: collapse;
		}
		
		

		table, th, td {	
		  border: 1px solid black;
		}
		
		/*table {
			//width: 100%;
			padding-left: 50px;
			padding-right: 100px;
			border-collapse: collapse;
		}
		.tbl, .trow {
			//width: 100%;
		}

		.tbl, .tdt1 {
			width:20%;
		  border: 1px solid black;
		}
		.tbl, .tdt2 {
			width:80%;
		  border: 1px solid black;
		}*/


		@media print {
		  body, page[size="A4"] {
			margin: 0;
			box-shadow: 0;
		  }
		}

		</style>
		
		<!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->		
		<script src="../js/jquery.min.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>-->
				
		<?php
			//$date = date("j F Y");
			$day = date('d');
			$month = date('m');
			$m = array("Januari", "Februari","Mac", "April", "Mei", "Jun", "Julai", "Ogos", "September", "October", "November","Disember");
			$month = $m[$month-1];
			$year = date('Y');
		?>
		<?php include "ketua_projek.php" ?>
		<script type="text/javascript" >
			alert("To print the certificate , Please click ctrl+P");
		</script>
		<link rel="icon" type="image/png" href="images/logo.png" />
		<title>ER1</title>
	</head>
		
	<body> <!--onLoad="javascript:print()"-->
		<div class="page">
			<br></br><br>
			<p style="text-align: center"><strong>SETUJU TERIMA BAGI MENJALANKAN PROJEK PENYELIDIKAN <br> DANA KECEMERLANGAN UiTM SARAWAK</strong></p>
			<p> Tarikh : <b><?php echo "$day $month $year"?></b></p>
			<br>
			<p>Unit Pengurusan Penyelidikan<br>Bahagian Penyelidikan dan Jaringan Industri<br>UiTM Cawangan Sarawak<br>Kampus Samarahan</p>
			<p>Tajuk projek <span style="display: inline-block; margin-left: 65px;">:</span> <?php echo "$tajuk"?><br>
			Kod projek 	<span style="display: inline-block; margin-left: 73px;">:</span> <?php echo "$kod"?><br>
			Kategori Penyelidikan	: <span><?php echo "$kategori"?></span><br>
			Tempoh 	<span style="display: inline-block; margin-left: 93px;">:</span><span> <?php echo "$tempoh"?></span><br>
			Jumlah Peruntukan 	<span style="display: inline-block; margin-left: 16px;">:</span><span> <?php echo "$kos"?></span><br>
			Ketua Projek 	<span style="display: inline-block; margin-left: 58px;">:</span><span> <?php echo "$name"?></span><br>
			<b>________________________________________________________________________________________</b><p>
			<p>Dengan hormatnya perkara di atas adalah dirujuk.</p>
			<p>Dengan ini kami para penyelidik bersetuju untuk menjalankan dan menyempurnakan kerja-kerja penyelidikan mengikut butir-butir sepertimana yang tercatat di dalam Kertas Cadangan Projek Penyelidikan serta tatacara dan peraturan yang ditetapkan oleh pihak RMU UiTM Sarawak dan Universiti.</p>
			<p><table>
				<tr>
					<td style="width: 20%;">Nama Ketua</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
				<tr>
					<td style="width: 20%;">No Pekerja</td>
					<td style=" width: 30%;"></td>
					<td style=" width: 15%;">Emel</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td style=" width: 20%;">Tel. Pejabat</td>
					<td style=" width: 50%;"></td>
					<td style="width: 15%;">Tel. Bimbit</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td colspan="2"><div style=" width: 50%;">Fakulti/Pusat/Bahagian/Jabatan</div></td>
					<td colspan="4"><div style="width: 50%;"></div></td>
				</tr>
				<tr style="height: 1cm; border-bottom-style: solid">
					<td style=" width: 20%;">Tandatangan</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
			</table></p>
			<p><table>
				<tr>
					<td style="width: 20%;">Nama Ahli</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
				<tr>
					<td style="width: 20%;">No Pekerja</td>
					<td style=" width: 30;"></td>
					<td style=" width: 15%;">Emel</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td style=" width: 20%;">Tel. Pejabat</td>
					<td style=" width: 30%;"></td>
					<td style="width: 15%;">Tel. Bimbit</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td colspan="2"><div style=" width: 40%;">Fakulti/Pusat/Bahagian/Jabatan</div></td>
					<td colspan="4"><div style="width: 60%;"></div></td>
				</tr>
				<tr style="height: 1cm; border-bottom-style: solid">
					<td style=" width: 20%;">Tandatangan</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
			</table></p>
			<p><table>
				<tr>
					<td style="width: 20%;">Nama Ahli</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
				<tr>
					<td style="width: 20%;">No Pekerja</td>
					<td style=" width: 30%;"></td>
					<td style=" width: 15%;">Emel</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td style=" width: 20%;">Tel. Pejabat</td>
					<td style=" width: 30%;"></td>
					<td style="width: 15%;">Tel. Bimbit</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td colspan="2"><div style=" width: 40%;">Fakulti/Pusat/Bahagian/Jabatan</div></td>
					<td colspan="4"><div style="width: 60%;"></div></td>
				</tr>
				<tr style="height: 1cm; border-bottom-style: solid">
					<td style=" width: 20%;">Tandatangan</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
			</table></p>
		</div>
		<div class="page">
		<br><br><br>
		<p><table>
				<tr>
					<td style="width: 20%;">Nama Ahli</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
				<tr>
					<td style="width: 20%;">No Pekerja</td>
					<td style=" width: 30%;"></td>
					<td style=" width: 15%;">Emel</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td style=" width: 20%;">Tel. Pejabat</td>
					<td style=" width: 30%;"></td>
					<td style="width: 15%;">Tel. Bimbit</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td colspan="2"><div style=" width: 40%;">Fakulti/Pusat/Bahagian/Jabatan</div></td>
					<td colspan="4"><div style="width: 60%;"></div></td>
				</tr>
				<tr style="height: 1cm; border-bottom-style: solid">
					<td style=" width: 20%;">Tandatangan</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
			</table></p>
			<p><table>
				<tr>
					<td style="width: 20%;">Nama Ahli</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
				<tr>
					<td style="width: 20%;">No Pekerja</td>
					<td style=" width: 30%;"></td>
					<td style=" width: 15%;">Emel</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td style=" width: 20%;">Tel. Pejabat</td>
					<td style=" width: 30%;"></td>
					<td style="width: 15%;">Tel. Bimbit</td>
					<td colspan="4" style=" width: 35%;"></td>
				</tr>
				<tr>
					<td colspan="2"><div style=" width: 40%;">Fakulti/Pusat/Bahagian/Jabatan</div></td>
					<td colspan="4"><div style="width: 60%;"></div></td>
				</tr>
				<tr style="height: 1cm; border-bottom-style: solid">
					<td style=" width: 20%;">Tandatangan</td>
					<td colspan="4" style=" width: 80%;"></td>
				</tr>
			</table></p>
		</div>
	</body>
</html>




		

	
