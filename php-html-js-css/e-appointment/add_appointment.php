<?php
    include "conn.php";
    
    if(isset($_POST['add_new'])){
        $ic_num = $_POST['ic_num'];
        $name = $_POST['name'];
        $purpose = $_POST['purpose'];
        $date = $_POST['date'];

        $sql = "INSERT INTO appointment (ic_num, name, purpose, date) VALUES ('$ic_num', '$name', '$purpose', '$date')";

            if($conn -> query($sql) === true) {
				echo "<script>alert('Well Done !'); window.location='index.php'</script>";
			} else { 
				echo "<script>alert('Do it Again !'); window.location='index.php'</script>";
            }       
    }
?>