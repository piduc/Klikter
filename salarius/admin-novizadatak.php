<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once '../povezivanje.php';
		include_once 'info.php';
		if($_SESSION['login'] == 0)
		echo "<script type='text/javascript'>window.top.location='index.php?msg=7';</script>";
		
	?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/zadaci.css" type="text/css" media="screen, projection"/>
    <title>Klikter - Zaradi u par klikova</title>	
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>	$(document).ready(function() {
    $(document).on('submit', '#simple_form', function() {
			
			document.forms["simple_form"].reset();
      return false;
     });
	});
	
</script>
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/adminstyle.css" type="text/css" media="screen, projection"/>
</head>
<body>

	<?php require("../header/header.php"); ?>
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji">
				
				<?php
				$Upit = "SELECT * FROM zadaci WHERE zavrsen = '2' LIMIT 1";
				$Rezultat = mysqli_query($Veza, $Upit);
				while($Red = mysqli_fetch_assoc($Rezultat))
				{
				$_SESSION['id_zadatka'] = $Red['id'];
				$vrstaid = $Red['vrsta'];
					switch ($vrstaid) {
					case 0:
					$vrsta = "Unikatan zadatak";
						break;
					case 1:
					$vrsta = "Instagram Like";
						break;
					case 2:
					$vrsta = "Instagram Like";
						break;
					case 3:
					$vrsta = "Instagram Comment";
						break;
					case 4:
					$vrsta = "Facebook Like";
						break;
					case 5:
					$vrsta = "Facebook Share";
						break;
					case 6:
					$vrsta = "Facebook Comment";
						break;
					case 7:
					$vrsta = "Twitter Follow";
						break;
					case 8:
					$vrsta = "Twitter Like";
						break;
					case 9:
					$vrsta = "Twitter Retweet";
						break;
					case 10:
					$vrsta = "Twitter Comment";
						break;
				}
				$vrstaimg = $Red['vrsta'];
					switch ($vrstaimg) {
					case 0:
					$vrstai = "unik.png";
						break;
					case 1:
					$vrstai = "iglike.png";
						break;
					case 2:
					$vrstai = "igfollow.png";
						break;
					case 3:
					$vrstai = "igcmnt.png";
						break;
					case 4:
					$vrstai = "fblike.png";
						break;
					case 5:
					$vrstai = "fbshare.png";
						break;
					case 6:
					$vrstai = "fbcom.png";
						break;
					case 7:
					$vrstai = "Twitter Follow";
						break;
					case 8:
					$vrstai = "Twitter Like";
						break;
					case 9:
					$vrstai = "Twitter Retweet";
						break;
					case 10:
					$vrstai = "Twitter Comment";
						break;
				}
				echo "
				<div class='odobravanjenaloga'>
				<div class='infon'>
					<form style='width: 100%;' method='POST' action='php/prihvatizadatak.php'>
					<div>ID Zadatka: <span>".$Red['id']."</span></div>
					<div>Vrsta: <span><img class='bodovanjeimg' src='bodovanje/".$vrstai."'/></span></div>
					<div>Link: <a target='_blank' class='linkzp' href='".$Red['link']."'>".$Red['link']." </a></div>
					<div>Plaćeno: <span>".$Red['bodovi']." </span></div>
					<div>Max isplata: <span>".$Red['max']." </span></div>
					<div>ID Korisnika: <span>".$Red['id_korisnika']."</span></div>";
					$id_korisnika = $Red['id_korisnika'];
					$Query = "SELECT * FROM users WHERE id = $id_korisnika";
					$res = mysqli_query($Veza, $Query);
					while($Row = mysqli_fetch_assoc($res))
						{
							echo "<div>Korisnik:<span> ".$Row['username']."</span></div>
							<div>Trenutni bodovi:<span> ".$Row['bodovi']."</span></div>
							<div>E-mail korisnika:<span> ".$Row['email']."</span></div>
							<div>IP korisnika:<span> ".$Row['ip']."</span></div>";
						}
				echo "<div>URL Slike: <input class='linkslike' name='slika' id='slika'/></div></div>
					<div class='btns'>
					<div class='btns'>
					<a href='php/odbijzadatak.php' class='btn odbij'>Odbij zadatak</a>
					<button type='submit' class='btn prihvati'>Prihvati zadatak</button></form></div></div>";
					
				}
				?>
				</div>
			</div>
		<div class="desni">
			
		</div>
    </div>
	
	
	
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d1cdaec7a48df6da242cd56/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>	