<html>
<head>
	<title>Espace client</title>
	<meta charset="utf-8">
	<!--BOOTSTRAP-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="styleTemporaire.css" />
</head>
<body bgcolor="#f4511e">
	<div class="jumbotron text-center">
  		<?php include('header.html');//ENTETE?>
  	</div>
  	<?php
					try
				  	{
				  		if(isset($_POST['mail']) && isset($_POST['pass'])) //recuperer les labels
				  		{
				  			$mail = $_POST['mail'];
				  			$password = $_POST['pass'];
				  			
				  			$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'projet', 'projet');
				  			//TEST //$reponse = $bdd->prepare("SELECT * FROM `users` WHERE 1");
							$reponse = $bdd->prepare("INSERT INTO `users`(`nom`, `prenom`, `login`, `password`, `email`, `status`, `Addr`) VALUES ('unknow','unknow','".$mail."','".$password."','".$mail."','client','adresse inconnu')");
							$reponse->execute();
							$donnee=$reponse->fetch();
							//echo "INSERT INTO `users`(`nom`, `prenom`, `login`, `password`, `email`, `status`, `Addr`) VALUES ('unknow','unknow','unknow','".$password."','".$mail."','client','adresse inconnu')";
							if($donnee!=false){
								header("Location:connexion.php");
							}
						}
					}	
					catch (Exception $e)
					{
						die('Erreur : ' . $e->getMessage());
					}
	?>
  	
	<main>
	<h1 class="col-sm-12 text-center" >Espace client </h1>
		<form method="post" action="client.php">
			<p>
				<div class="col-sm-12 text-center" >
					<label for="email" class="col-sm-2 text-center" >Entrez votre E-mail : </label>
					<input type="email" name="mail" id="mail" placeholder="Ex : alex123@gmail.com" size="30" maxlength="30" class="col-sm-6 text-center" /></br>
				</div>
				<div class="col-sm-12 text-center" >
					<label for="pass" class="col-sm-2 text-center">Entrez votre mot de passe :</label>
					<input type="password" name="pass" id="pass" class="col-sm-6 text-center"/></br>
				</div>
				<div class="col-sm-12 text-center" >
					<label for="pass" class="col-sm-2 text-center">Confirmez votre mot de passe :</label>
					<input type="password" name="pass1" id="pass1" class="col-sm-6 text-center"/></br>
				</div>
					<div class="col-sm-12 text-center" >
					<div class="col-sm-2"></div>
						<input class="col-sm-3" type="submit" value="S'inscrire" />
					<div class="col-sm-1"></div>
				</div>
		</form>
				
				
			<!--<center><img src="img/fromagerie.jpg" height="300" width="350"></img></center>-->
			</p>
	</main>
	<div class="col-sm-12 jumbotron text-center footerConn">
  		<?php include('footer.html');//ENTETE?>
  	</div>
</body>
</html>
