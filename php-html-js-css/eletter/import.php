<?php include ("conn.php");?>
<?php 
	
	require 'Classes/PHPExcel/IOFactory.php';
	
	$surat = $_GET['surat'];
	
	
		if(isset($_POST['upload'])){
			$inputfilename = $_FILES['file']['tmp_name'];
			$exceldata = array();
		
		
			try {
				$inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
				$objReader =  PHPExcel_IOFactory::createReader($inputfiletype);
				$objPHPExcel = $objReader->load($inputfilename);
			} catch(Exception $e){
				//die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
				echo "<script>
						alert('File Empty.');
						window.location = 'import.php?surat=$surat';
					</script>";
			}
		
		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();
		$highestColumn = $sheet->getHighestColumn();
		
		if($surat==1){
			$type_cer = "surat tawaran";
		
			for($row = 2;$row<=$highestRow;$row++){
				$rowData = $sheet->rangeToArray('A' . $row . ':' .$highestColumn . $row, NULL, TRUE, FALSE);
				
				$UNIX_DATE = ($rowData[0][9] - 25569) * 86400;
				$my_date =  gmdate("Y-m-d H:i:s", $UNIX_DATE);
				
				/*$UNIX_DATE2 = ($rowData[0][7] - 25569) * 86400;
				$my_date2 =  gmdate("Y-m-d H:i:s", $UNIX_DATE2);*/
				
				$my_date2 = $val = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][10]));
				
				$current_date = date("Y-m-d");
				
				$sql = "INSERT INTO certificate (type_cer,date_generate,jenis_geran,ref_no,kp_id,ap1_id,ap2_id,ap3_id,ap4_id,title,tempoh,tarikh_mula,tarikh_tamat,kos) VALUES ('".$type_cer."','".$current_date."','".$rowData[0][0]."', '".$rowData[0][1]."','".$rowData[0][2]."','".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."','".$rowData[0][6]."','".$rowData[0][7]."','".$rowData[0][8]."','".$my_date."','".$my_date2."','".$rowData[0][11]."')";
				
				if(mysqli_query($conn,$sql)){
					//$exceldata[] = $rowData[0];
					echo "<script>
							alert('Document is recorded.');
							window.location = 'import.php?surat=1';
						</script>";
				} else {
					echo "Error:" .$sql. "<br>".mysqli_error($conn);
				}
			}
		} else if($surat==2){
			$type_cer = "surat setuju terima";
	
			for($row = 2;$row<=$highestRow;$row++){
				$rowData = $sheet->rangeToArray('A' . $row . ':' .$highestColumn . $row, NULL, TRUE, FALSE);
				
				//$UNIX_DATE = ($rowData[0][6] - 25569) * 86400;
				//$my_date =  gmdate("Y-m-d H:i:s", $UNIX_DATE);
				
				//$my_date2 = $val = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][7]));
				
				$current_date = date("Y-m-d");
				
				$sql = "INSERT INTO certificate (type_cer,date_generate,title,kod_projek,kategori,tempoh,kos,kp_id) VALUES ('".$type_cer."','".$current_date."','".$rowData[0][0]."', '".$rowData[0][1]."','".$rowData[0][2]."','".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."')";
				
				if(mysqli_query($conn,$sql)){
					//$exceldata[] = $rowData[0];
					echo "<script>
							alert('Document is recorded.');
							window.location = 'import.php?surat=2';
						</script>";
				} else {
					echo "Error:" .$sql. "<br>".mysqli_error($conn);
				}
			}
		} else if ($surat==3){
			$type_cer = "surat pelanjutan tempoh";
	
			for($row = 2;$row<=$highestRow;$row++){
				$rowData = $sheet->rangeToArray('A' . $row . ':' .$highestColumn . $row, NULL, TRUE, FALSE);
				
				$UNIX_DATE = ($rowData[0][8] - 25569) * 86400;
				$my_date =  gmdate("Y-m-d H:i:s", $UNIX_DATE);
				
				$my_date2 = $val = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][9]));
				
				$current_date = date("Y-m-d");
				
				$sql = "INSERT INTO certificate (type_cer,date_generate,ref_no,kp_id,ap1_id,ap2_id,ap3_id,ap4_id,title,tempoh,tarikh_mula,tarikh_tamat,info) VALUES ('".$type_cer."','".$current_date."','".$rowData[0][0]."', '".$rowData[0][1]."','".$rowData[0][2]."','".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."','".$rowData[0][6]."','".$rowData[0][7]."','".$my_date."','".$my_date2."','".$rowData[0][10]."')";
				
				if(mysqli_query($conn,$sql)){
					//$exceldata[] = $rowData[0];
					echo "<script>
							alert('Document is recorded.');
							window.location = 'import.php?surat=3';
						</script>";
				} else {
					echo "Error:" .$sql. "<br>".mysqli_error($conn);
				}
			}
		} else if ($surat==4){
			$type_cer = "surat pelantikan";
	
			for($row = 2;$row<=$highestRow;$row++){
				$rowData = $sheet->rangeToArray('A' . $row . ':' .$highestColumn . $row, NULL, TRUE, FALSE);
				
				$UNIX_DATE = ($rowData[0][3] - 25569) * 86400;
				$my_date =  gmdate("Y-m-d H:i:s", $UNIX_DATE);
				
				$my_date2 = $val = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][4]));
				
				$current_date = date("Y-m-d");
				
				$sql = "INSERT INTO certificate (type_cer,date_generate,ref_no,kp_id,title,tarikh_mula,tarikh_tamat,pelantikan) VALUES ('".$type_cer."','".$current_date."','".$rowData[0][0]."', '".$rowData[0][1]."','".$rowData[0][2]."','".$my_date."','".$my_date2."','".$rowData[0][5]."')";
				
				if(mysqli_query($conn,$sql)){
					//$exceldata[] = $rowData[0];
					echo "<script>
							alert('Document is recorded.');
							window.location = 'import.php?surat=4';
						</script>";
				} else {
					echo "Error:" .$sql. "<br>".mysqli_error($conn);
				}
			}
		} 
	
		}

