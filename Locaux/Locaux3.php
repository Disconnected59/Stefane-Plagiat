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
			</nav><br/><br/>
	<h1> Local Galerie d’Art au Cœur de Saint Germain </h1>
	<div class="slider">
          <input type="radio" name="slide_switch" id="id1"/>
          <label for="id1">
            <img src="../pictures/imageSlider/sliderlocaux/sliderlocal3/image1local3.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderlocaux/sliderlocal3/image1local3.jpg"/>
          
          <input type="radio" name="slide_switch" id="id2" checked="checked"/>
          <label for="id2">
            <img src="../pictures/imageSlider/sliderlocaux/sliderlocal3/image2local3.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderlocaux/sliderlocal3/image2local3.jpg"/>
          
          <input type="radio" name="slide_switch" id="id3"/>
          <label for="id3">
            <img src="../pictures/imageSlider/sliderlocaux/sliderlocal3/image3local3.jpg" width="100"/>
          </label>
          <img src="../pictures/imageSlider/sliderlocaux/sliderlocal3/image3local3.jpg"/>
  		    <label><a href="#" onclick="HTMLtoPDF()"><img src="http://pdf-ace.com/images/buttons/save-as-pdf-3.gif" width="120" height="27" alt="Save as PDF" /></a>
          </label>
    </div>
  <div id="HTMLtoPDF">       
	<h2> Descriptif de ce local </h2>
	<p> Ce local, bla bla bla bla bla bla bla bla bla bla </p>
	</div>
  	<script src="../js/pdfFromHTML.js"></script>
    <script src="../js/jquery-2.1.3.js"></script>
  	<script src="../js/jspdf.js"></script>
	</body>
</html>