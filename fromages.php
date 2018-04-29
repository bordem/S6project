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
    <title>Fromages</title>
  </head>
  <body class="bodyStyle">
  		<div class="jumbotron text-center">
  			<?php include('header.html');?>
		</div>
		<main>
		<div class="presentation text-center">
		  		<h2>Notre selection de fromages</h2>
		  		<div class="col-sm-3"></div>
		  		<a href="connexion.php" class="col-sm-2">Se connecter</a>
		  		<div class="col-sm-2"></div>
		  		<a href="commande.php" class="col-sm-2">Votre commande</a>
		  		<div class="col-sm-3"></div>
		</div>
<?php
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'projet', 'projet');
					$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//Si tout va bien, on peut continuer
					//echo "Je suis connecté";
					// On récupère tout le contenu de la table fromages
					$reponse = $bdd->query('SELECT * FROM Fromages');
					?>
					<div class="table-responsive">
					<table class="table">
					<?php
					$i=0;
					$nbColonne = 3;
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
					{
						$addr = "produit.php?id=".$donnees['idFromages'];
						if($i%$nbColonne==0)
							echo "<tr>";
						?>
							<p>
								<td>
								<div class="col-sm-12 text-center">
										<?php echo $donnees['nom'];?></br>
										<a href=<?php echo $addr ?>><img src="img/<?php echo $donnees['imgPath'];?> " class="img-fluid" alt="Responsive image" style=width:100%></a></br>
										<?php echo $donnees['prixKG']; ?>€/Kg</br>
										<?php echo '<a href="' . $addr . '">Voir le produit</a>';?>
									</form>
								</div>
								</td>
							</p>
						<?php
						if($i%$nbColonne==$$nbColonne-1)
							echo "</tr>";
						$i=$i+1;
					}
					?>
					</table>
					</div>
					<?php
				}
				catch (Exception $e)
				{
						die('Erreur : ' . $e->getMessage());
				}
   ?>
   		</main>
   		<div class="jumbotron text-center">
  			<?php include('footer.html');?>
		</div>
  </body>
</html>
