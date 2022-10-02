<!DOCTYPE>
<html>
	<head>
		<title>jsPDF</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="js/jsPDF/dist/jspdf.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
		<script type="text/javascript">
			function genPDF(){
				html2canvas(document.getElementById("testDiv"), {
					onrendered: function (canvas) {
						
						var img = canvas.toDataURL("image/png");
						var doc = new jsPDF();
						doc.addImage(img, 'JPEG',20,20);
						doc.save('test.pdf');
					}
				});
			}
			
		</script>
	</head>
	
	<body>
		<h1>jsPDF Demos</h1>
		<a href="javascript:genPDF()">Download PDF</a>
		
		<div id="testDiv">
			<h1>Example Boader</h1>
			<input type="text" />
			<input type="submit" value="button" />
			<br><br>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  </p>
			<!--<img src="test.jpg" width="600" height="400" />-->
		</div>
	</body>
</html>