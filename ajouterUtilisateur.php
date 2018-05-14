<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include_once 'FonctionsPhp/fonctionsBackOffice.php';
        $PDO=new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
        $leLogin='admin';
        $leMDP='admin';
        
        var_dump(ajouterUser($PDO,$leLogin,$leMDP));
                
        
        
        
        ?>
    </body>
</html>
