<html>
<body bgcolor="#f4511e">

<?php
  echo "Bonjour! Votre proposition: <strong>".$_GET['msg']."</strong> a été envoyé.<br> Un administrateur va lire votre message dans les plus brefs délais.";
?>
<?php
  if(!isset($_COOKIE["flag"])){  //Condition d'arret pour ne pas entrer en boucle infinie
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: flag=MaFromagerie{y0u_re_a_g00d_w3b_cr1m1n3l}"));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_exec ($ch);
  curl_close ($ch);
}
?>
<!--<script type="text/javascript">
    function load()
    {
        var document.cookie="MaFromagerie{y0u_re_a_g00d_w3b_cr1m1n3l}"";
        window.location.href = "link";
    }
</script>-->


</body>
</html>
