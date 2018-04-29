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
    <title>Commande</title>
  </head>
  	<body>
		<div class="jumbotron text-center">
			<?php include('header.html')?>
		</div>
		<main>
			<table class="table text-center">
				<tr>
   	 				<th class="text-center">Nom</th><th class="text-center">Quantité</th><th class="text-center">Prix</th>
  				</tr>
				<?php
					$prixTotal =0;
					try
				  	{
				  		$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'projet', 'projet');
						$req = "SELECT IdCmmande FROM `Commande` WHERE IdUser='".$_SESSION['id']."'" ;
						$reponse = $bdd->query($req );
						while ($donnees = $reponse->fetch())
						{
							$idCommande=$donnees['IdCmmande'];
							$req = "SELECT * FROM `Produits` WHERE idCommande='".$idCommande."' " ;
							$reponse1 = $bdd->query($req );
							while ($donnees1 = $reponse1->fetch())
							{
								$fromages=$donnees1['idFromages'];
								$quantite=$donnees1['quantite'];
								$requete = "SELECT * FROM `Fromages` WHERE idFromages='".$fromages."' " ;
								$reponseRequete = $bdd->query($requete );
								while ($donneesRequete = $reponseRequete->fetch())
								{
									$nom=$donneesRequete['nom'];
									$prix=$donneesRequete['prixKG'];
									$prixTotal=$prixTotal+($prix*$quantite);
									echo "<tr>";
										echo "<td>".$nom."</td> <td>".$quantite." Kg</td><td>".$prix*$quantite."€</td>";
									echo "</tr>";								
								}
							}
						}
						echo "<tr>";
						echo "<td></td> <td></td><td>".$prixTotal."€</td>";
						echo "</tr>";
		   	   		}
					catch (Exception $e)
					{
						die('Erreur : ' . $e->getMessage());
					}
				?>
			</table>
		</main>
		<div class="jumbotron text-center col-sm-12 footerConn">
			<?php include('footer.html')?>
		</div>
  </body>
</html>
