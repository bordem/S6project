<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/icon.png" />
    	<!--BOOTSTRAP-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="styleTemporaire.css" />
    <title>Fromages</title>
  </head>
  <body> 
  		<div class="jumbotron text-center">
  		<?php include('header.html');?>

</div>

      <br />
      <a href="showfromage.php?id=1" color="white" class="col-sm-4">Cammembert</a>
      <br />
      <a href="showfromage.php?id=2" color="white" class="col-sm-4">Brie</a>
      <a href="showfromage.php?id=3" color="white" class="col-sm-4">Emmental</a>
      <br />
      <a href="showfromage.php?id=4" color="white" class="col-sm-4">Cheddar</a>
      <a href="showfromage.php?id=5" color="white" class="col-sm-4">Raclette</a>
      <br />
      <a href="showfromage.php?id=6" color="white" class="col-sm-4">St-Nectaire</a>
      <a href="showfromage.php?id=7" color="white" class="col-sm-4">Tomme</a>
      <a href="showfromage.php?id=8" color="white" class="col-sm-4">Roquefort</a>

      <?php

      // connect to the database

      $db = mysqli_connect('localhost', 'projet', 'projet', 'prince');
      $id = $_GET['id'];
      $sql = "Select * from Fromages where idFromages=$id";

      ?>

          <?php // connexion base de données

   $servername = "localhost";
   $username = "projet";
   $password = "projet";

   try {
       $conn = new PDO("mysql:host=$servername;dbname=prince", $username, $password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       }
   catch(PDOException $e)
       {
       echo "Connection failed: " . $e->getMessage();
       }
   ?>
  </body>
</html>
