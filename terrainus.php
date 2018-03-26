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
                <br/>
                <input type="submit" name="seconnecter" value="Se connecter">
          
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

	<h1> Terrains nus constructibles en vente </h1>
	
			<div class="contoursmaison">
			<h2> Terrain 500m² Boisemont </h2>					
			<p> <img src="http://upload.dinhosting.fr/G/J/m/terrainu1.jpg" alt="Image du premier terrain nu">
			  terrain 500 m² Boisemont (95000)</p>
			<p class="prix"> 175.000€ </p>
			  
			<div align="right">
			<a href="TerrainsNus/terrainnus1.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			
			</div>
			

			<div class="contoursmaison">
				
			<h2> Terrain 1.000 m² Basses </h2>
			<p> <img src="http://upload.dinhosting.fr/P/1/s/terrain2.jpg"alt="Image du second terrain nu">
			 Vente terrain 1.000 m² Basses (86200) </p>
			 <p> 148 240€ </p>
			<div align="right">
			<a href="TerrainsNus/terrainnus2.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			 
				
			 <div class="contoursmaison">
			 <h2> Terrain 750m² </h2>
			<p> <img src="http://upload.dinhosting.fr/F/L/h/terrainnu3.jpg"alt="Image du troisieme terrain nu">
			Vente terrain 750m² Bignou </p>
			 <p class="prix"> 85 000 € </p>
			 <div align="right">
			<a href="TerrainsNus/terrainnus3.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			 

			  <div>
			   <div class="contoursmaison">
			 <h2> Terrain 686 m² </h2>
			<p> <img src="http://upload.dinhosting.fr/b/A/8/terrainnu4.jpg"alt="Image du quatrième terrain nu">
			 terrain 686 m² L'ile-D'yeu (85350) </p>
			 <p class="prix"> 152 258 € </p>
			 <div align="right">
			<a href="TerrainsNus/terrainnus4.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>		
</body>	
                          </html>
<?php
 
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','')
        
        
?>
                         
