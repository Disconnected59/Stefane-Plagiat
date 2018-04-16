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
     <br/><br/>
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
