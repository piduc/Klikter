<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="index.php">KLIKTER<img style="display: inline-block; width: 30px;  height: 30px;" src="css/icon.png"> </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../header/icon/icon-home.png"></img> POCETNA</a>
			  <ul class="dropdown-menu">
				<li><a href="zadaci.php" class="content"><img src="../header/icon/icon-dot.png"></img> Zadaci</a></li>
				<li><a href="bodovanje.php" class="content"><img src="../header/icon/icon-dot.png"></img> Bodovanje</a></li>
				<li><a href="dodajnalog.php" class="content"><img src="../header/icon/icon-dot.png"></img> Dodaj nalog</a></li>
				<li><a href="invite.php" class="content"><img src="../header/icon/icon-dot.png"></img> Pozovi prijatelje</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../header/icon/icon-coin.png"></img> MARKET</a>
			  <ul class="dropdown-menu">
				<li><a href="isplata.php" class="content"><img src="../header/icon/icon-dot.png"></img>Isplati novac</a></li>
				<li><a href="uplata.php"><img src="../header/icon/icon-dot.png"></img>Uplati reklamu</a></li>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../header/icon/icon-statistic.png"></img> STATISTIKA </a>
			  <ul class="dropdown-menu">
				<li><a href="stat-isplate.php" class="content"><img src="../header/icon/icon-dot.png"></img> Najvece isplate</a></li>
				<li><a href="stat-radnici.php" class="content"><img src="../header/icon/icon-dot.png"></img> Najaktivniji radnici</a></li>
				<li><a href="stat-zarada.php" class="content"><img src="../header/icon/icon-dot.png"></img> Najvise zaradjeno</a></li>
				<li><a href="stat-ucinak.php" class="content"><img src="../header/icon/icon-dot.png"></img> Najbolji ucinak</a></li>
			  </ul>
			</li>
			<?php 	if(isset($_SESSION['login']) == 1) {if($admin == 1) echo "<li class='dropdown'>
			  <a class='dropdown-toggle' data-toggle='dropdown' href='#'><img src='../header/icon/icon-lock.png'></img> ADMIN PANEL </a>
			  <ul class='dropdown-menu'>
				<li><a href='admin-nalog.php' class='content'><img src='../header/icon/icon-dot.png'></img> Provera naloga</a></li>
				<li><a href='admin-isplate.php' class='content'><img src='../header/icon/icon-dot.png'></img> Provera isplata</a></li>
				<li><a href='admin-zadatak.php' class='content'><img src='../header/icon/icon-dot.png'></img> Provera zadatka</a></li>
				<li><a href='admin-novizadatak.php' class='content'><img src='../header/icon/icon-dot.png'></img> Unos zadatka</a></li>
			  </ul>
			</li>";}?>
		  </ul>
		  <?php
		  if(isset($_SESSION['login']) == 1){
			echo "<ul class='nav navbar-nav navbar-right'>";
			echo "<li class='dropdown'>";
			echo	"<a class='dropdown-toggle' data-toggle='dropdown' href='#'><img src='../header/icon/icon-user.png'></img> ";
			echo 	" <span style='color: #008000'>".$username."</span>  - Bodovi: <span style='color: #008000'>".$bodovi."</span></a>";
			echo  "<ul class='dropdown-menu'>";
			echo	"<li><a href='transakcije.php' class='content'><img src='../header/icon/icon-dot.png'></img>Transakcije</a></li>";
			echo	"<li><a href='../login/logout.php' class='content'><img src='../header/icon/icon-dot.png'></img>Odjavi se</a></li>";
			echo  "</ul>";
			echo "</li>";
			echo "</ul>";
		  }
		  ?>
		</div>
	  </div>
	</nav>