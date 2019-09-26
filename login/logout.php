<?php
	session_start();
	$_SESSION['login'] = 0;	
	unset($_SESSION);
	session_destroy();
	header ("location: ../salarius/index.php");
?>