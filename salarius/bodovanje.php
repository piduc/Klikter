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
	<link rel="stylesheet" href="css/stat.css" type="text/css" media="screen, projection"/>
</head>
<body>

	<?php require("../header/header.php"); ?>
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji">
			
				<table id="stat" class="table table-hover">
				  <thead>
					<tr>
					  <th scope="col" style="vertical-align:middle">Zadatak</th>
					  <th scope="col">Bodovi za <br>izvrsenje zadatka</th>
					  <th scope="col">Bodovi za <br>uplatu zadatka</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/fblike.png"/> - Lajkovanje Facebook postova</td>
						<td>1</td>
						<td>1.25</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/fbcom.png"/> - Komentarisanje Facebook postova</td>
						<td>5</td>
						<td>6.25</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/fbshare.png"/> - Sharovanje Facebook postova</td>
						<td>2</td>
						<td>2.5</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/iglike.png"/> - Lajkovanje Instagram postova</td>
						<td>1</td>
						<td>1.25</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/igfollow.png"/> - Pracenje Instagram naloga</td>
						<td>2</td>
						<td>2.5</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/igcmnt.png"/> - Komentarisanje Instagram postova</td>
						<td>5</td>
						<td>6.25</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/igstory.png"/> - Objavljivanje Instagram prica</td>
						<td>10</td>
						<td>12.5</td>
					</tr>
					<tr>
						<td><img class="bodovanjeimg" src="bodovanje/igpost.png"/> - Objavljivanje Instagram postova</td>
						<td>20</td>
						<td>25</td>
					</tr>
				  </tbody>
				</table>
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