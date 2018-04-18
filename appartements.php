<!DOCTYPE html>
<?php
session_start();
 include_once 'FonctionsPhp/fonctionsBackOffice.php';
 include_once 'FonctionsPhp/fonctionsFrontOffice.php';
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
				<?php
                        $mesMaisons=getInfosApparts($objetPDO);
                        foreach ($mesMaisons as $maMaison){
                        echo '<div class="contoursmaison">';
				echo "<h2>".$maMaison['titre']."</h2>";
				echo '<p> <img src="'.$maMaison['image'].'" width="300" height="auto" alt="Image de la maison">';
				echo $maMaison['description']." </p>";
                        echo '<p class="prix"> '.$maMaison['prix'].'€ </p>';
			echo '<div align="right">';
			echo '<a href="maison1.php?id='.$maMaison['numero'].'"><img src="http://upload.dinhosting.fr/x/6/p/voirledetail.PNG" alt="voir le détail"/></a>';
			echo '</div>';
                        
			echo '</div>';
                        }
                        ?>
			
			
        </body>               
</html>                       
        


    
      


			