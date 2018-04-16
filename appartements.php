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
			
            <?php 
              include_once'/include/menuEtImage.inc';
            ?>
			
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
        


    
      


			