<!DOCTYPE html>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Liens</title>
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
                 		 <a href="index.html">accueil</a>
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
			</nav>
      <div class="titre">
	  <h1>Liens</h1>
	  </div>
		  <div class="contoursmaison">
		  <p><br>
			 Liens vers les differents acolyte de la mission :<br>
			 <a href="https://github.com/Disconnected59/Stefane-Plagiat">-Nous</a><br>
			 <a href="#">-peut-etre quelqu'un</a>
		  </p>
		  </div>
	</body>
</html>
<?php
 
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','')

?>
