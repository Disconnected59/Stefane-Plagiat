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

if(isset($_POST['adresseAjou']))
{
    $adresse=$_POST['adresseAjou'];
    $surface=$_POST['surfaceAjou'];
    $jardin=$_POST['jardinAjou'];
    $nbPieces=$_POST['nbPiecesAjou'];
    $prix=$_POST['prixAjou'];
    $ville=$_POST['villeAjou'];
    $type=$_POST['typeAjou'];
    $titre=$_POST['titreAjou'];
    $description=$_POST['descriptionAjou'];
    
   $verifAjou=ajouterUnBien($objetPDO, $adresse, $surface, $jardin, $nbPieces, $prix, $ville, $type, $titre, $description);
   if ($verifAjou==true)
   {
       echo 'Le bien a été ajouté à la base de donnée';
       
   }
   else
   {
       echo 'Erreur, le bien n\'a pas été ajouté';
   }
  
    
    
}

?>
<br/>
<a href="gererLesBiens.php">Retour au menu pour gérer les biens</a>

</body>
</html>