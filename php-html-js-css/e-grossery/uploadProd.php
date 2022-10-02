<?php include "conn.php";

	
	
	//if(isset($_GET['prod_image'])){
		//$target_file = basename($_FILES["prod_image"]["name"]);
		//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		//$directory = "images/product/" . $_GET['name'] . "." . $imageFileType;
	//echo "<pre>";
	//print_r($_FILES['prodImage']);
	//echo "</pre>";
	if(isset($_POST['uploadItem']) && isset($_FILES['prodImage'])){
		//$directory = "";
		$uploadOk = 1;
		
		$target_file = basename($_FILES["prodImage"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$directory = "images/product/" . $_POST['name'] . "." . $imageFileType;
		
		
		
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		
		// Allow certain file formats
		$allowed_exs = array("jpg", "jpeg", "png");
		if(in_array($imageFileType, $allowed_exs) == false){
			echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
			$uploadOk = 0;
		}
		
		/*if($imageFileType != "jpg") {
			echo "Sorry, only JPG files are allowed.";
			$uploadOk = 0;
		}*/
	//}
	
	
	
		$name = $_POST['name'];
		$item_desc = $_POST['item_desc'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];
		
		//check for duplicate id
		$sqlid = "SELECT * FROM item WHERE item_name = '$name'";
		$queryid = $conn -> query($sqlid);
		$numid = $queryid -> num_rows;
		
		$sql = "SELECT * FROM item WHERE rec_id = (SELECT MAX(rec_id) FROM item)";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$id = $row['rec_id'] + 1;
		$item_id = "item".$id;
		
	
	
	// Check if $uploadOk is set to 0 by an error
		if (($uploadOk == 0)&&($numid != 0)) {
			echo "<script>alert('Sorry, your file was not uploaded.'); window.location='dashboard.php';</script>";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["prodImage"]["tmp_name"], $directory)) {
				$sql2 = "INSERT INTO item (item_id, item_name, item_description, stock, price, picture) VALUES ('$item_id', '$name', '$item_desc', '$stock', '$price', '$directory')";
				if(mysqli_query($conn,$sql2)){
					echo "<script>alert('Your file has successfully been uploaded.'); window.location='dashboard.php';</script>";
				}
			} else {
				echo "<script>alert('Sorry, there was an error uploading your file.'); window.location='dashboard.php';</script>";
			}
		}
	
	} else {
		echo "No upload";
	}
?>