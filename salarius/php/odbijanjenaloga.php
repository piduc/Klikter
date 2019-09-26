<?php
	include('../../povezivanje.php');
	include('../info.php');
	$username = $_SESSION['username'];
	if($admin == 1){
	$idnaloga = $_SESSION["idnaloga"];
	$napomena = $_GET['napomena'];
	$result = mysqli_query($Veza, "UPDATE `nalog` SET `verifikacija`= 2, `napomena` = '$napomena'  WHERE id = $idnaloga");
	echo "<script type='text/javascript'>window.top.location='../admin-nalog.php';</script>";
	}else
	echo "<p style='color:red;'>PRISTUP ODBIJEN</p>";
?>