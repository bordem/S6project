<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<!--BOOTSTRAP-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styleTemporaire.css" />
    <title>Accueil du site</title>
  </head>
  <body>
  		<div class="jumbotron text-center">
			<?php include('header.html');//ENTETE?>
		</div>
        <main>
			<article class="col-sm-12 text-center">
				<h2>Venez découvrir notre grande sélection de produit</h2>
				<a href="fromages.php"><img src="img/fromageDecouverte.jpg"></img></a>
			</article>
			<article class="col-sm-12 text-center">
				<h2>Deja client? Venez vous inscrire !</h2>
				<a href="connexion.php"><img src="img/fidelisation.jpg"></img></a>
			</article>
        </main>
		<div class="col-sm-12 jumbotron text-center">
			<?php include('footer.html');?>
  		</div>
  </body>
</html>
