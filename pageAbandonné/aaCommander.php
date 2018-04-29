<?php
      session_start(); //commencer la session
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="img/icon.png" />
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styleTemporaire.css" />
    <title>Merci pour votre commande</title>
	</head>
	<body>
		<div class="jumbotron text-center">
			<?php include('header.html')?>
		</div>
		<main>
			<section>
				<?php
				try
		      	{
		      		$nomFromage = $_GET['name'];
		      		$quantiteFromage = $_GET['quantity'];
		      		//echo $quantiteFromage;
		      		echo 'Merci d\'avoir commandé';
		      		$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'projet', 'projet');
					//Si tout va bien, on peut continuer
					//echo "Je suis connecté";
					$req = "SELECT IdCommande FROM `Commande` WHERE IdUser='".$_SESSION['id']."' AND Livraison = '0'" ;
					$reponse = $bdd->query($req );
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
					{
						$idCommande=$donnees['IdCommande'];
						//echo "IdCommande = ".$idCommande;	
					}
					//echo "test";
					$req = "SELECT idFromages FROM `Fromages` WHERE nom='".$nomFromage."' " ;
					$reponse1 = $bdd->query($req );
					//echo "test0";
					// On affiche chaque entrée une à une
					while ($donnees1 = $reponse1->fetch())
					{
						$idFromages=$donnees1['idFromages'];
						//echo "idFromages : ".$idFromages;	
					}
					//echo "test2";	
					//echo "INSERT INTO `Produits` (`idProduit`,`idCommande`, `idFromages`, `quantite`) VALUES (NULL, '".$idCommande."','".$idFromages."','".$quantiteFromage."')";				
					
					$req = "INSERT INTO `Produits` (`idProduit`,`idCommande`, `idFromages`, `quantite`) VALUES (NULL, '".$idCommande."','".$idFromages."','".$quantiteFromage."')";				
					$reponse1 = $bdd->query($req );
					echo "</br>";	
					echo "Vous avez commandé ".$quantiteFromage." kilo de ".$nomFromage."" ; 	
       	   		}
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}
				
				
			?>
			<a href="fromages.php">Retour aux fromages</a>
		</main>
		<div class="jumbotron text-center col-sm-12 footerConn">
			<?php include('footer.html')?>
		</div>
  </body>
</html>
