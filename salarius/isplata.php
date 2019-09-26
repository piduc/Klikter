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
	<link rel="stylesheet" href="css/isplata.css" type="text/css" media="screen, projection"/>
</head>
<body>

	<?php require("../header/header.php"); ?>
	

	<div class="glavni">
		<div class="levi">
			
		</div>
			<div class="srednji">
				<div class="shop">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/1random.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Ako volite jeftine i dobre igre, ovo je sjajna ponuda za vas! Kupite 1 nasumičnu Steam igru i možda dobijete upravo onu koju želite.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=1" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 200 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/2random.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Ako volite jeftine i dobre igre, ovo je sjajna ponuda za vas! Kupite 2 nasumične Steam igre i možda dobijete upravo one koje želite.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=2" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 350 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/5random.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Ako volite jeftine i dobre igre, ovo je sjajna ponuda za vas! Kupite 5 nasumičnih Steam igri i možda dobijete upravo one koje želite.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=3" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 700 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/steam.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Dodajte novčani iznos u vrednosti od 5$ na svoj Steam račun.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=4" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 850 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/steam.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Dodajte novčani iznos u vrednosti od 10$ na svoj Steam račun.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=5" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 1600 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/steam.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Dodajte novčani iznos u vrednosti od 20$ na svoj Steam račun</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=6" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 3000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/gtav.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite GTA V za STEAM i zabavite se igrajući ovu igru!</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=7" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 4000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/origins.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite Assassin's Creed® Origins za STEAM i zabavite se igrajući ovu igru!</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=8" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 8000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/banished.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite Banished za STEAM i zabavite se igrajući ovu igru!</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=9" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 4000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/friday.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite Friday the 13th: The Game za STEAM i zabavite se igrajući ovu igru!</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=10" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 3000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/pubg.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite PLAYERUNKNOWN'S BATTLEGROUNDS za STEAM i zabavite se igrajući ovu igru!</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=11" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 4000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/rust.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite RUST za STEAM i zabavite se igrajući ovu igru!</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=12" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 4000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/paypal.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite novac u iznosu od 50$. Novac će biti prebačen na vaš PayPal nalog.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=13" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 7500 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/skrill.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite novac u iznosu od 50$. Novac će biti prebačen na vaš Skrill nalog.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=14" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 7500 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
					  <div class="card mb-4 shadow-sm">
						<img class='previewisplate' src='nagrade/western.png' width="100%" height="100%">
						<div class="card-body">
						  <p class="card-text">Kupite novac u iznosu od 75$. Novac će Vam biti poslat preko Western Union.</p>
						  <div class="d-flex justify-content-between align-items-center">
							  <a href="isplatiti.php?reward=15" type="button" class="btn btn-sm btn-outline-secondary">Kupi odmah za 15000 bodova!</a>
						  </div>
						</div>
					  </div>
					</div>
					
					
					
				  </div>
				</div>
				
				<!--<div class="shop">
					<div class='item'>
						<a href='isplatiti.php?reward=1'><img src='nagrade/1random.png'></a>
						<span> 200 bodova</span>
						<p> 1 Random Steam Igra </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=2'><img src='nagrade/2random.png'></a>
						<span> 350 bodova</span>
						<p> 2 Random Steam Igre </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=3'><img src='nagrade/5random.png'></a>
						<span> 700 bodova</span>
						<p> 5 Random Steam Igri </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=4'><img src='nagrade/steam.png'></a>
						<span> 850 bodova</span>
						<p> $5 Steam Wallet Code </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=5'><img src='nagrade/steam.png'></a>
						<span> 1800 bodova</span>
						<p> $10 Steam Wallet Code </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=6'><img src='nagrade/steam.png'></a>
						<span> 4000 bodova</span>
						<p> $20 Steam Wallet Code </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=7'><img src='nagrade/gtav.png'></a>
						<span> 4000 bodova</span>
						<p>GTA V - Rockstar key</p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=8'><img src='nagrade/origins.png'></a>
						<span> 8000 bodova</span>
						<p> Origins - Steam key </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=9'><img src='nagrade/banished.png'></a>
						<span> 4000 bodova</span>
						<p>Banished - Steam key</p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=10'><img src='nagrade/friday.png'></a>
						<span> 3000 bodova</span>
						<p> Friday - Steam key </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=11'><img src='nagrade/pubg.png'></a>
						<span> 4000 bodova</span>
						<p> PUBG - Steam key </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=12'><img src='nagrade/rust.png'></a>
						<span> 4000 bodova</span>
						<p> RUST - Steam key </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=13'><img src='nagrade/paypal.png'></a>
						<span> 5000-15000 bodova</span>
						<p> 35$-100$ </p>
					</div>
					
					
					<div class='item'>
						<a href='isplatiti.php?reward=14'><img src='nagrade/skrill.png'></a>
						<span> 5000-15000 bodova</span>
						<p> 35$-100$ </p>
					</div>
					
					<div class='item'>
						<a href='isplatiti.php?reward=15'><img src='nagrade/western.png'></a>
						<span> 10000+ bodova</span>
						<p>  75$+ </p>
					</div>
					
				</div>-->
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