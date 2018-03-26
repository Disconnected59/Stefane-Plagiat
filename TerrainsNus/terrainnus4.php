<!DOCTYPE html>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Stefane Plagiat</title>
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
				
				 <div class="contoursmaison">
			 
			
			<div class="slider">
          <input type="radio" name="slide_switch" id="id1"/>
          <label for="id1">
            <img src="../pictures/imageSlider/sliderterrain/sliderterrain4/image1terrain4.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderterrain/sliderterrain4/image1terrain4.jpg"/>
          
          <input type="radio" name="slide_switch" id="id2" checked="checked"/>
          <label for="id2">
            <img src="../pictures/imageSlider/sliderterrain/sliderterrain4/image2terrain4.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderterrain/sliderterrain4/image2terrain4.jpg"/>
          
          <input type="radio" name="slide_switch" id="id3"/>
          <label for="id3">
            <img src="../pictures/imageSlider/sliderterrain/sliderterrain4/image3terrain4.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderterrain/sliderterrain4/image3terrain4.jpg"/>
  		    <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
          </label>
          
      </div>
			<div id="HTMLtoPDF">
			<h2> Terrain 686 m² </h2>
			<p>terrain 686 m² L'ile-D'yeu (85350) </p>
			 <p class="prix"> 152 258 € </p>
			</div>
			</div>		

  	<script src="../js/pdfFromHTML.js"></script>
    <script src="../js/jquery-2.1.3.js"></script>
  	<script src="../js/jspdf.js"></script>
				</body>
				</html>
				