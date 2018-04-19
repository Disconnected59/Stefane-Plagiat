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
                    $verif= verifUtil($PDO, $login, $mdp);
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
                                     <div><input type="radio" name="Jardin" value="oui" id="oui" /> <label for="oui">Oui</label></div>
                                     <div><input type="radio" name="Jardin" value="non" id="non" /> <label for="non">Non</label></div>
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
			<?php
                        $mesMaisons=getInfosMaisons($PDO);
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
