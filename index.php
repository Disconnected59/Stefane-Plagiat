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
			</nav><br/><br/><br/>

      

			<div class="contoursmaison">
			<p>
				  Bienvenue dans notre site immobiler Stefane-Plagiat:
				  
          Ouvert du Lundi au Samedi de 9h à 19h.

          Après 20 ans d’expérience auprès de professionnels de l’immobilier, aménageur/lotisseurs et promoteurs, l’agence Nord Immo vous propose de bénéficier de son savoir-faire, son expérience et son réseau afin de vous accompagner dans la vente de votre bien.

          Nous sommes partenaires avec plus de 150 constructeurs régionaux et autres professionnels afin de permettre à nos clients de vendre leur bien dans les meilleures conditions.

          Vous êtes vendeur ? N’hésitez pas à nous contacter ! 

          ESTIMATION GRATUITE</p>
		  </div>
	</body>
</html>

<?php
 
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','')

?>

	
