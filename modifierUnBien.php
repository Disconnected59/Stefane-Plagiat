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

if(isset($_POST['adresseModif']))
{
    $numero=$_POST['numeroModif'];
    $adresse=$_POST['adresseModif'];
    $surface=$_POST['surfaceModif'];
    $jardin=$_POST['jardinModif'];
    $nbPieces=$_POST['nbPiecesModif'];
    $prix=$_POST['prixModif'];
    $ville=$_POST['villeModif'];
    $type=$_POST['typeModif'];
    $titre=$_POST['titreModif'];
    $description=$_POST['descriptionModif'];
    
   $verifModif= modifierUnBien($objetPDO, $numero, $adresse, $surface, $jardin, $nbPieces, $prix, $ville, $type, $titre, $description);
   if ($verifModif==true)
   {
       echo 'Le bien a été modifié';
       
   }
   else
   {
       echo 'Erreur, le bien n\'a pas été modifié';
   }
  
    
    
}

?>
<br/>
<a href="gererLesBiens.php">Retour au menu pour gérer les biens</a>

</body>
</html>