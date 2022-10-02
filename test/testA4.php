<html>
	<head>
		<title>jsPDF</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style rel="stylesheet" type="text/css" href="css/style2.css"></style>
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
		<style rel="stylesheet" type="text/css" href="css/style.css"></style>
	</head>
	
	<body>
		<page size="A4"></page>
		<page size="A4"></page>
		<page size="A4" layout="landscape"></page>
		<page size="A5"></page>
		<page size="A5" layout="landscape"></page>
		<page size="A3"></page>
		<page size="A3" layout="landscape"></page>
	</body>
	
</html>