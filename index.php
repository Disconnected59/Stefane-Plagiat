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
                    </fieldset>
                    <?php
                    }
                     include_once'/include/menuEtImage.inc';
                    ?>
                  <br/><br/><br/>

      

			<div class="contoursmaison">
			<p>
				  Bienvenue dans notre site immobiler Stefane-Plagiat:
				  
          Ouvert du Lundi au Samedi de 9h à 19h.

          Après 20 ans d’expérience auprès de professionnels de l’immobilier, aménageur/lotisseurs et promoteurs, l’agence Nord Immo vous propose de bénéficier de son savoir-faire, son expérience et son réseau afin de vous accompagner dans la vente de votre bien.

          Nous sommes partenaires avec plus de 150 constructeurs régionaux et autres professionnels afin de permettre à nos clients de vendre leur bien dans les meilleures conditions.

          Vous êtes vendeur ? N’hésitez pas à nous contacter ! 

          ESTIMATION GRATUITE</p>
		  </div>
	</body>
</html>



	
