<!DOCTYPE html>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Stefane Plagiat</title>
			<link rel="stylesheet" type="text/css" href="index.css">
			<script type="text/javascript" src="menu.js"></script>

	</head>
	<body>
              <fieldset id="connexion">
            <form method="post" id="connexion">
                <label for="login">Identifiant:</label>
                <input type="text" id="login" name="id">
                <br/>
                <br/>
                <label for="motdepasse">Mot de passe :<label>
                <input type="text" id="motdepasse" name="mdp">
                
           </form> 
            </fieldset>    
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
			</nav><br/><br/>
			<div class="titre">
			<h1> Locaux commercial a Louer : </h1>
			</div>
	
			<div class="contoursmaison">
			<h2> Local LE SEDAF </h2>					
			<p> <img src="pictures/Locaux/locaux1.jpg" alt="Image du premier Local">
			  local a louer - 162m² - 310€/m²/an </p>
			<div align="right">
			<a href="Locaux/Locaux1.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			
			<div class="contoursmaison">
			<h2> Local Show Room type loft </h2>
			<p> <img src="pictures/Locaux/locaux2.jpg"alt="Image du second Local"><br>
			 local a louer - 400m² - 600€/m²/an </p>
			 <div align="right">
			<a href="Locaux/Locaux2.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			 
			 <div class="contoursmaison">
			 <h2> Local Galerie d’Art au Cœur de Saint Germain </h2>
			<p> <img src="pictures/Locaux/locaux3.jpg"alt="Image du troisieme local">
			 local a louer - 90m² - 1000€/m²/an </p>
			<div align="right">
			<a href="Locaux/Locaux3.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>		
</body>		

</html>
<?php
 
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','')

?>
