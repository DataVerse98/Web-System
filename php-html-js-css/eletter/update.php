<?php
    include "conn.php";

    $id = $_GET['id'];
    $surat = $_GET['surat'];

    $sql = "SELECT * FROM certificate WHERE rec_id = '$id'";
    $query = $conn -> query($sql);
    $row = $query -> fetch_assoc();
    
    if(isset($_POST['update'])){
        if($surat==1){
            $jenis_geran = $_POST['jg'];
            $ref_no = $_POST['ref_no'];
            $kp = $_POST['kp'];
            $ap1 = $_POST['ap1'];
            $ap2 = $_POST['ap2'];
            $ap3 = $_POST['ap3'];
            $ap4 = $_POST['ap4'];
            $tajuk = $_POST['tajuk'];
            $tempoh = $_POST['tempoh'];
            $tarikh_mula = $_POST['tarikh_mula'];
            $tarikh_tamat = $_POST['tarikh_tamat'];
            $kos = $_POST['kos'];

            $sql2 = "UPDATE certificate SET jenis_geran = '$jenis_geran', ref_no = '$ref_no', kp_id = '$kp', ap1_id = '$ap1', ap2_id = '$ap2', ap3_id = '$ap3', ap4_id = '$ap4', title = '$tajuk', tempoh = '$tempoh', tarikh_mula = '$tarikh_mula', tarikh_tamat = '$tarikh_tamat', kos = '$kos' WHERE rec_id = '$id'";
            if($conn -> query($sql2)===true){
                echo "<script>alert('Your data has successfully updated!'); window.location = 'import.php?surat=".$surat."';</script>";
            } else {
            echo "<script>alert('Failed to update your data. Please try again!'); window.location = 'update.php?id=".$id."&surat=".$surat."';</script>";
            }
        } else if($surat==2){
            $tajuk = $_POST['tajuk'];
            $kod = $_POST['kod'];
            $kategori = $_POST['kategori'];
            $tempoh = $_POST['tempoh'];
            $kos = $_POST['kos'];
            $kp = $_POST['kp'];

            $sql2 = "UPDATE certificate SET title = '$tajuk', kod_projek = '$kod', kategori = '$kategori', tempoh = '$tempoh', kos = '$kos', kp_id = '$kp' WHERE rec_id = '$id'";
            if($conn -> query($sql2)===true){
                echo "<script>alert('Your data has successfully updated!'); window.location = 'import.php?surat=".$surat."';</script>";
            } else {
            echo "<script>alert('Failed to update your data. Please try again!'); window.location = 'update.php?id=".$id."&surat=".$surat."';</script>";
            }
        } else if($surat==3){
            $ref_no = $_POST['ref_no'];
            $kp = $_POST['kp'];
            $ap1 = $_POST['ap1'];
            $ap2 = $_POST['ap2'];
            $ap3 = $_POST['ap3'];
            $ap4 = $_POST['ap4'];
            $tajuk = $_POST['tajuk'];
            $tempoh = $_POST['tempoh'];
            $tarikh_mula = $_POST['tarikh_mula'];
            $tarikh_tamat = $_POST['tarikh_tamat'];
            $info = $_POST['info'];

            $sql2 = "UPDATE certificate SET ref_no = '$ref_no', kp_id = '$kp', ap1_id = '$ap1', ap2_id = '$ap2', ap3_id = '$ap3', ap4_id = '$ap4', title = '$tajuk', tempoh = '$tempoh', tarikh_mula = '$tarikh_mula', tarikh_tamat = '$tarikh_tamat', info = '$info' WHERE rec_id = '$id'";
            if($conn -> query($sql2)===true){
                echo "<script>alert('Your data has successfully updated!'); window.location = 'import.php?surat=".$surat."';</script>";
            } else {
            echo "<script>alert('Failed to update your data. Please try again!'); window.location = 'update.php?id=".$id."&surat=".$surat."';</script>";
            }
        } else if($surat==4){
            $ref_no = $_POST['ref_no'];
            $kp = $_POST['kp'];
            $pelantikan = $_POST['pelantikan'];
            $tajuk = $_POST['tajuk'];
            $tarikh_mula = $_POST['tarikh_mula'];
            $tarikh_tamat = $_POST['tarikh_tamat'];

            $sql2 = "UPDATE certificate SET ref_no = '$ref_no', kp_id = '$kp',pelantikan = '$pelantikan', title = '$tajuk', tarikh_mula = '$tarikh_mula', tarikh_tamat = '$tarikh_tamat' WHERE rec_id = '$id'";
            if($conn -> query($sql2)===true){
                echo "<script>alert('Your data has successfully updated!'); window.location = 'import.php?surat=".$surat."';</script>";
            } else {
            echo "<script>alert('Failed to update your data. Please try again!'); window.location = 'update.php?id=".$id."&surat=".$surat."';</script>";
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
        <title>ER1</title>
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    </head>
    <body>
    <div align="center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
			<span class="navbar-brand">
				<img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
				ER1
			</span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item dropdown pr-5">
						<a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="import.php?surat=<?php echo $surat?>">Back</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="homepage.php" >Home</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="login.php" >Log Out</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>	
			
			<form method="post" action="update.php?id=<?php echo $id;?>&surat=<?php echo $surat;?>" onsubmit="return validate()">
            <?php if($surat==1){?>
                <div><h1>Surat Tawaran</h1></div>
				<table cellpadding="10">
                    <tr><td>Jenis Geran: </td>
                    <td><input class="form-control" id="jg" name="jg" value="<?php echo $row['jenis_geran']?>" required></td></tr>
					<tr><td>Ref. No.: </td><td>
					<input class="form-control" id="ref_no" rows="3" name="ref_no" value="<?php echo $row['ref_no']?>" required></td></tr>
					<tr><td>Staff ID Ketua Projek: </td><td><input class="form-control" id="kp" rows="3" name="kp" value="<?php echo $row['kp_id']?>" required></td></tr>
					<tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap1" rows="3" name="ap1" value="<?php echo $row['ap1_id']?>"></td></tr>
					<tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap2" rows="3" name="ap2" value="<?php echo $row['ap2_id']?>"></td></tr>
                    <tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap3" rows="3" name="ap3" value="<?php echo $row['ap3_id']?>"></td></tr>
                    <tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap4" rows="3" name="ap4" value="<?php echo $row['ap4_id']?>"></td></tr>
					<tr><td>Tajuk:</td><td><input class="form-control" id="tajuk" rows="3" name="tajuk" autocapitalize="word" value="<?php echo $row['title']?>" required></td></tr>
					<tr><td>Tempoh Projek: </td><td><input class="form-control" id="tempoh" rows="3" name="tempoh" value="<?php echo $row['tempoh']?>" required></td></tr>
                    <tr><td>Tarikh Mula:</td><td><input type="date" class="form-control" id="tarikh_mula" name="tarikh_mula" value="<?php echo $row['tarikh_mula']?>" required></td><td>Tarikh Tamat</td><td><input type="date" class="form-control" id="tarikh_tamat" name="tarikh_tamat" value="<?php echo $row['tarikh_tamat'] ?>" required></td></tr>
                    <tr><td>Kos Projek:</td><td><input class="form-control" id="kos" rows="3" name="kos" value="<?php echo $row['kos']?>" required></td></tr>
					<tr><td colspan="4" align="right"><input type="submit" class="btn btn-success btn-sm" name="update"></td></tr>
				</table>
            
            <?php }else if($surat==2){?>
                <div><h1>Surat Setuju Terima</h1></div>
                <table cellpadding="10">
                    <tr><td>Tajuk:</td><td><input class="form-control" id="tajuk" rows="3" name="tajuk" autocapitalize="word" value="<?php echo $row['title']?>" required></td></tr>
                    <tr><td>Kod Projek:</td><td><input class="form-control" id="kod" rows="3" name="kod" value="<?php echo $row['kod_projek']?>" required></td></tr>
                    <tr><td>Kategori Penyelidikan</td><td><input class="form-control" id="kategori" rows="3" name="kategori" value="<?php echo $row['kategori']?>" required></td></tr>
                    <tr><td>Tempoh Projek: </td><td><input class="form-control" id="tempoh" rows="3" name="tempoh" value="<?php echo $row['tempoh']?>" required></td></tr>
                    <tr><td>Jumlah Peruntukan:</td><td><input class="form-control" id="kos" rows="3" name="kos" value="<?php echo $row['kos']?>" required></td></tr>
                    <tr><td>Staff ID Ketua Projek: </td><td><input class="form-control" id="kp" rows="3" name="kp" value="<?php echo $row['kp_id']?>" required></td></tr>
                    <tr><td colspan="4" align="right"><input type="submit" class="btn btn-success btn-sm" name="update"></td></tr>
                <table>
            <?php }else if($surat==3){?>
                <div><h1>Surat Pelanjutan Tempoh</h1></div>
                <table cellpadding="10">
                    <tr><td>Ref. No.: </td><td>
					<input class="form-control" id="ref_no" rows="3" name="ref_no" value="<?php echo $row['ref_no']?>" required></td></tr>
                    <tr><td>Staff ID Ketua Projek: </td><td><input class="form-control" id="kp" rows="3" name="kp" value="<?php echo $row['kp_id']?>" required></td></tr>
					<tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap1" rows="3" name="ap1" value="<?php echo $row['ap1_id']?>"></td></tr>
					<tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap2" rows="3" name="ap2" value="<?php echo $row['ap2_id']?>"></td></tr>
                    <tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap3" rows="3" name="ap3" value="<?php echo $row['ap3_id']?>"></td></tr>
                    <tr><td>Staff ID Ahli Projek: </td><td><input class="form-control" id="ap4" rows="3" name="ap4" value="<?php echo $row['ap4_id']?>"></td></tr>
                    <tr><td>Tajuk:</td><td><input class="form-control" id="tajuk" rows="3" name="tajuk" autocapitalize="word" value="<?php echo $row['title']?>" required></td></tr>
					<tr><td>Tempoh Projek: </td><td><input class="form-control" id="tempoh" rows="3" name="tempoh" value="<?php echo $row['tempoh']?>" required></td></tr>
                    <tr><td>Tarikh Mula:</td><td><input type="date" class="form-control" id="tarikh_mula" name="tarikh_mula" value="<?php echo $row['tarikh_mula']?>" required></td><td>Tarikh Tamat</td><td><input type="date" class="form-control" id="tarikh_tamat" name="tarikh_tamat" value="<?php echo $row['tarikh_tamat'] ?>" required></td></tr>
                    <tr><td>Info Details: </td><td><textarea class="form-control" id="info" rows="3" name="info" value="<?php echo $row['info']?>" required></textarea></td></tr>
                    <tr><td colspan="4" align="right"><input type="submit" class="btn btn-success btn-sm" name="update"></td></tr>
                </table>
            <?php }else if($surat==4){?>
                <div><h1>Surat Pelantikan</h1></div>
                <table cellpadding="10">
                    <tr><td>Ref. No.: </td><td><input class="form-control" id="ref_no" rows="3" name="ref_no" value="<?php echo $row['ref_no']?>" required></td></tr>
                    <tr><td>Staff ID: </td><td><input class="form-control" id="kp" rows="3" name="kp" value="<?php echo $row['kp_id']?>" required></td></tr>
                    <tr><td>Posisi: </td><td><input class="form-control" id="pelantikan" rows="3" name="pelantikan" value="<?php echo $row['pelantikan']?>" required></td></tr>
                    <tr><td>Tajuk:</td><td><input class="form-control" id="tajuk" rows="3" name="tajuk" autocapitalize="word" value="<?php echo $row['title']?>" required></td></tr>
                    <tr><td>Tarikh Mula:</td><td><input type="date" class="form-control" id="tarikh_mula" name="tarikh_mula" value="<?php echo $row['tarikh_mula']?>" required></td><td>Tarikh Tamat</td><td><input type="date" class="form-control" id="tarikh_tamat" name="tarikh_tamat" value="<?php echo $row['tarikh_tamat'] ?>" required></td></tr>
                    <tr><td colspan="4" align="right"><input type="submit" class="btn btn-success btn-sm" name="update"></td></tr>
                </table>
            <?php }?>
			</form>
		</div>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

    </body>
</html>