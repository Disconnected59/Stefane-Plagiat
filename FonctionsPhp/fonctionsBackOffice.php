<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function verifUtil($objPDO, $login, $mdp)
{
    $utilisateur=false;
    $statement=$objPDO->prepare("SELECT id, mdp FROM utilisateur WHERE"
            ." id=:login AND mdp=:mdp");
    
    $affecteValeur= $statement->bindValue(':login',$login);
    $affecteValeur= $statement->bindValue(':mdp',$mdp);

    $execution=$statement->execute();
    $resultat=$statement->fetch();
    
    $idRecup=$resultat['id'];
    $mdpRecup=$resultat['mdp'];
    
    if($idRecup==$login && $mdpRecup==$mdp)       
    {
       $utilisateur=true;     
    }
    
     
    return $utilisateur;
}

