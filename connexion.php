
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <script type="text/javascript" src="hello.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="img/icon.png" />
    <!--BOOTSTRAP-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="styleTemporaire.css" />
    <title>Connexion</title>
  </head>
  <body>
  		<div class="jumbotron text-center">
  			<?php include('header.html');//ENTETE?>
  		</div>
  		<?php
      session_start(); //commencer la session

      if(isset($_POST['Login']) && isset($_POST['Password'])){ //recuperer les labels

        try
        {

          $bdd = new PDO('mysql:host=localhost;dbname=prince', 'projet', 'projet');// connexion avec la base

          $reponse = $bdd->prepare('SELECT * FROM users where email=\''.$_POST['Login'].'\' and password=\''.$_POST['Password'].'\''); //requete sql injection
          $reponse->execute();
          $donnee=$reponse->fetch();

          if($donnee!=false){ //si les donnees sont juste
              $_SESSION['id']=$donnee['IdUser'];
              $_SESSION['email']=$donnee['email'];
              if($donnee['status']=="client"){ //si statut ==client il va passer a la page client.php
                  header("Location:fromages.php");
                }
                else{
                  header("Location:preparateur.php");// sinon a la page preparateur
                }
          }
          else { //sinon 
             echo "<h4>Vous avez saisi des mauvais identifiants veillez ressayer</h4>";
          }


        }
        catch (Exception $e) {
          die('Erreur : ' . $e->getMessage());
        }
      } ?>
        <h1 class="col-sm-12 text-center">Page de connexion</h1>
        <main>
		    <form action="connexion.php" name="Connexion" method="post">
		        <p>
		        	<div class="form-group col-md-6">
		           		<input type="text" name="Login" class="form-control" placeholder="Email">
		            </div>
		            <div class="form-group col-md-6">
		            	<input type="password" name="Password" class="form-control" placeholder="Mot de passe">
		            </div>
		            <div class="col-sm-0"></div>
		            	<center><input onClick="Login()" type="submit" value="connexion" name="connexion"/></center>
		            <div class="col-sm-0"></div>
		        </p>
		    </form>
        </main>
        <div class="col-sm-12 jumbotron text-center footerConn">
        	<?php include ('footer.html')//PIED DE PAGE?>
        </div>
  </body>
</html>
