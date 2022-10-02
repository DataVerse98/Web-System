<?php 

	//if(!empty($_POST['submit'])){
		
		//$fname = $_POST['fname'];
		//$lname = $_POST['lname'];
		//$gender = $_POST['gender'];
		//$dob = $_POST['dob'];
		//$mobile = $_POST['mobile'];
		//$email = $_POST['email'];
	
		require("fpdf/fpdf.php");
		
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont("Arial","B",11);
		$pdf->Cell(10,10,"welcome",0,0,'center');
		$pdf->output();
	
	//}
	
?>