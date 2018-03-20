
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Connexion</title>
  </head>
  <body>
  		<?php include('header.html');//ENTETE?>
        <h1>Page de connexion</h1>
        <main>
		    <form action="client.html" method="post">
		        <p>
		            <input type="text" name="Login" />
		            <input type="text" name="Password">
		            <input type="submit" value="Valider" />
		        </p>
		    </form>
		    <a href="preparateur.html">La page de présentation du preparateur de commande</a>
		    <a href="client.php">La page de présentation du client</a>
        </main>
        <?php include ('footer.html')//PIED DE PAGE?>
  </body>
</html>

