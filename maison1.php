<!DOCTYPE html>
<?php
include_once 'FonctionsPhp/fonctionsBackOffice.php';
 include_once 'FonctionsPhp/fonctionsFrontOffice.php';
 $PDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
?>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Maison1</title>
			<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
  	<p class="titre"><img src="pictures/logo.png" class="titre" alt="bande du site"></p>
  			<nav>
  				<ul id="menu">
         				 <li>
                   		 <a href="index.php">accueil</a>
          			 </li>
          			 <li>
                  		 <a href="#">Produits</a>
                  	 		 <ul>
                          		 <li><a href="maisons.php">Maisons</a></li>
                          		 <li><a href="appartements.php">Appartements</a></li>
                          		 <li><a href="locaux.php">Locaux Commerciaux</a></li>
                               <li><a href="immeuble.php">Immeubles</a></li>
                               <li><a href="terrainus.php">Terrains nus</a></li>
                  	 		 </ul>
          			 </li>

          			 <li>
                  		 <a href="#">plus</a>
                  		 	 <ul>
                          	 	 <li><a href="forum.php">forum</a></li>
                         			 <li><a href="liens.php">liens</a></li>
                      		     <li><a href="contact.php">nous contacter</a></li>
                      		     <li><a href="team.php">team</a></li>
                 				 </ul>
         				 </li>
  				</ul>
  			</nav>	
  	
  	<h1> Maison d'architecte originale </h1>
  	
	<div class="contoursmaison">
  	
        <?php
        $mesPhotos=  getPhotos($PDO, $_GET['id']);
        $i=1;
  	echo '<div class="slider">';
        foreach ($mesPhotos as $maPhoto){
          echo '<input type="radio" name="slide_switch" id="id'.$i.'"/>';
          echo '<label for="id'.$i.'">';
            echo '<img src="'.$maPhoto['lien'].'" width="100"/>';
          echo '</label>';
          echo '<img src="'.$maPhoto['lien'].'"/>';
          $i++;
        }
         
  		    echo '<label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>';
          echo '</label>';
        
          ?>
      </div>
      <div id="HTMLtoPDF">
          <?php
          $mesMaisons= getInfos($PDO, $_GET['id']);
          foreach ($mesMaisons as $maMaison){
  	echo '<h2>'.$maMaison['titre'].' </h2>';
  	echo '<p>'.$maMaison['description'].' </p>';
          }
        ?>
  	</div>
  	
  	<script src="js/pdfFromHTML.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
  	<script src="js/jspdf.js"></script>
  	
	</body>
</html>