<?php
/* These are our valid username and passwords */
$user = 'userctf';
$pass = 'xmagass42souha';

if (isset($_COOKIE[['username']) && isset($_COOKIE['password')) {

    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass))) {
        header('Location: login.html');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }

} else {
    header('Location: login.html');
}
?>

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
