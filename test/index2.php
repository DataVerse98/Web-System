
<html>
	<head>
		<title>jsPDF</title>
		<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
		<script type="text/javascript" src="js/jsPDF/dist/jspdf.min.js"></script>
		<!--<script type="text/javascript" src="js/html2canvas.js"></script>-->
		<script src="js/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>-->
		
		<script type="text/javascript">
				$(document).ready(function(){

	//pdf 다운로드 	
	$("#pdfDownloader").click(function(){
	
        html2canvas(document.getElementById("printDiv"), {
            onrendered: function(canvas) {

                var imgData = canvas.toDataURL('image/png');
                console.log('Report Image URL: '+imgData);
                var doc = new jsPDF(); //210mm wide and 297mm high
                
                doc.addImage(imgData, 'PNG', 20, 20);
                doc.save('sample.pdf');
            }
        });

	});
	
	
})
			
		</script>
	</head>
	
	<body>
		<button type="button" id="pdfDownloader">Download</button>
		<div id="printDiv">
		  <h2>Hello World</h2>
		  <p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  </p>
		</div>
	</body>
</html>