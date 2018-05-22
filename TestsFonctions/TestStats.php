<?php
include_once '../FonctionsPhp/fonctionsStats.php';
$PDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
$prix = donnePrixParNombreRecherche($PDO);
 foreach ($prix as $unPrix){
    var_dump($unPrix);
    echo $unPrix['prix'];
}
