<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="img/icon.png" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 	<link rel="stylesheet" href="styleTemporaire.css" />
    <title>Nous contacter</title>
  </head>
  	<body>
  		<div class="jumbotron text-center">
  			<?php include('header.html');//ENTETE?>
  		</div>
  		<main>
        	<h1 class="col-sm-12 text-center">Nous contacter</h1>
			<h2>Veuillez nous contacter sur :</h2>
			<h4>numéro de téléphone:0123456789</h4>
			<h4> adresse mail:fromagerie@gmail.com</h4>
				<form method="post" action="envoyer.php">
						 <label for="nom">Votre nom(nom d'equipe) :</label>
						 <input type="text" name="nom" id="nom" /></br>
						 <label for="msg">Comment pensez-vous que je pourrais améliorer mon site ?</label></br>
						 <textarea name="msg" id="msg" rows="3" cols="50"></textarea></br>
					 <input type="submit" value="envoyer" />
				</form>
		</main>
		<div class="jumbotron text-center col-sm-12">
			<?php include('footer.html');?>
		</div>
	</body>
</html>
