<!DOCTYPE html>
<html xmins="http://www.w3.org/1999.xhtml" xml:lang="fr" lang="fr">
	<head>
			<meta charset="UTF-8"/>
			<title>Appartement </title>
				<link rel="stylesheet" type="text/css" href="../index.css">
			<script type="text/javascript" src="../menu.js"></script>
			
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
                        	 	 <li><a href="../forum.php">forum</a></li>
                       			 <li><a href="../liens.php">liens</a></li>
                    		     <li><a href="../contact.php">nous contacter</a></li>
                    		     <li><a href="../team.php">team</a></li>
               				 </ul>
       				 </li>
				</ul>
			</nav>
			
			<br/>
			<br/><br/>
			<div id="HTMLtoPDF">
			<div class="contoursmaison">
			<h2> Appartement Nice </h2>
				<div class="slider">
        <input type="radio" name="slide_switch" id="id1"/>
        <label for="id1">
          <img src="../pictures/imageSlider/sliderappart/sliderappart3/appartement3.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart3/appartement3.jpg"/>
        
        <input type="radio" name="slide_switch" id="id2" checked="checked"/>
        <label for="id2">
          <img src="../pictures/imageSlider/sliderappart/sliderappart3/appart3photo2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart3/appart3photo2.jpg"/>
        
        <input type="radio" name="slide_switch" id="id3"/>
        <label for="id3">
          <img src="../pictures/imageSlider/sliderappart/sliderappart3/appart3photo3.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart3/appart3photo3.jpg"/>
		 <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
      </div>
				Vente appartement 3 pièces 51 m² Nice  </p>
				<p class="prix"> 165 000 €  </p>
				<p>
				Appartement 2/3 pièces, bas Mont boron, proximité tous transports et commerces, 15 minutes à pied du port de Nice. <br>
<br>
Orientation est/ouest traversant, 1er étage sans ascenseur, équipé d'une climatisation réversible, cuisine équipée, fibre éligible. Prévoir rafraîchissement peinture. <br>
</p>
</div>
    
  </div>
    <script src="../js/pdfFromHTML.js"></script>
    <script src="../js/jquery-2.1.3.js"></script>
    <script src="../js/jspdf.js"></script>
</body>
</html>