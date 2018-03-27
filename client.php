
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Client</title>
  </head>
  <body>
      <?php
        session_start(); // s'il passe par le llogin et pwd il peut passer a cette page
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){
       ?>
          <p>
                Cette page est la présentation du client
          </p>
          <a href="fromages.php">La page de présentation des différents fromages</a>
          <a href="commande.php">La page de commande du client</a>
      <?php }else{
          header("Location:connexion.php");
 
      }  ?>
  </body>
</html>
