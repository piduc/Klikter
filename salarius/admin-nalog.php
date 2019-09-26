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
				$Upit = "SELECT * FROM nalog WHERE verifikacija = '0' LIMIT 1";
				$Rezultat = mysqli_query($Veza, $Upit);
				while($Red = mysqli_fetch_assoc($Rezultat))
				{	
				echo "
				<div class='odobravanjenaloga'>
				<div class='infon'>
					<div>ID naloga: <span>".$Red['id']."</span></div>
					<div>Link naloga: <span><a target='_blank' class='linkzp' href='".$Red['nalog']."'>".$Red['nalog']." </a> </span></div>
					<div>ID korisnika: <span>".$Red['id_korisnika']." </span></div>";
				$id_korisnika = $Red['id_korisnika'];
				$Query = "SELECT * FROM users WHERE id = $id_korisnika";
				$res = mysqli_query($Veza, $Query);
				while($Row = mysqli_fetch_assoc($res))
					{
						echo "<div>Korisnik:<span> ".$Row['username']."</span></div>
						<div>E-mail korisnika:<span> ".$Row['email']."</span></div>
						<div>IP korisnika:<span> ".$Row['ip']."</span></div>";
					}
				echo "<div>IP prijave:<span> ".$Red['ip_address']."</span></div><div>Mreza: <span>";
				if($Red['id_platforme'] == 1)echo "Instagram";
				if($Red['id_platforme'] == 2)echo "Facebook";
				if($Red['id_platforme'] == 3)echo "Twitter";
				
				echo "</span></div>";
				echo "</div>";
				
					$_SESSION["idnaloga"]=$Red['id'];
					echo "<form style='width: 100%;' action='php/odbijanjenaloga.php'>
					
					<div class='ta'>
					<p>Napomena:</p>
					<textarea name='napomena'></textarea></div>
					<div class='btns'>
					<button type='submit' class='btn odbij'>Odbij nalog</button></form>
					<a href='php/odobravanjenaloga.php?ver=1&idnaloga=".$Red['id']."' class='btn prihvati'>Prihvati nalog</a>
					</div>
				</div>";
				}
				?>
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