<html>
<body bgcolor="#f4511e">
  <?php
  //afficher les fromages pour chaque id
  try
  {
  	// On se connecte à MySQL
  	$bdd = new PDO('mysql:host=localhost;dbname=prince;charset=utf8', 'userctf', 'xmagass42souha');
  }
  catch(Exception $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

  //
  $id = $_GET['id'];
  // On récupère tout le contenu de la table from
  $reponse = $bdd->query("SELECT nom,prixKG FROM Fromages WHERE idFromages=$id");
  // On affiche chaque entrée une à une

  while ($donnees = $reponse->fetch())
  {

  ?>

      <p>
      Le nom de fromage est : <?php echo $donnees['nom']; ?>, son prix est <?php echo $donnees['prixKG']; ?> euros !<br />
      </p>
  <?php
  }

  $reponse->closeCursor(); // Termine le traitement de la requête

  ?>























</body>
</html>
