<style>
body {
  background: rgb(204,204,204); 
  font: 11pt "Arial";
  line-height: 1.4em;
  color : 111;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}

page[size="A4"] .wrapper {
	//margin-top: 500px;
	//margin-bottom: 50px;
	padding-top: 50;
	padding-right: 100px;
	padding-left: 50px;
	//margin: 50px;
}

p {
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
<script type="text/javascript" src="js/jsPDF/dist/jspdf.min.js"></script>
		
<script src="js/jquery.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>-->
<script src="js/html2canvas.js"></script>		
		
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

<link rel="icon" type="image/png" href="./images/logo.png" />
<title>e-Letter RMU</title>

<page size="A4">
	<div class="wrapper">
		
		<div id="printDiv">
		  <h2>Hello World</h2>
		  <p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			
		  </p>
		</div>
		<button type="button" id="pdfDownloader">Download</button>
	</div>
</page>


		

	
