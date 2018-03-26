<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function verifUtil($objPDO, $login, $mdp)
{
    $utilisateur=false;
    $statement=$objPDO->prepare("SELECT * FROM utilisateur");
    $execution=$statement->execute();
    $resultat=$statement->fetchAll();
    $statement->closeCursor();
    
    $logVerif=$resultat['id'];
    $mdpVerif=$resultat['Mot de passe'];
    
    if($logVerif==$login && $mdp==$mdpVerif)
    {
      $utilisateur=true ; 
        
    }
    
    return $utilisateur;
}

