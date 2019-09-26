<?php
	include('../../povezivanje.php');
	include('../info.php');
	$username = $_SESSION['username'];
	if($admin == 1){
	$idzadatka = $_SESSION["id_zadatka"];
	$napomena = $_GET['napomena'];
	$result = mysqli_query($Veza, "UPDATE `zadaci` SET `zavrsen`= 3, napomena = '$napomena' WHERE id = $idzadatka");
	echo "<script type='text/javascript'>window.top.location='../admin-novizadatak.php';</script>";
	}else
	echo "<p style='color:red;'>PRISTUP ODBIJEN</p>";
?>