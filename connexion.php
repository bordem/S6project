
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Connexion</title>
  </head>
  <body>
  		<?php include('header.html');//ENTETE?>
      <?php
      session_start(); //commencer la session

      if(isset($_POST['Login']) && isset($_POST['Password'])){ //recuperer les labels

        try
        {

          $bdd = new PDO('mysql:host=localhost;dbname=souha', 'root', 'souha');// connexion avec la base

          $reponse = $bdd->prepare('SELECT * FROM users where email=\''.$_POST['Login'].'\' and password=\''.$_POST['Password'].'\''); //requete sql injection
          $reponse->execute();
          $donnee=$reponse->fetch();

          if($donnee!=false){ //si les donnees sont juste
              $_SESSION['id']=$donnee['id'];
              $_SESSION['email']=$donnee['email'];
              if($donnee['statut']=="client"){ //si statut ==client il va passer a la page client.php
                  header("Location:client.php");
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
        <h1>Page de connexion</h1>
        <main>
		    <form action="connexion.php" method="post">
		        <p>
		            <input type="text" name="Login" />
		            <input type="password" name="Password">
		            <input type="submit" value="Valider" />
		        </p>
		    </form>
		    <a href="preparateur.html">La page de présentation du preparateur de commande</a>
		    <a href="client.php">La page de présentation du client</a>
        </main>
        <?php include ('footer.html')//PIED DE PAGE?>
  </body>
</html>
