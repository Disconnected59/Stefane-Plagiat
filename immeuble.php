<!DOCTYPE html>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Stefane Plagiat</title>
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
	<div class="titre">
	<h1> Immeubles en vente </h1>
	</div>
			<div class="contoursmaison">
			<h2> Vente immeuble Le Bourget (93350) </h2>					
			
			<p> <img src="http://upload.dinhosting.fr/J/y/3/immeuble1.jpg" alt="Image du premier immeuble">
			  10 appartements, 5 garages dans 2 immeubles sur terrain 848 m²</p>
			<p class="prix"> 1.400.000€ </p>
			  
			<div align="right">
			<a href="Immeubles/Immeuble1.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			
			</div>
			

			<div class="contoursmaison">
				
			<h2> Vente immeuble Portugal </h2>

			<p> <img src="http://upload.dinhosting.fr/v/T/o/Immeuble2.jpg"alt="Image du second terrain nu">
			 Residence de Luxe 820m² </p>
			 <p> 990 000€ </p>
			<div align="right">
			<a href="Immeubles/Immeuble2.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			</div>
			
			
       </body>
</html>	

<?php
 
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','')

?>
