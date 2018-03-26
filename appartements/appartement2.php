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
                 		 <a href="../index.php">accueil</a>
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
		
			</div>
			<div class="contoursmaison">
				<h2> Appartement Saint-Maur-Des-Fosses </h2>
				<div class="slider">
        <input type="radio" name="slide_switch" id="id1"/>
        <label for="id1">
          <img src="../pictures/imageSlider/sliderappart/sliderappart2/appartement2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart2/appartement2.jpg"/>
        
        <input type="radio" name="slide_switch" id="id2" checked="checked"/>
        <label for="id2">
          <img src="../pictures/imageSlider/sliderappart/sliderappart2/appart2photo2.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart2/appart2photo2.jpg"/>
        
        <input type="radio" name="slide_switch" id="id3"/>
        <label for="id3">
          <img src="../pictures/imageSlider/sliderappart/sliderappart2/appart2photo3.jpg" width="100"/>
        </label>
        <img src="../pictures/imageSlider/sliderappart/sliderappart2/appart2photo3.jpg"/>
		 <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
      </div>
				Vente appartement 2 pièces 40 m² Saint-Maur-Des-Fosses (94)  </p>
				<p class="prix"> à partir de 156 000 €  </p>
				
			<p>	Appartement de 40m², à 5 mn du RER A, 20 mn des Halles, <br>
proximité tous commerces, clair, calme. <br>
<br>
Dans petit immeuble de deux étages, donnant sur cour,sans vis-à-vis, 1er étage. <br>
<br>
Refait à neuf, bien isolé, salon cuisine équipée (plaque à induction, frigidaire -congélateur,lave vaisselle,placards) 1 chambre, salle de bains. <br>
<br>
Visites prévues sur rendez-vous le 17 février 2018 toute la journée.	</p>	

			</div>

    </div>
    <script src="../js/pdfFromHTML.js"></script>
    <script src="../js/jquery-2.1.3.js"></script>
    <script src="../js/jspdf.js"></script>
			</body>
      </html>