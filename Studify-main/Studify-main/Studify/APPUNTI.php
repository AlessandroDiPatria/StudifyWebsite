<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" lang="javascript" src="script.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
  </head>
  <body>
  
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
		<a class="navbar-brand" href="index.php">
		  <img src="img/logo_small.png" height="50" alt="" loading="lazy"/>
		</a>
	  </div>
	</nav>

	<div class="collapse navbar-collapse" id="collapseResponsive"></div>
	<ul class="navbar-nav ml-auto"> <!--per fare le scritte vicino la home-->
		<li class="nav-item ">
			<a class="nav-link" aria-current="page" href="index.php">Home</a></li>
				
		<li class="nav-item ">
			<a class="nav-link active" aria-current="page" href="APPUNTI.php">Appunti</a></li>
		<li class="nav-item ">
			<a class="nav-link" href="chiSiamo.html">Chi Siamo</a></li>
			<?php
					if(isset($_SESSION['id'])) {
						
						?>
					    <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> <?php echo($_SESSION['username']) ?> </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
							<a class="dropdown-item" href="profile.php"> Il tuo profilo </a>
						</li>
						<li class="nav-item active">
							  <form action="logout.php" method="post"> <input type="submit" value="Esci" class="btn btn-primary" style="background-color: navy;"/></form></li>
					<?php
					}
					else {
						?>
						<a class="nav-link" href="registrazione/index.html" > Registrati </a></li>
						<li class="nav-item active">
						<a class="btn btn-primary" style="background-color: navy;" href="login/index.php">Accedi</a></li>
						<?php
					}
					?>	
	</ul>
</nav>
  <br>
  <div class="container">
<div class="jumbotron-fluid" style="background-color: whitesmoke;" data-aos="slide-left">
<div class="text-center">
    <br>
<h3>Appunti</h3>
<br>
</div>
</div>
</div>
  <br>

    <!-- CARDS -->
    <br>
	<div class="container">
      <div class="row">
        <div class="col-4" data-aos="flip-left" >
          <div class="card h-100"  >
            <img
              src="img/Sezione Appunti/Informatica.png"
              class="card-img-top"
              alt="..."/>
            <div class="card-body" >
              <h5 class="card-title">Informatica</h5>
              <p class="card-text">
                Qui potrai trovare tutti gli appunti riguardanti la facoltà di Informatica. Gli appunti 
                possono variare in base al programma e al professore quindi attento!
              </p>
              <a class="btn btn-primary" style="background-color: navy;" href="/Studify/informatica.php">Vai agli appunti</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Ultimo aggiornamento 4 min fa</small>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card h-100" data-aos="flip-left">
            <img
              src="img/Sezione Appunti/Psicologia.jpg"
              class="card-img-top"
              alt="..."/>
            <div class="card-body">
              <h5 class="card-title">Psicologia</h5>
              <p class="card-text">
                Qui potrai trovare tutti gli appunti riguardanti la facoltà di Psicologia. Gli appunti 
                possono variare in base al programma e al professore quindi attento!
              </p>
              <a class="btn btn-primary" style="background-color: navy;" href="/Studify/psicologia.html" >Vai agli appunti</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Ultimo aggiornamento 3 min fa</small>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card h-100" data-aos="flip-left">
            <img
              src="img/Sezione Appunti/Economia.jfif"
              class="card-img-top"
              alt="..."/>
            <div class="card-body">
              <h5 class="card-title">Economia</h5>
              <p class="card-text">
                Qui potrai trovare tutti gli appunti riguardanti la facoltà di Psicologia. Gli appunti 
                possono variare in base al programma e al professore quindi attento!
              </p>
              <a class="btn btn-primary" style="background-color: navy;" href="/Studify/economia.html">Vai agli appunti</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Ultimo aggiornamento 2 min fa</small>
            </div>
          </div>
        </div>
      </div>
	</div>
  </body>


	</div>

<br>
<br>
<<
    <!-- Card:INFORMATICA -->

    <!-- Card:PSICOLOGIA -->
    
    <!-- Card:ECONOMIA -->

<!---                                   Footer                                     -->
<footer class="bg-light text-center text-black" style="background-color: antiquewhite;">
	<div class="container p-4">
	  <!-- Sezione: Social media -->
	  <section class="mb-4">
		<!-- Discord -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://discord.gg/hrwyUy7G9v" role="button"
		  ><i class="fab fa-discord"></i
		
		<!-- Facebook -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"
		  ><i class="fab fa-facebook-f"></i
		></a>
  
		<!-- Twitter -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/?lang=it" role="button" 
		  ><i class="fab fa-twitter"></i
		></a>
  
		<!-- Google -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-google"></i
		></a>
  
		<!-- Instagram -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"
		  ><i class="fab fa-instagram"></i
		></a>
  
		<!-- Linkedin -->
		<a class="btn btn-outline-dark  btn-floating m-1" href="https://it.linkedin.com/" role="button"
		  ><i class="fab fa-linkedin-in"></i
		></a>
  
		<!-- Github -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/DdIUMmies/Studify" role="button"
		  ><i class="fab fa-github"></i
		></a>
	  </section>
  
<!--                  Newsletter                -->
	  <section class="">
		<form action=""> 
		  <div class="row d-flex justify-content-center">
			<div class="col-auto">
			  <p class="pt-2">
				<strong>Iscriviti alla newsletter!</strong>
			  </p>
			</div>

			<div class="col-md-5 col-12">
			  <div class="form-outline form-dark mb-4">
				<input type="email" id="form5Example2" class="form-control" />
				<label class="form-label" for="form5Example2">Email </label>
			  </div>
			</div>
  
			<div class="col-auto">
			  <button type="submit" class="btn btn-outline-dark mb-4">
				Iscriviti
			  </button>
			</div>
		  </div>
		</form>
	  </section>

	  <section class="mb-4">
		<p>
		  Questo sito è stato progettato per il corso di linguaggi e tecnologie per il web del corso di laurea in Ingegneria 
		  Informatica de La Sapienza di Roma. Anche se è stato fatto a scopo didattico, i contenuti sono proprietà intellettuale dei suoi creatori e ne è vietata la duplicazione 
		  (parziale o totale) senza l'esplicito consenso di essi.
		</p>
	  </section>

<!--             Copyright                 -->
	<div class="text-center p-3" >
	  © 2021 Copyright:
	  <a class="text-dark" href="https://mdbootstrap.com/">Studify.it</a>
	</div>
  </footer>
</body>
</html>

<script>
  AOS.init({
   duration:1000,
   offset:120,
   easing: 'ease-in-out'

 });
 </script>