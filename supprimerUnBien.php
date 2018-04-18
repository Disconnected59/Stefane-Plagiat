<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Stefane Plagiat</title>
    </head>
    <body>

<?php
include_once'/include/menuEtImage.inc';
include_once 'FonctionsPhp/fonctionsBackOffice.php';
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');



if(isset($_POST['numeroSuppr']))
{
    $numero=$_POST['numeroSuppr'];

  $verifSuppr= supprimerUnBien($objetPDO, $numero);
   if ($verifSuppr==true)
   {
       echo 'Le bien a été supprimé';
       
   }
   else
   {
       echo 'Erreur, le bien n\'a pas été supprimé';
   }
}

?>
<br/>
<a href="gererLesBiens.php">Retour au menu pour gérer les biens</a>

</body>
</html>