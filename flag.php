
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Flags</title>
  </head>
  <body>
      
        <p>
            Entre votre numéro de flag et vous saurez quel failles vous avez trouver !
        </p>
        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=Flags;charset=utf8', 'dev', 'dev');
                echo "Je fonctionne";
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }
        ?>
  </body>
</html>

