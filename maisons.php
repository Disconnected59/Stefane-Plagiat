<!DOCTYPE html>
<?php
session_start();
 include_once 'FonctionsPhp/fonctionsBackOffice.php';
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
?>
<html lang="fr">
	<head>
			<meta charset="UTF-8" />
			<title>Stefane Plagiat</title>
			<link rel="stylesheet" type="text/css" href="index.css">
			<script type="text/javascript" src="menu.js"></script>

	</head>
	<body>
               <fieldset id="connexion">
                   <?php
include_once 'FonctionsPhp/fonctionsBackOffice.php';
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');

if(isset($_POST['login']))
{
  $login=$_POST['login'];
  $mdp=$_POST['mdp'];
  
 $verif= verifUtil($objetPDO, $login, $mdp);
 if($verif==true)
 { 
     $_SESSION['login']=$login;
     
 }
 else
 {
     echo 'Erreur, mot de passe ou login incorrect';
     
 }
}
if(isset($_SESSION['login']))
{
     include_once '/include/adminConnecte.inc';
}
else
{
?>
                <form method="post" id="connexion" action="#">
                <label for="login">Identifiant:</label>
                <input type="text" id="login" name="login">
                <br/>
                <br/>
                <label for="motdepasse">Mot de passe :<label>
                <input type="password" id="motdepasse" name="mdp">
                <br/>
                
               
            <input type="submit" value="Se connecter">
            </form> 
<?php
}
?>
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
			</nav><!prix et location>
                        <br/><br/><br/>
			<form method="post" action="Recherche.php">
			     <div class="recherche">
			         <div>
                                     Type de produit:
                                     <div><input type="radio" name="Type" value="tous" id="tousType" checked/> <label for="tousType">Tous</label></div>
                                     <div><input type="radio" name="Type" value="Maison" id="maison" /> <label for="maison">Maisons</label></div>
                                     <div><input type="radio" name="Type" value="Appartement" id="app" /> <label for="app">Appartement</label></div>
                                     <div><input type="radio" name="Type" value="Immeuble" id="immeuble" /> <label for="immeuble">Immeuble</label></div>
                                     <div><input type="radio" name="Type" value="Locaux" id="locaux" /> <label for="locaux">Locaux</label></div>
                                     <div><input type="radio" name="Type" value="Terrain" id="nus" /> <label for="nus">Terrain nus</label></div>
			         </div>
                                 <div class="marge">
                                     Jardin:
                                     <div><input type="radio" name="Jardin" value="tous" id="tousJardin" checked/> <label for="tousJardin">Tous</label></div>
                                     <div><input type="radio" name="Jardin" value="Oui" id="oui" /> <label for="oui">Oui</label></div>
                                     <div><input type="radio" name="Jardin" value="Non" id="non" /> <label for="non">Non</label></div>
			         </div>
                                 <div class="marge">
                                     Nombre de pièces:
                                     <div><input type="radio" name="Piece" value="tous" id="tousPiece" checked/> <label for="tousPiece">Tous</label></div>
                                     <div><input type="radio" name="Piece" value="0-10" id="10" /> <label for="10">0 à 10</label></div>
                                     <div><input type="radio" name="Piece" value="11-20" id="20" /> <label for="20">11 à 20</label></div>
                                     <div><input type="radio" name="Piece" value="21-30" id="30" /> <label for="30">21 à 30</label></div>
                                     <div><input type="radio" name="Piece" value="31" id="31" /> <label for="31">31 et plus</label></div>
			         </div>
                                 <div class="marge">
                                     Surface:
                                     <div><input type="radio" name="surface" value="tous" id="tousSurface" checked/> <label for="tousSurface">Tous</label></div>
                                     <div><input type="radio" name="surface" value="0-100" id="100" /> <label for="100">0 à 100</label></div>
                                     <div><input type="radio" name="surface" value="101-300" id="300" /> <label for="300">101 à 300</label></div>
                                     <div><input type="radio" name="surface" value="301-999" id="999" /> <label for="999">301 à 999</label></div>
                                     <div><input type="radio" name="surface" value="1001" id="1000" /> <label for="1000">1000 ou plus</label></div>
			         </div>
                                 <div class="marge">
                                     Prix:
                                     <div><input type="radio" name="prix" value="tous" id="tousPrix" checked/> <label for="tousPrix">Tous</label></div>
                                     <div><input type="radio" name="prix" value="0-100" id="1000" /> <label for="1000">0 à 100,000</label></div>
                                     <div><input type="radio" name="prix" value="101-300" id="4000" /> <label for="4000">100,001 à 400,000</label></div>
                                     <div><input type="radio" name="prix" value="301-999" id="9999" /> <label for="9999">400,001 à 999,999</label></div>
                                     <div><input type="radio" name="prix" value="1001" id="10000" /> <label for="10000">1,000,000 ou plus</label></div>
			         </div>
                                 <div class="marge">
                                     location:<br/>
                                     <select name="location">
                                         <?php
                                         echo "<option value='".d."'>".d."</option>";
                                         ?>
                                     </select>
                                 </div>
                                 <div class="marge">
                                     <input type="submit" value="Rechercher"/>
                                     <input type="reset" value="mise à zero"/>
                                 </div>
			   </div>
			</form>
			<br/>
			<br/><br/>
			<div class="titre">
			<h1> Maisons disponibles en vente </h1>
			</div>
			<div class="contoursmaison">
				<h2> Maison d'architecte originale </h2>
				<p> <img src="http://upload.dinhosting.fr/l/b/J/maison1.jpg" alt="Image de la première maison">
				Maison plein pied - 10 pièces - 215m² </p>
				<p class="prix"> 800 000€ </p>
			<div align="right">
			<a href="Maisons/maison1.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			
			<div class="contoursmaison">
			<h2> Maison à vendre Flers </h2>
			<p> <img src="http://upload.dinhosting.fr/X/l/L/maison2.jpg" alt="Image de la seconde maison"><br>
			 Maison deux étages - 8 pièces - 128m²</p>    
			 <p class="prix">148 240€ </p>
			 <div align="right">
			<a href="Maisons/maison2.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			 
			<div class="contoursmaison">
			 <h2> Maison à vendre Audierne </h2>
			<p> <img src="http://upload.dinhosting.fr/0/O/c/maison3.jpg" alt="Image de la troisieme maison">
			 Maison deux étages et cave - 6 pièces - 118m² </p>
			 <p class="prix"> 415 360 € </p>
			 <div align="right">
			<a href="Maisons/maison3.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			 
			 <div class="contoursmaison">
			<h2> Maison à vendre Bignou </h2>
			<p> <img src="http://upload.dinhosting.fr/u/h/r/maison4.jpg" alt="Image de la quatrième maison">
			 Maison deux étages avec grenier - 9 pièces - 157m² </p>
			 <p class="prix"> 352 820 € </p>
			 <div align="right">
			<a href="Maisons/maison4.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			</div>
			
			<div class="contoursmaison">		
			<h2> Maison à vendre Pornichet </h2>
			<p> <img src="http://upload.dinhosting.fr/J/j/f/maison5.jpg" alt="Image de la cinquième maison">
			 Maison deux étages - 8 pièces - 146m² </p>
			 <p class="prix"> 353 600€ </p>
			 <div align="right">
			<a href="Maisons/maison5.php"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>
			</div>
			 </div>
			
	</body>
</html>
<?php
 include_once 'FonctionsPhp/fonctionsBackOffice.php';
$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');

if(isset($_POST['login']))
{
  $login=$_POST['login'];
  $mdp=$_POST['motdepasse'];
  
 $verif= verifUtil($objetPDO, $login, $mdp);
 if ($verif==true)
 {
     
 }
          
          
          
}

      
?>
