<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styleTemporaire.css" />
    <title>Produit du terroir</title>
  </head>
  <body>
  		<?php include('header.html');
  		$nomFromage = $_GET['nom'];?>
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
						echo $donnees['nom'];?></br>
							<img src="img/<?php echo $donnees['imgPath'];?>"></br>
						<?php echo $donnees['prixKG']; ?>€/Kg</br>
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
		<?php include('footer.html');?>
  </body>
</html>
