<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once '../povezivanje.php';
		include_once 'info.php';
		
		
	?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/zadaci.css" type="text/css" media="screen, projection"/>
	<link rel="stylesheet" href="css/index.css" type="text/css" media="screen, projection"/>
    <title>Salarius</title>
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
	$(document).ready(function() {
    $(document).on('submit', '#simple_form', function() {
			
			document.forms["simple_form"].reset();
      return false;
     });
	});
	
</script>
<style>
	
</style>
</head>
<body>

	<?php require("../header/header.php"); ?>
	
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						
					<div class="tus"> <p style='float: left;'>Ukupno korisnika</p>
						<?php
							$query = mysqli_query($Veza, "SELECT * FROM `users`");
							$ukupnoigraca = mysqli_num_rows($query);
							echo "<p style='float:right;'>".$ukupnoigraca."</p>";
						?>
					</div>
					<div class="tus"> <p style='float: left;'>Ukupno isplata</p>
						<?php
							$query = mysqli_query($Veza, "SELECT * FROM `isplate`");
							$ukupnoisplata = mysqli_num_rows($query);
							echo "<p style='float:right;'>".$ukupnoisplata."</p>";
						?>
					</div>
					<div class="tus"> <p style='float: left;'>Ukupna zarada</p>
						<?php
							$query = mysqli_query($Veza, "SELECT zaradjeno FROM `users`");
							$ukupnazarada = 0;
							while($row = mysqli_fetch_assoc($query))
							{
								$ukupnazarada = $ukupnazarada + $row['zaradjeno'];
							}
							
							echo "<p style='float:right;'>".$ukupnazarada."</p>";
						?>
					</div>
					<label class="breaker"></label>	
					
					<?php  if(!isset($_SESSION['login']))
					echo "<a href='../index.php' type='button' class='btn btn-sm btn-outline-secondary'>Prijavi se!</a>";?>
					<a href="zadaci.php" type="button" class="btn btn-sm btn-outline-secondary">Pogledaj zadatke!</a>
					
					</div>
					<div class="col-md-8 col-lg-8">
						
					</div>
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