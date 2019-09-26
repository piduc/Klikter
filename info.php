<?php
	include_once("povezivanje.php");
	session_start();
	if(isset($_SESSION['login']) == 1){
	$username = $_SESSION['username'];
	$Upit = "SELECT * FROM users WHERE username = '$username'";
	$Rezultat = mysqli_query($Veza, $Upit);
	while($Red = mysqli_fetch_assoc($Rezultat))
	{	
		$bodovi = $Red['bodovi'];
		$ucinak = $Red['ucinak'];
		$id = $Red['id'];
		$email = $Red['email'];
		$admin = $Red['admin'];
		$zaradjeno = $Red['zaradjeno'];
		$uradjeno = $Red['uradjeno'];
		$prihvaceno = $Red['prihvaceno'];
	}}
?>