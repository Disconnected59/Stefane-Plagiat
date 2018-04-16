<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="index.css">
        <title>Stefane Plagiat</title>
    </head>
    <body>
        <?php
          include_once'/include/menuEtImage.inc';
          include_once 'FonctionsPhp/fonctionsBackOffice.php';
          $objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
        
          $numeroSuppression=$_POST['numeroSuppr'];
          $verifSuppr=supprimerUnBien($objetPDO, $numeroSuppression);
          
          
          var_dump($verifSuppr);
          
   if ($verifSuppr==true)
   {
       echo 'Le bien a été supprimé de la base de donnée';
       
   }
   else
   {
       echo 'Erreur, le bien n\'a pas été supprimé';
   }
                  
        ?>
        
        <a href="gererLesBiens.php">Retour au menu pour gérer les biens</a>    
        
    </body>
</html>
