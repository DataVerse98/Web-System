<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
	</head>
	<body>
		Select Country
		<select class="chosen">
			<option  selected value="default">Choose...</option>
			<option value="option1">option1</option>
			<option value="option2">option2</option>
			<option value="option3">option3</option>
			<option value="option4">option4</option>
		</select>
	</body>
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>
</html>