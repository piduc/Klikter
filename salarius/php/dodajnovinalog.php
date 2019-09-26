<?php
	session_start();
	include('../../povezivanje.php');
	include('../info.php');
	$username = $_SESSION['username'];
	$nalog = $_POST['link'];
	$platf = $_POST['platforma'];
	
	
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		//ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		//ip pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	
	$result = mysqli_query($Veza, "INSERT INTO `nalog`(`nalog`, `id_korisnika`, `ip_address`, `id_platforme`, `verifikacija`, `napomena`) VALUES ('$nalog', '$id', '$ip','$platf', '0', '')");
	echo "<script type='text/javascript'>window.top.location='../index.php?msg=0';</script>";
?>