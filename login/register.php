<?php
	include_once("povezivanje.php");
	
	//USERNAME
	
	if(!isset($_POST['username']))
	{
		exit();
	}
	
	$username = $_POST['username'];
	$varu = 0;
	
	if(empty($username))
	{
		$varu = 1;
	}
	else
	if(!preg_match("/^[A-Za-z0-9]*$/", $username))
	{
		$varu = 2;
	}
	else
	
	$Upit       = "SELECT * FROM users WHERE username = '$username'";
	$Rezultat   = mysqli_query($Veza, $Upit);
	$BrojRedova = mysqli_num_rows($Rezultat);
	
	if($BrojRedova > 0)
	{
		$varu = 3;
	}
	else
	
	//LOZINKA
	
	if(!isset($_POST['password']))
	{
		exit();
	}
	
	$password = $_POST['password'];
	$varp = 0;

	if(empty($password))
	{
		$varp = 1;
	}
	
	//EMAIL
	
	if(!isset($_POST['email']))
	{
		exit();
	}
	
	$email = $_POST['email'];
	$vare    = 0;
	if(empty($email))
	{
		$vare = 1;
	}
	
	if(!preg_match("/^[A-Za-z0-9@._]*$/", $email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$vare = 2;
	}
	
	$Upit       = "SELECT * FROM users WHERE email = '$email';";
	$Rezultat   = mysqli_query($Veza, $Upit);
	$BrojRedova = mysqli_num_rows($Rezultat);
	
	if($BrojRedova > 0)
	{
		$vare = 3;
	}
	
	$Uslov = $varu == 0 && $varp == 0 && $vare == 0;
	
	if(!$Uslov)
	{	
		session_start();
		switch ($varu) {
			case 1:
			$_SESSION['regerror'] = "Morate uneti korisnicko ime da biste se registrovali!";
				break;
			case 2:
			$_SESSION['regerror'] = "Korisnicko ime može da sadrzi samo slova i brojeve.";
				break;
			case 3:
			$_SESSION['regerror'] = "Korisnicko ime koje ste uneli je zauzeto.";
				break;
		}
		switch ($varp) {
			case 1:
			$_SESSION['regerror'] = "Morate uneti lozinku da biste se registrovali!";
				break;
		}
		switch ($vare) {
			case 1:
			$_SESSION['regerror'] = "Morate uneti e-mail da biste se registrovali!";
				break;
			case 2:
			$_SESSION['regerror'] = "Morate da unesete ispravan E-mail. Dozvoljeno je koristiti slova, brojeve,tacke i @";
				break;
			case 3:
			$_SESSION['regerror'] = "E-mail koje ste uneli je zauzet. Kontaktirajte podrsku!";
				break;
		}
		header("Location: ../salarius/index.php?msg=9");
		exit();
	}
	else
	{
			if(!empty($_SERVER['HTTP_CLIENT_IP'])){
			//ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			//ip pass from proxy
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		$ref = $_GET['ref'];
		$hash = password_hash($password, PASSWORD_DEFAULT);
		
		
		$Upit  = "INSERT INTO users (username, password, email, ref_id, ip) VALUES ('$username', '$hash', '$email', '$ref', '$ip')";
		$Rezultat = mysqli_query($Veza, $Upit);
		session_start();
        $_SESSION['username'] = $username;
		$_SESSION['login']	  = 1;
		
		header("location: ../salarius/index.php");
		
		/*if($Rezultat)
		{
			echo "<br><br>Uspešno ste dodali novog korisnika u bazu.";
		}
		else
		{
			echo "<br><br>Desila se gre[ka pri dodavanju novog korisnika u bazu.";
		}*/
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>