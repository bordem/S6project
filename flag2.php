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
    <title>A propos</title>
	</head>
	<body>
		<div class="jumbotron text-center">
			<?php include('header.html')?>
		</div>
		<main>
        	<h1 class="col-sm-12 text-center" >Vérifier votre flag ici !</h1>
				<?php
				try
		      	{
		      		$bdd = new PDO('mysql:host=localhost;dbname=Flag;charset=utf8', 'projet', 'projet');
					//Si tout va bien, on peut continuer
				
       	   	}
       	   	
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
				
				
			?>












		</main>
        <div class="col-sm-12 jumbotron text-center footerConn">
        	<?php include ('footer.html')//PIED DE PAGE?>
        </div>
  </body>
</html>
