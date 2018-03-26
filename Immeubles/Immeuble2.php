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
            <div class="contoursmaison">
				
    			<h2> Vente immeuble Portugals </h2>
				
				<div class="slider">
          <input type="radio" name="slide_switch" id="id1"/>
          <label for="id1">
            <img src="../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image1immeuble2.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image1immeuble2.jpg"/>
          
          <input type="radio" name="slide_switch" id="id2" checked="checked"/>
          <label for="id2">
            <img src="../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image2immeuble2.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image2immeuble2.jpg"/>
          
          <input type="radio" name="slide_switch" id="id3"/>
          <label for="id3">
            <img src="../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image3immeuble2.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderimmeuble/sliderimmeuble2/image3immeuble2.jpg"/>
  		    <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
          </label>
          
      </div>

    			<br/>
    			<p>  Residence de Luxe 820m² </p>
    			 <p> 990 000€ </p>
        		<p> Projet pour résidence de luxe pour personnes agées avec capacité de 55 lits + bâtiment 820m² + terrain 20.000&nbsp;m² avec des extraordinaires vues sur la rivière Tejo.<br>
                <br>
                A 30 mn de Fatima, principal centre religieux du Portugal et à un plus d'une heure de Lisbonne. <br>
                <br>
                Les instalations pourront aussi être adaptées au tourisme, maison de retraite ou demeures de charme et bangalows, etc.	</p>	
    			
			</div>
            </div>
            <script src="../js/pdfFromHTML.js"></script>
            <script src="../js/jquery-2.1.3.js"></script>
            <script src="../js/jspdf.js"></script>
    </body>
</html>