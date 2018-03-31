
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="styleTemporaire.css" />
    <title>Livraison</title>
	</head>
	<body>
		<?php include('header.html')?>
		<main>
			<?php
			try
          	{
          		echo 'Vous allez préparez la commande n° :"'.$_GET['commande'].'"';
          		$bdd = new PDO('mysql:host=localhost;dbname=Prince;charset=utf8', 'projet', 'projet');
				//Si tout va bien, on peut continuer
				//echo "Je suis connecté";
				// On récupère tout le contenu de la table fromages
				$reponse = $bdd->query('SELECT * FROM Produits WHERE idCommande ='.$_GET[commande].'');
				
											
          	}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
				
				
			?>
		</main>
		<?php include('footer.html')?>
  </body>
</html>
