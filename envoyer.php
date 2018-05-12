<html>
<body bgcolor="#f4511e">
  <?php
  $servername = "localhost";
$username = "root";
$password = "dev";
$dbname = "xss";

try {
  $nom = $_POST['nom'];
  $msg = $_POST['msg'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cookie (nom,msg)
    VALUES ('$nom','$msg')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Votre proposition a été envoyé.<br> Un administrateur va lire votre message dans les plus brefs délais.";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
</body>
</html>
