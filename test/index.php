<!DOCTYPE html>
<html lang="en">
	<head>
		<meta char="utf-8">
		<title>HTML to PDF</title>
		
		<!-- jquery library -->
		<script src="js/jquery.min.js"></script>
		
		<!--jsPDF library-->
		<script src="js/jsPDF/dist/jspdf.min.js"></script>
		<!--<script src="js/jsPDF/dist/jspdf.debug.js"></script>-->
		<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js">-->
		
		
	</head>
	<body>
		<script>
			function generatePDF() {
				var doc = new jsPDF();
				
				//set font
				//doc.addToFontDictionary('Arial');
				//doc.addFont('ArialMS', 'Arial', 'normal');
				//doc.setFont('Arial','normal');
				doc.setFontSize(11);
				
				//Add text
				doc.text('Hello World!', 20, 30);
				doc.text('All praise to god, we finally be able to complete this assignment that had been given to us by our ', 20, 35, 'justify');
				doc.text('ENT300 lecturer’s. We would like to give our special gratitude to our lecturer Madam Vloreen Nity ', 20, 40);
				doc.text('anak Mathew because without her guide on this project, the project cannot be completed and ',20,45);
				
				//Add new page
				doc.addPage();
				doc.text(20,20,'Visit CodeWorld.com');
				
				//save the PDF
				doc.save('document.pdf');
			}
		</script>
		<button onclick="generatePDF();">Click to Generate PDF</button>
	</body>
</html>