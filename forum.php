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
      <h1>Forum</h1>
		  <div class="contoursmaison">
		  <p><br>
			 Liens vers les differents Forums etudiés lors de la mission :<br>
			 <a href="https://openclassrooms.com">-Openclasseroom</a><br>
			 <a href="https://www.w3schools.com">-W3Schools</a>
		  </p>
		  </div>
	</body>
        
</html>
