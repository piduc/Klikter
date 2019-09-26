<?php
	include('../../povezivanje.php');
	include('../info.php');
	$username = $_SESSION['username'];
	if($admin == 1){
	$idzarade = $_SESSION["idzarade"];
	$napomena = $_GET['napomena'];
	$nuradjeno = $uradjeno + 1;
	$nucinak = $prihvaceno/$nuradjeno*100;
	$uradio = mysqli_query($Veza, "UPDATE `users` SET `uradjeno` = '$nuradjeno', `ucinak` = '$nucinak' WHERE id = $id");
	$result = mysqli_query($Veza, "UPDATE `zarada` SET `verifikacija`= 2, napomena = '$napomena' WHERE id = $idzarade");
	echo "<script type='text/javascript'>window.top.location='../admin-zadatak.php';</script>";
	}else
	echo "<p style='color:red;'>PRISTUP ODBIJEN</p>";
?>