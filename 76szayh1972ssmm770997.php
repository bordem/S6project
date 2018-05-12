<?php
session_start();
setcookie ("flag","MaFromagerie{d@m1n_h0w_y0u_f33l_s33ing_y0ur_c00ki3s_st0l3n}"); ?>
<html>
<body bgcolor="#f4511e">
  <?php
  try
  {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=xss;charset=utf8', 'root', 'dev');
  }
  catch(Exception $e)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

  //
  $nom = $_POST['nom'];
  $msg = $_POST['msg'];
  // On récupère tout le contenu de la table
  $reponse = $bdd->query("SELECT * FROM cookie");
  // On affiche chaque entrée une à une

  while ($donnees = $reponse->fetch())
  {

  ?>

      <p>
      Le nom de l'utilisateur  est : <?php echo $donnees['nom']; ?>, le message est <?php echo $donnees['msg']; ?> <br />
      </p>
  <?php
  }

  $reponse->closeCursor(); // Termine le traitement de la requête

  ?>

</body>
</html>
