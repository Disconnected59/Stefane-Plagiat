<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="index.css">
        <title></title>
    </head>
    <body>
        <?php
         include_once 'FonctionsPhp/fonctionsBackOffice.php';
          if(isset($_SESSION['login']))
        {
        include_once'/include/adminConnecte.inc';
        }
         include_once '/include/menuEtImage.inc';
        $PDO=new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
        
        ?>  
        <fieldset class='contenu'>
        <form method='post' action='ajouterUtilisateur.php'>
            <label for='login'>Login : </label>
            <input type='text' name='login' id='login'>
            <br/>
            <label for='mdp'> Mot de passe : </label>
            <input type='password' name='mdp' id='mdp'>
            <br/>
            <input type='submit' value='Valider'>
        </form>
        </fieldset>
        <?php   

        if(isset($_POST['login']))
        {
            $verifExecution=ajouterUser($PDO, $_POST['login'], $_POST['mdp']);
            if($verifExecution==true)
            {
                echo 'Vous avez ajouté un administrateur avec succès';
                
            }
            else
            {
                echo 'erreur, vous n\'avez pas ajouté avec succès';
            }
            
            
            
            
        }
        
        ?>
    </body>
    
</html>
