<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/icon.png" />
    	<!--BOOTSTRAP-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styleTemporaire.css" />
    <title>Produit du terroir</title>
  </head>
  <body>
  		<div class="jumbotron text-center">
	  		<?php include('header.html');
	  		$idFromage = $_GET['id'];?>
  		</div>
		<main>

		<?php
		  try
		  {
		  	// On se connecte à MySQL
		  	$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'userctf', 'xmagass42souha');
		  }
		  catch(Exception $e)
		  {
		  	// En cas d'erreur, on affiche un message et on arrête tout
				  die('Erreur : '.$e->getMessage());
		  }
		  $id = $_GET['id'];
		  // On récupère tout le contenu de la table from
		  $reponse = $bdd->query("SELECT nom,prixKG,animal,imgPath FROM Fromages WHERE idFromages=$id");
		  // On affiche chaque entrée une à une
		  while ($donnees = $reponse->fetch())
		  {
		  	?>
		  		<section class="col-sm-6 text-center">
		  			<img <?php echo "src=img/".$donnees['imgPath'].""?>></br>
				</section>
				<section class="col-sm-6 text-center">
					</br>
					</br>

					<form action="aCommander.php" method="get">
					  	<div class="col-sm-12">
					  		<div class="col-sm-5"></div>
					  		<div class="col-sm-6"><?php echo "Nom : ".$donnees['nom'] ?></div>
					  		<input type="HIDDEN" name="name" value="<?php echo $donnees['nom'] ;?>">
					  	</div>
					  	</br>
					  	<div class="col-sm-12">
					  		<div class="col-sm-5"></div>
					  		<div class="col-sm-6"><?php echo "Prix au kilo : ".$donnees['prixKG'] ;?></div>
					  	</div>
					  	</br>
					  	<div class="col-sm-12">
					  		<div class="col-sm-5"></div>
					  		<div class="col-sm-6"><?php echo "Fromage de ".$donnees['animal'];?></div>
					  	</div>
					  	</br>
						<div class="col-sm-12">
					  		<label for="quantity" class="col-sm-5">Combien de kilos ? : </label>
					  		<input type="number" class="col-sm-6" name="quantity" min="0" max="10">
					  	</div>
					  	<input type="submit">
					</form>
				</section>
		  	<?php
		  }

		  $reponse->closeCursor(); // Termine le traitement de la requête

		 ?>

		</main>
		<div class="col-sm-12 jumbotron text-center">
			<?php include('footer.html');?>
  		</div>
  </body>
</html>
