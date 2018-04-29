
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
    <title>Livraison</title>
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
		      		echo 'Commande n° : '.$_GET['commande'].'</br>';
		      		$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'projet', 'projet');
					//Si tout va bien, on peut continuer
					//echo "Je suis connecté";
					// On récupère tout le contenu de la table fromages
					//PARTIE CLIENT, AFFICHAGE DES ATTRIBUTS DU CLIENTS A LIVRER
					$reponse3 = $bdd->query('SELECT IdUser FROM Commande WHERE idCmmande ='.$_GET[commande].'');
					while ($donnees= $reponse3->fetch())
					{
						//echo $donnees['IdUser'];
						$reponse3 = $bdd->query('SELECT * FROM users WHERE idUser ='.$donnees['IdUser'].'');
						while ($donneesClient= $reponse3->fetch())
						{
							echo 'Nom : '.$donneesClient['nom'].'</br>';
							echo 'Prenom : '.$donneesClient['prenom'].'</br>';
							echo 'Email : '.$donneesClient['email'].'</br>';
							echo 'Adresse de livraison  : '.$donneesClient['addr'].'</br>';
						}
					}
					?>
			</section>
			<table class="table">
			<tr>
				<td>Fromages</td>
				<td>Poids</td>
				<td>Prix</td>
			</tr>
					<?php
					$prixTotal = 0;
					//PARTIE FROMAGES, AFFICHAGE DES FROMAGES DE LA COMMANDE
					$reponse = $bdd->query('SELECT * FROM Produits WHERE idCommande ='.$_GET[commande].'');
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
					{
						$reponse2 = $bdd->query('SELECT * FROM Fromages WHERE idFromages ='.$donnees[idFromages].'');
						while ($donnees2= $reponse2->fetch())
						{
							echo '<tr>';
							echo '<td>'.$donnees2['nom'].'</td>';
							echo '<td>'.$donnees['quantite'].' Kg</td>';
							$prix = $donnees['quantite']*$donnees2['prixKG'];
							$prixTotal = $prixTotal + $prix;
							echo '<td> Prix : '.$prix.'€</td>';
							echo '</tr>';
						}
					}
					
					echo '<tr>';
					echo '<td></td>';
					echo '<td></td>';
					echo '<td> Prix Total : '.$prixTotal.' €</td>';
					echo '</tr>';
					?>
				</table>	
				
					<input id="checkBox" type="checkbox">	
					Validez la livraison
       	   			<?php
       	   	}
       	   	
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
				
				
			?>
		</main>
		<div class="jumbotron text-center col-sm-12">
			<?php include('footer.html')?>
		</div>
  </body>
</html>
