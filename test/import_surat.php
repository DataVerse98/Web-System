<?php 
	include ("conn.php");
	
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
					window.location = 'import.php';
				</script>";
		}
	
	$sheet = $objPHPExcel->getSheet(0);
	$highestRow = $sheet->getHighestRow();
	$highestColumn = $sheet->getHighestColumn();
	
	for($row = 1;$row<=$highestRow;$row++){
		$rowData = $sheet->rangeToArray('A' . $row . ':' .$highestColumn . $row, NULL, TRUE, FALSE);
		
		$UNIX_DATE = ($rowData[0][4] - 25569) * 86400;
		$my_date =  gmdate("Y-m-d H:i:s", $UNIX_DATE);
		
		$sql = "INSERT INTO record (receive_from,email,doc_type,doc_title,receive_date,status) VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."','".$rowData[0][2]."','".$rowData[0][3]."','".$my_date."','".$rowData[0][5]."')";
		
		if(mysqli_query($conn,$sql)){
			//$exceldata[] = $rowData[0];
			echo "<script>
					alert('Document is recorded.');
					window.location = 'import_st.php';
				</script>";
		} else {
			echo "Error:" .$sql. "<br>".mysqli_error($conn);
		}
	}
	
	
	
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<title>DCKM</title>
		
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
								<th>TYPE OF LETTER</th>
								<th>DATE GENERATE</th>
								<th>KETUA PROJEK</th>								
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody id="tableData">
							<!--<//?php do { ?>-->
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a type="button" name="update" href="#" class="btn btn-sm btn-outline-secondary update-data">UPDATE</a>
									<a type="button" name="delete" href="#" title="delete">
										<image src="img/delete.png" style="width: 20px; height: 20px;" alt="delete icon">
									</a>
									<a download="#" href="#" title="download">
										<image src="img/download.png" style="width: 40px; height: 20px;" alt="download icon">
									</a>									
									</td>
								</tr>
							<!--<//?php } while ($row = $query -> fetch_assoc()) ?>-->
						</tbody>
					</table>
				</div>
			</main>
		</div>
		<div align="center">
			<form action = "import_surat.php" method="POST" enctype="multipart/form-data" >
				<input type="file" name="file">
				<input type="submit" name="upload" value="upload">
				<input type="button" name="contoh" href="#" value="example">
			</form>
		</div>
	</body>
</html>