<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styleTemporaire.css" />
    <title>Fromages</title>
  </head>
  <body>
  		<?php include('header.html');?>
		<main>
		  	<h1>Nos fromages</h1>
		  	<a href="connexion.php">Se connecter</a>
		  	<a href="commande.php">Votre commande</a>
		  	<?php

				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=Prince;charset=utf8', 'projet', 'projet');
					//Si tout va bien, on peut continuer
					//echo "Je suis connecté";
					// On récupère tout le contenu de la table fromages
					$reponse = $bdd->query('SELECT * FROM Fromages');
					?>
					<table>
					<?php
					$i=0;
					$nbColonne = 3;
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
					{
						$addr = "produit.php?nom=".$donnees['nom'];
						if($i%$nbColonne==0)
							echo "<tr>";
						?>
							<p>
								<td>
										<?php echo $donnees['nom'];?></br>
										<img src="img/<?php echo $donnees['imgPath'];?>"></br>
										<?php echo $donnees['prixKG']; ?>€/Kg</br>
										<?php echo '<a href="' . $addr . '">Voir le produit</a>';?>
									</form>
								</td>
							</p>
						<?php
						if($i%$nbColonne==$$nbColonne-1)
							echo "</tr>";
						$i=$i+1;
					}
					?>
					</table>
					<?php
				}
				catch (Exception $e)
				{
						die('Erreur : ' . $e->getMessage());
				}

				$reponse->closeCursor(); // Termine le traitement de la requête

			?>


		</main>
		<?php include('footer.html');?>
  </body>
</html>
