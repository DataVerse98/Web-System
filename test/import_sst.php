<?php include ("conn.php"); ?>
<?php	

	require 'Classes/PHPExcel/IOFactory.php';
	
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
					window.location = 'import_sst.php';
				</script>";
		}
	
	$sheet = $objPHPExcel->getSheet(0);
	$highestRow = $sheet->getHighestRow();
	$highestColumn = $sheet->getHighestColumn();
	
	$type_cer = "surat setuju terima";
	
	for($row = 1;$row<=$highestRow;$row++){
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
					window.location = 'import_sst.php';
				</script>";
		} else {
			echo "Error:" .$sql. "<br>".mysqli_error($conn);
		}
	}
	
	
	
	}
?>
<?php 
	$sql3 = "SELECT * FROM certificate WHERE type_cer = 'surat setuju terima'";
	
	$query3 = $conn -> query($sql3);
	$row = $query3 -> fetch_assoc();
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<title>e-letter</title>
		
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
	<?php include "navbar.php";?>
		<div align="center">
			<main role="main" class="ml-sm-auto px-5">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
					<h2>REKOD</h2>
					<input id="search" class="form-control form-control-dark w-75" type="text" placeholder="Search Record Here..." aria-label="Search">
					
				</div>
				<div class="table-responsive mt-2">
					<table id="tblData" class="table table-striped table-sm">
						<thead class="thead-dark">
							<tr>
								<!--<th>NO. RQM</th>-->
								<th>TITLE</th>
								<!--<th>EMAIL</th>-->
								<th>TYLE OF LETTER</th>
								<th>DATE GENERATE</th>
								<th>KETUA PROJEK</th>								
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
									<td><!--<a type="button" name="update" href="#" class="btn btn-sm btn-outline-secondary update-data">UPDATE</a>-->
									<a type="button" name="delete" href="delete_sst.php?id=<?php echo $row['rec_id'];?>" title="delete">
										<image src="img/delete.png" style="width: 20px; height: 20px;" alt="delete icon">
									</a>
									<a href="surat_st.php?id=<?php echo $row['rec_id']; ?>" target="_blank" name="download" title="download">
										<image src="img/download.png" style="width: 40px; height: 20px;" alt="download icon">
									</a>
									
									</td>
								</tr>
							<?php } while ($row = $query3 -> fetch_assoc()) ?>
						</tbody>
					</table>
				</div>
			</main>
		</div>
		<div align="center">
			<form action = "import_sst.php" method="POST" enctype="multipart/form-data" >
				<input type="file" name="file">
				<input type="submit" name="upload" value="upload">
				<a type="button" name="contoh" href="file/sst.xlsx" value="example">example</a>
			</form>
		</div>
	</body>
</html>