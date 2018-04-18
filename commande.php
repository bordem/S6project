
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Commande</title>
  </head>
  	<body bgcolor="#f4511e">
    <center><p><I><h2>Bonjour !</h2></I></center>
    <br />
    <br />
    <br />
    <br />
    <p><h3>Cochez le type de fromage que vous voulez commander !</h3></p>
    <br />
    <input type="checkbox" name="cammenbert" id="1" /> <label for="Cammenbert">Cammenbert</label><br />
    <input type="checkbox" name="brie" id="2" /> <label for="Brie">Brie</label><br />
    <input type="checkbox" name="emmental" id="3" /> <label for="Emmental">Emmental</label><br />
    <input type="checkbox" name="cheddar" id="4" /> <label for="Cheddar">Cheddar</label><br />
    <input type="checkbox" name="raclette" id="5" /> <label for="Raclette">Raclette</label><br />
    <input type="checkbox" name="st-nectaire" id="6" /> <label for="St-Nectaire">St-Nectaire</label><br />
    <input type="checkbox" name="tomme" id="7" /> <label for="Tomme">Tomme</label><br />
    <input type="checkbox" name="roquefort" id="8" /> <label for="Roquefort">Roquefort</label><br />
    <br />
    <label for="quantite">Quantité en Kg : </label>
    <input type="text" name="quantite" id="quantite" placeholder="EX:0.5" size="10" maxlength="10" />
    <br />
    <br />
    <br />
    <center><input type="submit" value="Récapitulatif de la commande" action="recap.php" /></center>
 	</body>
</html>
