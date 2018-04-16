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
