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
			<h2> Appartement Levallois-Perret </h2>
				<div class="slider">
        <input type="radio" name="slide_switch" id="id1"/>
        <label for="id1">
          <img src="../pictures/imageSlider/sliderappart/sliderappart4/appartement4.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart4/appartement4.jpg"/>
        
        <input type="radio" name="slide_switch" id="id2" checked="checked"/>
        <label for="id2">
          <img src="../pictures/imageSlider/sliderappart/sliderappart4/appart4photo2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart4/appart4photo2.jpg"/>
        
        <input type="radio" name="slide_switch" id="id3"/>
        <label for="id3">
          <img src="../pictures/imageSlider/sliderappart/sliderappart4/appart4photo3.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart4/appart4photo3.jpg"/>
		 <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
      </div>
				Vente appartement 2 pièces 50 m² Levallois-Perret   </p>
				<p class="prix"> 265 000 €  </p>
				<p> Copropriété les Hespérides à Levallois, 80 % de Séniors de plus de 60 ans.<br>
        Un appartement refait à neuf de 50,11&nbsp;m² carrez, au 5ème étage avec ascenseur et balcon de 8&nbsp;m². <br>
        <br>
        Immeuble de 1993, très sécurisé, gardiens 24h/24h, restauration de qualité au restaurant de l'immeuble où servie dans les appartements.<br>
        Charges mensuelles de 1 020&nbsp;€ comprenant le personnel (gardien, restaurant,entretien de l'immeuble), chauffage des parties communes, eau froide et chaude. <br>
        Bel Immeuble de 1993, très sécurisé, gardiens 24h/24h, restauration de qualité proposée à prix coûtant, au restaurant de l'immeuble où en room service dans les appartements.<br>
        <br>
        L'appartement est climatisé avec 2 télécommandes. Il comprends&nbsp;: une entrée, wc séparés avec buanderie machines à laver le linge et sèche-linge, un séjour de 24m², 
        une cuisine séparée équipée, une chambre de 15&nbsp;m² avec sa salle de douche et un second wc. Nombreux rangements.Cave. </p>
        </div>

      </div>
    <script src="../js/pdfFromHTML.js"></script>
    <script src="../js/jquery-2.1.3.js"></script>
    <script src="../js/jspdf.js"></script>
</body>
</html>