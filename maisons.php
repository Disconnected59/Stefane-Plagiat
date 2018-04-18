<!DOCTYPE html>
<?php
session_start();
 include_once 'FonctionsPhp/fonctionsBackOffice.php';
 include_once 'FonctionsPhp/fonctionsFrontOffice.php';
 $PDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
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
                if(isset($_POST['login'])){
                    $login=$_POST['login'];
                    $mdp=$_POST['mdp'];
                    $verif= verifUtil($objetPDO, $login, $mdp);
                    if($verif==true){
                        $_SESSION['login']=$login;
                    }
                    else{
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
     
                        <br/><br/><br/>
			<form method="post" action="#">
			     <div class="recherche">
			         <div>
                                     Type de produit:
                                     <?php
                                     echo("<div><input type='radio' name='Type' value='tous' id='tousType' checked/> <label for='tousType'>Tous</label></div>");
                                     $Type = getTypeBien($PDO);
                                     foreach ($Type as $value) {
                                         echo("<div><input type='radio' name='Type' value=".$value['libelle']." id=".$value['libelle']." /> <label for=".$value['libelle'].">".$value['libelle']."</label></div>");
                                     }
                                     ?>
			         </div>
                                 <div class="marge">
                                     Jardin:
                                     <div><input type="radio" name="Jardin" value="tous" id="tousJardin" checked/> <label for="tousJardin">Tous</label></div>
                                     <div><input type="radio" name="Jardin" value="Oui" id="oui" /> <label for="oui">Oui</label></div>
                                     <div><input type="radio" name="Jardin" value="Non" id="non" /> <label for="non">Non</label></div>
			         </div>
                                 <div class="marge">
                                     Nombre de pièces:
                                     <?php
                                     echo("<div><input type='radio' name='Piece' value='tous' id='tousType' checked/> <label for='tousType'>Tous</label></div>");
                                     $piece = getPiece($PDO);
                                     foreach ($piece as $value) {
                                         echo("<div><input type='radio' name='Piece' value=".$value['piece']." id=".$value['piece']." /> <label for=".$value['piece'].">".($value['piece']-10)." à ".$value['piece']."</label></div>");
                                     }
                                     echo("<div><input type='radio' name='Piece' value=".($value['piece']+1)." id=".($value['piece']+1)." /> <label for=".$value['piece'].">".($value['piece']+1)." et plus</label></div>");
                                     ?>
			         </div>
                                 <div class="marge">
                                     Surface:
                                     <?php
                                     echo("<div><input type='radio' name='surface' value='tous' id='tousType' checked/> <label for='tousType'>Tous</label></div>");
                                     $surface = getSurface($PDO);
                                     foreach ($surface as $value) {
                                         echo("<div><input type='radio' name='surface' value=".$value['surface']." id=".$value['surface']." /> <label for=".$value['surface'].">".($value['surface']-200)." à ".$value['surface']."</label></div>");
                                     }
                                     echo("<div><input type='radio' name='surface' value=".($value['surface']+1)." id=".($value['surface']+1)." /> <label for=".$value['surface'].">".($value['surface']+1)." et plus</label></div>");
                                     ?>
                                     
			         </div>
                                 <div class="marge">
                                     Prix (en €):
                                     <?php
                                     echo("<div><input type='radio' name='prix' value='tous' id='tousType' checked/> <label for='tousType'>Tous</label></div>");
                                     $prix = getPrix($PDO);
                                     foreach ($prix as $value) {
                                         echo("<div><input type='radio' name='prix' value=".$value['prix']." id=".$value['prix']." /> <label for=".$value['prix'].">".($value['prix']-200000)." à ".$value['prix']."</label></div>");
                                     }
                                     echo("<div><input type='radio' name='prix' value=".($value['prix']+1)." id=".($value['prix']+1)." /> <label for=".$value['prix'].">".($value['prix']+1)." et plus</label></div>");
                                     ?>
			         </div>
                                 <div class="marge">
                                     location:<br/>
                                     <select name="location">
                                         <?php
                                         $ville = getVille($PDO);
                                         var_dump($ville);
                                         echo "<option value='tous'>Tous</option>";
                                         foreach ($ville as $value) {
                                             echo "<option value='".$value['ville']."'>".$value['ville']."</option>";
                                         }
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
