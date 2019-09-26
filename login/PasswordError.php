<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bartkomanija - Prijava</title>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="slike/logo.png">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="css/bgf.jpg">

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Uloguj se</a></li>
        <li class="tab"><a href="#signup">Registracija</a></li>
      </ul>
      
      <div class="tab-content">
	  
		
		<div id="login">   
		  <h1><font color="red">Pogrešna lozinka</font></h1>
          
          <form action="login.php" method="post">
          
		  
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
          
          <form action="register.php" method="post">
          
          
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
          
			<button type="submit" class="button button-block"/>Registruj</button>
          
          </form>

        </div>
        
		
		
        
        
      </div>
      
</div> 
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
