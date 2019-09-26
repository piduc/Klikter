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
	<link rel="stylesheet" href="css/dodajnalog.css" type="text/css" media="screen, projection"/>
    <title>Klikter - Zaradi u par klikova</title>	
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
	$(document).ready(function() {
    $(document).on('submit', '#simple_form', function() {
			
			document.forms["simple_form"].reset();
      return false;
     });
	});
	
</script>
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen, projection"/>
	<style>
	</style>
</head>
<body>

	<?php require("../header/header.php"); ?>
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji">
			<div class="main">
				<form method='post' class="platforma" action="php/dodajnovinalog.php">
					<input type="text" style="display:none;" name="platforma"  value="2"/>					
					<img src="icon/fb.png" class="dodajnalogicon">
					<span style="margin: 10px 0 0 10px; position: absolute;"">Unesite vaš Facebook profil koji ćete koristiti za dobijanje bodova </span><br><span style="color: #008000; margin-left: 10px">NAPOMENA:</span><br><span style="margin-left: 40px;"> 1. Možete imati više profila prijavljeno.</span><br><span style="margin-left: 40px;"> 2. Svi prijavljeni profili moraju imati više od 200 prijatelja. </span><br><span style="margin-left: 40px;"> 3. Profil mora izgledati kao da se zaista koristi (da ima slike, normalno ime, statuse, da nije napravljen skoro itd). </span><br><br>
					<div class="unosnaloga">
					<input type="url" required autocomplete="off" name="link" value="https://www.facebook.com/"></input>
					<button type="submit" class="prijavalinka"/>Registruj novi nalog</button>
					</div>
				</form>
				<form method='post' class="platforma" action="php/dodajnovinalog.php">
					<input type="text" style="display:none;" name="platforma"  value="1"/>
					<img src="icon/insta.png" class="dodajnalogicon">
					<span style="margin: 10px 0 0 10px; position: absolute;">Unesite vaš Instagram profil koji ćete koristiti za dobijanje bodova </span><br><span style="color: #008000; margin-left: 10px">NAPOMENA:</span><br><span style="margin-left: 40px;"> 1. Možete imati više profila prijavljeno.</span><br><span style="margin-left: 40px;"> 2. Svi prijavljeni profili moraju imati više od 200 pratioca. </span><br><br>
					<div class="unosnaloga">
					<input type="url" required autocomplete="off" name="link"  value="https://www.instagram.com/"/>
					<button type="submit" class="prijavalinka">Registruj novi nalog</button>
					</div>
				</form>
				<form method='post' class="platforma" action="php/dodajnovinalog.php">
					<input type="text" style="display:none;" name="platforma"  value="3"/>
					<img src="icon/twitter.png" class="dodajnalogicon">
					<span style="margin: 10px 0 0 10px; position: absolute;">Unesite vaš Twitter profil koji ćete koristiti za dobijanje bodova </span><br><span style="color: #008000; margin-left: 10px;">NAPOMENA:</span><br><span style="margin-left: 40px;"> 1. Možete imati više profila prijavljeno.</span><br><br>
					<div class="unosnaloga">
					<input type="url" required autocomplete="off" name="link" value="https://twitter.com/"></input>
					<button type="submit" class="prijavalinka"/>Registruj novi nalog</button>
					</div>
				</form>

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