<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Stefane Plagiat</title>
    </head>
    <body>


        <?php
        include_once'/include/menuEtImage.inc';
        include_once 'FonctionsPhp/fonctionsBackOffice.php';
        $objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');

        if(isset($_POST['numeroBien']))
        {
            $numero=$_POST['numeroBien'];
            $lien=$_POST['lienImage'];
            $verifAjou= ajouterImage($objetPDO, $numero, $lien);
           if ($verifAjou==true)
           {
               echo 'L\'image a été ajoutée';

           }
           else
           {
               echo 'Erreur, l\'image n\'a pas été ajoutée';
           }
        }

        ?>
        <br/>
        <a href="gererLesBiens.php">Retour au menu pour gérer les biens</a>
    </body>
</html>
