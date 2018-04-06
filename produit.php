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
	  		$nomFromage = $_GET['nom'];?>
  		</div>
		<main>
			<?php
			try
			{
					$bdd = new PDO('mysql:host=localhost;dbname=Prince;charset=utf8', 'projet', 'projet');
					//Si tout va bien, on peut continuer
					$req = "SELECT * FROM Fromages WHERE nom = '".$nomFromage."'" ;
					// On récupère tout le contenu de la table fromages
					$reponse = $bdd->query($req );
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
					{
						?>	<section class="col-sm-6 text-center">
								<img src="img/<?php echo $donnees['imgPath'];?>"></br>
							</section>
							<section class="col-sm-6 text-center">
								<?php echo $donnees['nom'];?></br>
								<?php echo $donnees['prixKG']; ?>€/Kg</br>
								<?php echo "Fromage de ".$donnees['animal'];?></br>
							</section>
						<?php
					}

			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}

				//$reponse->closeCursor(); // Termine le traitement de la requête
			?>
		</main>
		<div class="col-sm-12 jumbotron text-center">
			<?php include('footer.html');?>
  		</div>
  </body>
</html>
