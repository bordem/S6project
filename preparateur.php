
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="img/icon.png" />

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 	<link rel="stylesheet" href="styleTemporaire.css" />
    <title></title>
  </head>
  	<body>
  		<div class="jumbotron text-center">
			<?php include('header.html');?>
		</div>
    
    <?php

    // connect to the database

    $db = mysqli_connect('localhost', 'root', 'dev', 'prince');
    $id = $_GET['id'];
    $sql = "Select * from Fromages where idFromages=$id";

    ?>

        <?php // connexion base de données

 $servername = "localhost";
 $username = "root";
 $password = "dev";

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


			</main>
		<div class="jumbotron text-center col-sm-12 footerConn">
			<?php include('footer.html');?>
		</div>
	</body>
</html>
