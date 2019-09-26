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
	<link rel="stylesheet" href="css/stat.css" type="text/css" media="screen, projection"/>
    <link rel="stylesheet" href="css/login.css">
    <title>Klikter - Zaradi u par klikova</title>
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script>
	$(document).ready(function() {
    $(document).on('submit', '#simple_form', function() {
			
			document.forms["simple_form"].reset();
      return false;
     });
	});
	
	function loginfun(){
		document.getElementById("maind").style.backgroundcolor = "#000000";
		document.getElementById("maind").style.opacity = "0.8";
		document.getElementById("maind").style.filter = "blur(2px)";
		document.getElementById("loginform").style.display = "block";
	}
</script>
<style>
	
</style>
</head>
<body>

	<?php require("../header/header.php"); ?>
	
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji" id="maind">
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
					echo "<a onclick='loginfun()' href='javascript:void(0);' type='button' class='btn btn-sm btn-outline-secondary btnr'>Prijavi se!</button></a><br><br>";?>
					<a href="zadaci.php" type="button" class="btn btn-sm btn-outline-secondary">Pogledaj zadatke!</a> <br><br>
					<a href="bodovanje.php" type="button" class="btn btn-sm btn-outline-secondary">Bodovanje</a>
					
					
					<label class="breaker"></label>	
					<table id="stat" class="table table-hover maintable">
					
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Korisnik</th>
						  <th scope="col">Bodovi</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
						$i = 1;
						$QueryS = "SELECT * FROM users ORDER BY bodovi DESC LIMIT 5";
						$res = mysqli_query($Veza, $QueryS);
						while($row = mysqli_fetch_assoc($res))
						{
							echo "<tr class='stats'>
							<td>".$i."</td>
							<td>".$row['username']."</td>
							<td>".$row['bodovi']."</td>
						</tr>";
							$i++;
						}
					  ?>
					  </tbody>
					</table>
					</div>
					<div class="col-md-8 col-lg-8">
						<?php
						if(isset($_GET['msg'])){
							$msg = $_GET['msg'];
							if($msg == 0){
								echo "<br><div class='darken' style='color:white; text-shadow: 1px 1px green;'> Uspešno ste prijavili novi nalog na vaš profil. Admini će uskoro pregledati vašu prijavu.</div>";
							}elseif($msg == 1){
								echo "<br><div class='darken' style='color:red; text-shadow: 0px 1px white;'> Nemate dovoljno bodova da biste kupili ovo!</div>";
							}elseif($msg == 2){
								echo "<br><div class='darken' style='color:white; text-shadow: 1px 1px green;'> Uspešno ste naručili isplatu bodova. Admini će uskoro pregledati vašu narudžbinu!</div>";
							}elseif($msg == 3){
								echo "<br><div class='darken' style='color:red; text-shadow: 0px 1px white;'> Nemate dovoljno bodova da biste napravili ovaj zadatak!</div>";
							}elseif($msg == 4){
								echo "<br><div class='darken' style='color:white; text-shadow: 1px 1px green;'> Uspešno ste napravili zadatak. Admini će uskoro pregledati vaš zahtev!</div>";
							}elseif($msg == 5){
								echo "<br><div class='darken' style='color:red; text-shadow: 0px 1px white;'> Već ste uradili zadatak sa tog naloga!</div>";
							}elseif($msg == 6){
								echo "<br><div class='darken' style='color:white; text-shadow: 1px 1px green;'> Zahtev uspešno poslat administratorima na pregled.</div>";
							}elseif($msg == 7){
								echo "<br><div class='darken' style='color:red; text-shadow: 0px 1px white;'>Morate se ulogovati da biste pristupili stranici.</div>";
							}elseif($msg == 8){
								echo "<br><div class='darken' style='color:red; text-shadow: 0px 1px white;'>Morate imati verifikovan nalog da bi radili zadatke.</div>";
							}elseif($msg == 9){
								if(isset($_SESSION['regerror']))
								echo "<br><div class='darken' style='color:red; text-shadow: 0px 1px white;'>".$_SESSION['regerror']."</div>";
								unset($_SESSION['regerror']);
							}
							}
						?>
						<div class="darken" style='color:red; text-shadow: 0px 1px white;'>
						<p style='text-align: center;'>SAJT NIJE U FUNKCIJI!<br></p>
						<p>Administratori rade na poboljsanju sajtu kao i na njegovom novom izgledu. Molimo sve korisnike da ne rade nista.</p>
						</div>
						<div class="darken">
						<p> Dobro došli na Klikter!<br>
						Klikter predstavlja sajt na kojem korisnici mogu bez ikakvog ulaganja ostvariti profit. Sve što Vam je potrebno da biste zarađivali jeste vaše lično vreme i strpljenje.</p>
						</div>
						<div class="darken">
						<img class="startinfo" src="css/startinfo.jpeg"/>
						</div>
						<div class="darken">
						<p>Korisnici lakim i jednostavnim zadacima najčešće na društvenim mrežama koji obuhvataju lajkovanje, deljenje, komentarisanje i praćenje drugih mogu veoma brzo ostvariti zaradu </p>
						</div>
					</div>
				</div>
			</div>
			<!---->
			<div class="form" id="loginform">
				  
				  <ul class="tab-group">
					<li class="tab active"><a href="#login">Uloguj se</a></li>
					<li class="tab"><a href="#signup">Registracija</a></li>
				  </ul>
				  
				  <div class="tab-content">
				  
					<div id="login">
					  <h1>Dobrodosao nazad!</h1>
					  
					  <form action="../login/login.php" method="post">
					  
					  
						<div class="field-wrap">
							<label> Korisnicko ime<span class="req"></span></label>
							<input type="text"required autocomplete="off" name="username" />
						</div>
					  
						<div class="field-wrap">
							<label> Sifra<span class="req"></span></label>
							<input type="password"required autocomplete="off" name="password" />
						</div>
					  
							<p class="forgot"><a href="#">Zaboravljena sifra?</a></p>
							<button class="button button-block"/>Uloguj</button>
					  
					  </form>

					</div>
					
					<div id="signup">   
					  <h1>Registruj se besplatno</h1>
					  
					  <form action="../login/register.php?ref=<?php	if(isset($_GET['ref'])){ echo $_GET['ref'];}else echo "1";?>" method="post">
					  
					  
						<div class="field-wrap">
						  <label> Korisnicko ime<span class="req"></span></label>
						  <input type="text" required autocomplete="off" name="username" maxlength="15"/>
						</div>
					
						<div class="field-wrap">
							<label> Sifra<span class="req"></span></label>
							<input type="password"required autocomplete="off" name="password"/>
						</div>

						<div class="field-wrap">
							<label> Email Adresa<span class="req"></span></label>
							<input type="email"required autocomplete="email" name="email"/>
						</div>
					  
						<button class="button button-block"/>Registruj</button>
					  
					  </form>

					</div>
					
					
					
					
					
				  </div>
				  
			</div> 
			
			<!---->
		<div class="desni">
			
		</div>
    </div>
	
	
	
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script  src="js/index.js"></script>
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