<!DOCTYPE html>
<?php
session_start();
 include_once 'FonctionsPhp/fonctionsBackOffice.php';
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
?>
	<head>
			<meta charset="UTF-8"/>
			<title>Appartements à vendre : </title>
				<link rel="stylesheet" type="text/css" href="index.css">
			<script type="text/javascript" src="menu.js"></script>
			
	</head>
	<body>
              <fieldset id="connexion">
                  <form method="post" id="connexion" action="appartements.php">
                <label for="login">Identifiant:</label>
                <input type="text" id="login" name="login">
                <br/>
                <br/>
                <label for="motdepasse">Mot de passe :<label>
                <input type="password" id="motdepasse" name="mdp">
                <br/>
                
                <?php
include_once 'FonctionsPhp/fonctionsBackOffice.php';
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');

if(isset($_POST['login']))
{
  $login=$_POST['login'];
  $mdp=$_POST['mdp'];
  
 $verif= verifUtil($objetPDO, $login, $mdp);
 var_dump($verif);
    
 
 
}    
    

?>
            <input type="submit" value="Se connecter">
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
			</nav>
			
			
			<br/>
			<br/><br/>
			<div class="titre">
			<h1> Appartements disponibles en vente  </h1>
			</div>
			<div class="contoursmaison">
				<h2> Appartement Leers </h2>
				
				<p> <img src="pictures/appartement1.jpg"alt="Image du premier appartement">
				 Appartement 2 Pièces 44,83 m2  </p>
				<p class="prix"> à partir de 156 000 €  </p>
			<div align="right">
			<a href="appartements/appartement1.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div>
			</div>
			
			<div class="contoursmaison">
			<h2> Appartement Saint-Maur-Des-Fosses </h2>
				<p> <img src="pictures/appartement2.jpg"alt="Image du premier appartement">
				Vente appartement 2 pièces 40 m² Saint-Maur-Des-Fosses (94)  </p>
				<p class="prix"> à partir de 156 000 €  </p>
				<div align="right">
			<a href="appartements/appartement2.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div> 
			</div>
		
		<div class="contoursmaison">
			<h2> Appartement Saint-Maur-Des-Fosses </h2>
				<p> <img src="pictures/appartement3.jpg"alt="Image du premier appartement">
				Vente appartement 3 pièces 51 m² Nice  </p>
				<p class="prix"> 165 000 €  </p>
				<div align="right">
			<a href="appartements/appartement3.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div> 
			</div>
			
		<div class="contoursmaison">
			<h2> Appartement Levallois-Perret </h2>
				<p> <img src="pictures/appartement4.jpg"alt="Image du premier appartement">
				Vente appartement 2 pièces 50 m² Levallois-Perret (92300)  </p>
				<p class="prix"> 265 000 €  </p>
				<div align="right">
			<a href="appartements/appartement4.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div> 
			</div>











			<div class="contoursmaison">
			<h2> Appartement à Paris </h2>
				<p> <img src="pictures/appartement5.jpg"alt="Image du cinquieme appartement">
				charmant loft de 2 pièces au dernier étage avec ascenseur 36m²  </p>
				<p class="prix"> Louer à partir de 1 400 €  </p>
				<div align="right">
			<a href="appartements/appartement5.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div> 
			</div>
		
			<div class="contoursmaison">
				<h2> Appartement à Galande </h2>
				<p> <img src="pictures/appartement6.jpg"alt="Image du sixieme appartement">
				Appartement T1 Bis de 31,55 m² LC non meublé situé au 4ème étage d'un immeuble sécurisé de 1600 </p>
				<p class="prix"> Louer à partir de 1 200 €  </p>	
				<div align="right">
			<a href="appartements/appartement6.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div> 
			</div>
			
			<div class="contoursmaison">
				<h2> Appartement à Muette </h2>
				<p> <img src="pictures/appartement7.jpg"alt="Image du septieme appartement">
				charmant loft de 2 pièces au dernier étage avec ascenseur 36m² </p>
				<p class="prix"> Louer à partir de 1 400 €  </p>
				<div align="right">
			<a href="appartements/appartement7.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG"alt="voir le détail"/></a>
			</div> 
			</div>
        </body>               
</html>                       
        


         
        
      


			