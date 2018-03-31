
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="styleTemporaire.css" />
    <title>Commande a livrer</title>
  </head>
  <body>
		<?php include('header.html');?>
      <main>
          <p>
               	Commande a préparer :
          </p>
          <?php
          	try
          	{
          		$bdd = new PDO('mysql:host=localhost;dbname=Prince;charset=utf8', 'projet', 'projet');
				//Si tout va bien, on peut continuer
				//echo "Je suis connecté";
				// On récupère tout le contenu de la table fromages
				$reponse = $bdd->query('SELECT * FROM Commande WHERE Livraison = 0 ');
				
				?>
				<form action="livraison.php" method="get">
			  			<select name="commande" multiple>
							<?php
							
							while ($donnees = $reponse->fetch())
							{
								echo '<option value="'.$donnees['IdCommande'].'">'.$donnees['IdCommande'].'</option>';
							}
							?>

			  			</select>
					<input type="submit">
				</form>
				<?php
				
				
				
          	}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
          ?>
			</main>
		<?php include('footer.html');?>
	</body>
</html>
