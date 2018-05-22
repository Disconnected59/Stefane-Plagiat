<?php

include_once '../FonctionsPhp/fonctionsBackOffice.php';


$objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
$login='quentin';
$mdp='quentin';

var_dump(ajouterUser($objetPDO, $login, $mdp));



?>