?>
<?php 
	if($surat==1){
		$sql3 = "SELECT * FROM certificate WHERE type_cer = 'surat tawaran'";	
		$query3 = $conn -> query($sql3);
		$row = $query3 -> fetch_assoc();
	} else if ($surat==2){
		$sql3 = "SELECT * FROM certificate WHERE type_cer = 'surat setuju terima'";
		$query3 = $conn -> query($sql3);
		$row = $query3 -> fetch_assoc();
	} else if ($surat==3){
		$sql3 = "SELECT * FROM certificate WHERE type_cer = 'surat pelanjutan tempoh'";
		$query3 = $conn -> query($sql3);
		$row = $query3 -> fetch_assoc();
	} else if ($surat==4){
		$sql3 = "SELECT * FROM certificate WHERE type_cer = 'surat pelantikan'";
		$query3 = $conn -> query($sql3);
		$row = $query3 -> fetch_assoc();
	} 
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
		<title>LGSystem</title>
		
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#search").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#tableData tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	</head>
	<body>
	<!--<//?php include "navbar.php";?>-->

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
			<span class="navbar-brand">
				<img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				LGSystem
			</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item dropdown pr-5">
						<a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="newIndex2.php">Back</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="homepage.php" >Home</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="login.php" >Log Out</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div align="center">
			<main role="main" class="ml-sm-auto px-5">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
					<h2>Letter</h2>
					<input id="search" class="form-control form-control-dark w-75" type="text" placeholder="Search Record Here..." aria-label="Search">
					
				</div>
				<div class="table-responsive mt-2">
					<table id="tblData" class="table table-striped table-sm">
						<thead class="thead-dark">
							<tr>
								<!--<th>NO. RQM</th>-->
								<th>TITLE</th>
								<!--<th>EMAIL</th>-->
								<th>TYPE OF LETTER</th>
								<th>DATE GENERATED</th>
								<th>PROJECT LEADER/STAFF</th>								
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody id="tableData">
							<?php do { ?>
								<tr>
									<td><?php echo $row['title']; ?></td>
									<td><?php echo $row['type_cer']; ?></td>
									<td><?php echo $row['date_generate']; ?></td>
									<?php
										$kp = $row['kp_id'];
										
										$sql2 = "SELECT * FROM staff_info WHERE staff_id = '$kp'";
										$query2 = $conn -> query($sql2);
										$row2 = $query2 -> fetch_assoc(); 
										$kpname = $row2['name'];
										?>
									<td><?php echo "$kpname"; ?></td>
									<td>
									<a class="btn btn-secondary" type="button" name="update" href="update.php?id=<?php echo $row['rec_id'];?>&surat=<?php echo $surat;?>">update</a>

									<a type="button" name="delete" href="newDelete.php?id=<?php echo $row['rec_id'];?>&surat=<?php echo $surat;?>" title="delete">
										<image src="img/delete.png" style="width: 20px; height: 20px;" alt="delete icon">
									</a>
									
									<?php if($surat==1){?>
										<a href="surat_tawaran.php?id=<?php echo $row['rec_id']; ?>" target="_blank" name="download" title="download">
											<image src="img/download.png" style="width: 40px; height: 20px;" alt="download icon">
										</a>
									<?php } else if($surat==2){?>
										<a href="surat_st.php?id=<?php echo $row['rec_id']; ?>" target="_blank" name="download" title="download">
											<image src="img/download.png" style="width: 40px; height: 20px;" alt="download icon">
										</a>
									<?php } else if ($surat==3){?>
										<a href="surat_pelanjutan_tempoh.php?id=<?php echo $row['rec_id']; ?>" target="_blank" name="download" title="download">
											<image src="img/download.png" style="width: 40px; height: 20px;" alt="download icon">
										</a>
									<?php } else if ($surat==4){?>
										<a href="surat_pelantikan.php?id=<?php echo $row['rec_id']; ?>" target="_blank" title="download">
											<image src="img/download.png" style="width: 40px; height: 20px;" alt="download icon">
										</a>
									<?php } ?>
									</td>
								</tr>
							<?php } while ($row = $query3 -> fetch_assoc()); ?>
						</tbody>
					</table>
				</div>
			</main>
		</div>
		<div align="center">
			<form action = "import.php?surat=<?php echo $surat?>" method="POST" enctype="multipart/form-data" >
				<input type="file" name="file">
				<input type="submit" name="upload" value="upload"><br>
				<?php if($surat==1){?>
				<a type="button" name="contoh" href="file/contoh_surat_t.xlsx" value="example">sample file</a>
				<?php } else if($surat==2){?>
				<a type="button" name="contoh" href="file/contoh_surat_st.xlsx" value="example">sample file</a>
				<?php } else if($surat==3){?>
				<a type="button" name="contoh" href="file/contoh_surat_pelanjutan_t.xlsx" value="example">sample file</a>
				<?php } else if($surat==4){?>
				<a type="button" name="contoh" href="file/contoh_surat_pelantikan.xlsx" value="example">sample file</a>
				<?php }?>
			</form>

			<p class="mt-5 text-muted">Developed by Abdul Azim Bin Ismail <br> Penyelidikan Jaringan Industri UiTM Cawangan Sarawak <br> &copy; All Rights Reserved 2020</p>
		</div>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
	</body>
</html>