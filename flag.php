
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Flags</title>
  </head>
  	<body>
  	<?php include ('header.html')//ENTETE DE PAGE?>
      	<main>
		    <p>Entrez votre numéro de flag et vous saurez quel failles vous avez trouver !</p>
		            <form action="flag2.php" method="post">
		            	<input type="text" name="Flag" />
		            	<input type="submit" value="Submit">
		            </form>
		</main>
        <?php include ('footer.html')//PIED DE PAGE?>
  	</body>
</html>
