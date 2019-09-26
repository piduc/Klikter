<?php
	include('../../povezivanje.php');
	include('../info.php');
	$username = $_SESSION['username'];
	if($admin == 1){
	$idisplate = $_SESSION["idisplate"];
	$napomena = $_GET['napomena'];
	$result = mysqli_query($Veza, "UPDATE `isplate` SET `verifikacija`= 2, `napomena` = '$napomena'  WHERE id = $idisplate");
	echo "<script type='text/javascript'>window.top.location='../admin-isplate.php';</script>";
	}else
	echo "<p style='color:red;'>PRISTUP ODBIJEN</p>";
?>