<?php
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
    
  
    
    
}

?>
