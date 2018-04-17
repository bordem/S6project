<html>
<body bgcolor="#f4511e">

<?php
//xss attack
    $nom = "";
    $msg = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('localhost', 'root', 'dev', 'xss');

    // if the validation button is clicked

    $nom = $_POST['nom'];
    $msg = $_POST['msg'];

    // if there are no errors, save user to database

    $sql = "INSERT INTO cookie(nom, msg) VALUES('$nom',
 '$msg')";
    mysqli_query($db, $sql);
    echo "Votre proposition a été envoyé.<br> Un administrateur va lire votre message dans les plus brefs délais.";
    ?>













<?php // le bot
// la pour stocker le msg dans la base
/* if(!isset($_COOKIE["flag"])){  //Condition d'arret pour ne pas entrer en boucle infinie
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: flag=MaFromagerie{y0u_re_a_g00d_w3b_cr1m1n3l}"));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_exec ($ch);
  curl_close ($ch);
}*/
?>



</body>
</html>
