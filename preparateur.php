
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
    <title>Commande a livrer</title>
  </head>
  	<body>
  		<div class="jumbotron text-center">
			<?php include('header.html');?>
		</div>
      	<main>
        <h1 class="col-sm-12 text-center">Commande a préparer :</h1>
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
			  		
			  		<div class="form-group col-sm-5"></div>
    				<div class="form-group col-sm-2">
			  			<select class="form-control" size="1" name="commande">
							<?php
							
							while ($donnees = $reponse->fetch())
							{
								echo '<option value="'.$donnees['IdCommande'].'">'.$donnees['IdCommande'].'</option>';
							}
							?>

			  			</select>
			  		</div>
			  		<div class="form-group col-sm-5"></div>
					
					<div class="col-sm-4"></div>
		            	<input type="submit" value="Valider" class="col-sm-4 form-control "></br>
		            <div class="col-sm-4"></div>
				</form>
				<?php
				
				
				
          	}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
          ?>
			</main>
		<div class="jumbotron text-center col-sm-12 footerConn">
			<?php include('footer.html');?>
		</div>
	</body>
</html>
