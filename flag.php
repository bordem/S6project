
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Flags</title>
  </head>
  	<body>
      	<main>
		    <p>Entrez votre numéro de flag et vous saurez quel failles vous avez trouver !</p>
		    <?php
		        try
		        {
		            $bdd = new PDO('mysql:host=localhost;dbname=flags;charset=utf8', 'projet', 'projet');
		            echo "Je fonctionne";?>
		            <form action="flag.php" method="post">
		        		<p>
		            		<input type="text" name="Flag" />
		            	</p>
		            </form>
		        <?php
		        }
		        catch (Exception $e)
		        {
		                die('Erreur : ' . $e->getMessage());
		        }
		    ?>
		</main>
        <?php include ('footer.html')//PIED DE PAGE?>
  	</body>
</html>

