
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

if(isset($_POST['connexion'])) { // bouton connexion cliqué
    if(empty($_POST['pseudo'])) {
        echo "Le champ Identifiant est vide.";
    }
    else {
        if(empty($_POST['password'])) {
            echo "Le champ Mot de passe est vide.";
        }
        else {
            $pseudo = $_POST['pseudo'];
            $pass = $_POST['password'];
            $link = mysqli_connect("localhost", "projet", "projet", "prince");
            $requete = mysqli_query($link, "SELECT * FROM users WHERE email = '".$pseudo."' AND password = '".$pass."'") or die(mysql_error());
            if(mysqli_num_rows($requete) == 0) {
                echo "L'identifiant ou le mot de passe est incorrect. Le compte n'a pas été trouvé.";
            }
            else {
               $stat = mysqli_query($_SESSION['link'], "SELECT status FROM users WHERE email = '".$pseudo."' AND password = '".$pass."'") or die(mysql_error());

                while ($row = mysqli_fetch_assoc($stat)) {
					echo "status : {$row['status']} <br>";
					$stat = $row['status'];
					echo $stat;
				}
				
                if ($stat == "client")
                    header("Location: client.php"); // Redirection du navigateur
                else if ($stat == "preparateur")
                    header("Location: preparateur.php"); // Redirection du navigateur
                mysqli_close($_SESSION['link']);
                exit; //on affiche pas le reste de la page
            
            }
        }
    }
}
?>

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
        <h1 class="col-sm-12 text-center">Page de connexion</h1>
        <main>
		    <form action="connexion.php" name="Connexion" method="post">
		        <p>
		        	<div class="form-group col-md-6">
		           		<input type="text" name="pseudo" class="form-control" placeholder="Email">
		            </div>
		            <div class="form-group col-md-6">
		            	<input type="password" name="password" class="form-control" placeholder="Mot de passe">
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
