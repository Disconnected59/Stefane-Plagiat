﻿<!DOCTYPE html>
<html xmins="http://www.w3.org/1999.xhtml" xml:lang="fr" lang="fr">
	<head>
			<meta charset="UTF-8"/>
			<title>Maisons à vendre : </title>
				<link rel="stylesheet" type="text/css" href="index.css">
			<script type="text/javascript" src="menu.js"></script>
			
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
			<form method="post" action="Recherche.php">
				 Type de produit: <span class="marge">Jardin:</span> <span class="marge">Nombre de pièce:</span><br/>
			     <div class="recherche">
			        <div class="box">
			        <div><input type="radio" name="Type" value="Maison" id="maison" /> <label for="maison">Maisons</label></div>
			        <div><input type="radio" name="Type" value="Appartement" id="app" /> <label for="app">Appartement</label></div>
			        <div><input type="radio" name="Type" value="Immeuble" id="immeuble" /> <label for="immeuble">Immeuble</label></div>
			        <div><input type="radio" name="Type" value="Locaux" id="locaux" /> <label for="locaux">Locaux</label></div>
			        <div><input type="radio" name="Type" value="Terrain" id="nus" /> <label for="nus">Terrain nus</label></div>
			        </div>
			        <div class="box marge">
			        <div><input type="radio" name="Jardin" value="Oui" id="oui" /> <label for="oui">Oui</label></div>
			        <div><input type="radio" name="Jardin" value="Non" id="non" /> <label for="non">Non</label></div>
			        </div>
			        <div class="box marge">
			        <div><input type="radio" name="Piece" value="1-10" id="10" /> <label for="10">1 à 10</label></div>
			        <div><input type="radio" name="Piece" value="11-20" id="20" /> <label for="20">11 à 20</label></div>
			        <div><input type="radio" name="Piece" value="21-30" id="30" /> <label for="30">21 à 30</label></div>
			        <div><input type="radio" name="Piece" value="31" id="31" /> <label for="31">31 et plus</label></div>
			        </div>
			   </div>
			</form>
			<br/>
			<br/><br/>
			<div class="titre">
			<h1> Maisons disponibles en vente </h1>
			</div>
			<div class="contoursmaison">
				<h2> Maison d'architecte originale </h2>
				<p> <img src="http://upload.dinhosting.fr/l/b/J/maison1.jpg"alt="Image de la première maison">
				Maison plein pied - 10 pièces - 215m² </p>
				<p class="prix"> 800 000€ </p>
			<div align="right">
			<a href="Maisons/maison1.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			</div>
			
			<div class="contoursmaison">
			<h2> Maison à vendre Flers </h2>
			<p> <img src="http://upload.dinhosting.fr/X/l/L/maison2.jpg"alt="Image de la seconde maison"><br>
			 Maison deux étages - 8 pièces - 128m²</p>    
			 <p class="prix">148 240€ </p>
			 <div align="right">
			<a href="Maisons/maison2.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			</div>
			 
			<div class="contoursmaison">
			 <h2> Maison à vendre Audierne </h2>
			<p> <img src="http://upload.dinhosting.fr/0/O/c/maison3.jpg"alt="Image de la troisieme maison">
			 Maison deux étages et cave - 6 pièces - 118m² </p>
			 <p class="prix"> 415 360 € </p>
			 <div align="right">
			<a href="Maisons/maison3.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			</div>
			 
			 <div class="contoursmaison">
			<h2> Maison à vendre Bignou </h2>
			<p> <img src="http://upload.dinhosting.fr/u/h/r/maison4.jpg"alt="Image de la quatrième maison">
			 Maison deux étages avec grenier - 9 pièces - 157m² </p>
			 <p class="prix"> 352 820 € </p>
			 <div align="right">
			<a href="Maisons/maison4.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			</div>
			
			<div class="contoursmaison">		
			<h2> Maison à vendre Pornichet </h2>
			<p> <img src="http://upload.dinhosting.fr/J/j/f/maison5.jpg"alt="Image de la cinquième maison">
			 Maison deux étages - 8 pièces - 146m² </p>
			 <p class="prix"> 353 600€ </p>
			 <div align="right">
			<a href="Maisons/maison5.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			 </div>
			
	</body>
</html>