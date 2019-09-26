<?php
	include('../../povezivanje.php');
	include('../info.php');
	$username = $_SESSION['username'];
	include_once 'rewardinfo.php';
	
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		//ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		//ip pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	if($bodovi >= $cena){
	$novostanje = $bodovi-$cena;
	$result2 = mysqli_query($Veza, "UPDATE `users` SET `bodovi` = $novostanje WHERE id=$id");
	$Upit = "INSERT INTO `isplate` (`nagrada`, `cena`, `ip_address`, `id_korisnika`, `username`, `email`) VALUES ('$reward', '$cena', '$ip', '$id', '$username', '$email')";
	$Rezultat = mysqli_query($Veza, $Upit);
	echo "<script type='text/javascript'>window.top.location='../index.php?msg=2';</script>";}
	else
	echo "<script type='text/javascript'>window.top.location='../index.php?msg=1';</script>";
?>