<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="index.css">
        <title></title>
    </head>
    <body>
        <?php
            include_once'/include/menuEtImage.inc';
            include_once 'FonctionsPhp/fonctionsBackOffice.php';
            $objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
  if(isset($_POST['numeroModif']))
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

            $verifModif=false;
            $verifModif= modifierUnBien($objetPDO, $numero, $adresse, $surface, $jardin, $nbPieces, $prix, $ville, $type, $titre, $description);
             var_dump($verifModif);
            if($verifModif==false)
            {
                 echo "<br/> Erreur, le bien n'a pas été modifié, verifiez que tous"
                ." les champs sont remplis, et que le numero du bien est correct <br/>";  
                 
            }
            else
            {
                 echo "Le bien a été modifié";
                
            } 
}              
        ?>
          <a href="gererLesBiens.php">Retour au menu pour gérer les biens</a>    
    </body>
</html>
