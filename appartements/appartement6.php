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
			<div id="HTMLtoPDF">
			<br/>
			<br/><br/>
			<div class="titre">
			<h1> Appartement à Galande  </h1>
			</div>
			<div class="contoursmaison">
				<h2> Appartement à Galande </h2>
				<div class="slider">
        <input type="radio" name="slide_switch" id="id1"/>
        <label for="id1">
          <img src="../pictures/imageSlider/sliderappart/sliderappart6/appartement6.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart6/appartement6.jpg"/>
        
        <input type="radio" name="slide_switch" id="id2" checked="checked"/>
        <label for="id2">
          <img src="../pictures/imageSlider/sliderappart/sliderappart6/appart6photo2.jpeg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart6/appart6photo2.jpeg"/>
        
        <input type="radio" name="slide_switch" id="id3"/>
        <label for="id3">
          <img src="../pictures/imageSlider/sliderappart/sliderappart6/appart6photo3.jpeg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart6/appart6photo3.jpeg"/>
		 <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
      </div>
				Appartement T1 Bis de 31,55 m² LC non meublé situé au 4ème étage d'un immeuble sécurisé de 1600 </p>
				<p class="prix"> Louer à partir de 1 200 €  </p>
				
			<p>	GALANDE - À 2 pas de Notre Dame et au pied des transports et commerces,
			Appartement T1 Bis de 31,55 m² LC non meublé situé au 4ème étage d'un immeuble sécurisé de 1600.<br/>
			Il comprend: entrée avec placards, séjour, cuisine séparée aménagée,<br/>
			espace chambre aménagé dans une alcôve, salle d'eau, WC séparés.<br/>
			Chauffage et eau chaude: individuel électrique. Loyer CC: 1.200€/mois.<br/>
			Dépôt de garantie: 1.150€.<br/>
			Honoraires d'agence à la charge du locataire: 473,25€ TTC <br/>
			(dont 94,65€ TTC pour la réalisation de l'état des lieux d'entrée).</p>	
			</div>

    </div>
    <script src="../js/pdfFromHTML.js"></script>
    <script src="../js/jquery-2.1.3.js"></script>
    <script src="../js/jspdf.js"></script>
    </body>
    </html>