﻿<!DOCTYPE html>
<?php
include_once '../Fonctionsphp/Connexion.php';
include_once '../Fonctionsphp/fonctionsBackOffice.php';
include_once '../Fonctiondphp/fonctionsFrontOffice.php';
?>

<html lang="fr">
	<head>
            <?php
			echo '<meta charset="UTF-8" />';
			echo '<title>Maison numéro '.$numMaison['id'].'</title>';
            ?>
			<link rel="stylesheet" type="text/css" href="../index.css">
	</head>
	<body>
	<p class="titre"><img src="../pictures/logo.png" class="titre" alt="bande du site"></p>
			<nav>
				<ul id="menu">
       				 <li>
                 		 <a href="../index.html">accueil</a>
        			 </li>
        
        			 <li>
                		 <a href="#">Produits</a>
                	 		 <ul>
                        		 <li><a href="../maisons.php">Maisons</a></li>
                        		 <li><a href="../appartements.php">Appartements</a></li>
                        		 <li><a href="../locaux.php">Locaux Commerciaux</a></li>
                             	 <li><a href="../immeuble.php">Immeubles</a></li>
                             	 <li><a href="../terrainus.php">Terrains nus</a></li>
                	 		 </ul>

        			 </li>

        			 <li>
                		 <a href="#">plus</a>
                		 	 <ul>
                        	 	 <li><a href="../forum.html">forum</a></li>
                       			 <li><a href="../liens.html">liens</a></li>
                    		     <li><a href="../contact.html">nous contacter</a></li>
                    		     <li><a href="../team.html">team</a></li>
               				 </ul>
       				 </li>
				</ul>
			</nav>	
	
	<h1> Maison a vendre à Flers </h1>
	
	<div class="contoursmaison">
	
	<div class="slider">
        <input type="radio" name="slide_switch" id="id1"/>
        <label for="id1">
          <img src="../pictures/imageSlider/slidermaison/slidermaison2/image1maison2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/slidermaison/slidermaison2/image1maison2.jpg"/>
        
        <input type="radio" name="slide_switch" id="id2" checked="checked"/>
        <label for="id2">
          <img src="../pictures/imageSlider/slidermaison/slidermaison2/image2maison2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/slidermaison/slidermaison2/image2maison2.jpg"/>
        
        <input type="radio" name="slide_switch" id="id3"/>
        <label for="id3">
          <img src="../pictures/imageSlider/slidermaison/slidermaison2/image3maison2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/slidermaison/slidermaison2/image3maison2.jpg"/>
	      <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a></label>
    </div>
	<div id="HTMLtoPDF">
	<h2> Descriptif de cette maison </h2>
	<p> Cette maison originale, bla bla bla bla bla bla bla bla bla bla <p>
	</div>
	<script src="../js/pdfFromHTML.js"></script>
  <script src="../js/jquery-2.1.3.js"></script>
  <script src="../js/jspdf.js"></script>
	
	
	
	</body>