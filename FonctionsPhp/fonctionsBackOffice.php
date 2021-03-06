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
            ." id=:login");
    
  
    
    $affecteValeur= $statement->bindValue(':login',$login);
  
    $execution=$statement->execute();
    $resultat=$statement->fetch();
    
    $idRecup=$resultat['id'];
    $mdpRecup=$resultat['mdp'];
    $verifMdp= password_verify($mdp, $mdpRecup);
    
    if($verifMdp==true)       
    {
       $utilisateur=true;     
    }
    
     
    return $utilisateur;
}



function ajouterUnBien($objPDO, $adresse, $surface, $jardin, $nbPieces, $prix, $ville, $type, $titre, $description)
{
    $statement=$objPDO->prepare("INSERT INTO biens VALUES(DEFAULT, :adresse, :surface, :jardin, :nbPieces, :prix, :ville, :type, :titre, :description, 'rien')");
    
    $affecteValeur=$statement->bindValue(':adresse',$adresse);
    $affecteValeur=$statement->bindValue(':surface',$surface);
    $affecteValeur=$statement->bindValue(':jardin',$jardin);
    $affecteValeur=$statement->bindValue(':nbPieces',$nbPieces);
    $affecteValeur=$statement->bindValue(':prix',$prix);
    $affecteValeur=$statement->bindValue(':ville',$ville);
    $affecteValeur=$statement->bindValue(':type',$type);
    $affecteValeur=$statement->bindValue(':titre',$titre);
    $affecteValeur=$statement->bindValue(':description',$description);
    
    $verifExecution=$statement->execute(); 
    
    return $verifExecution;  
}

function modifierUnBien($objPDO, $numero ,$adresse, $surface, $jardin, $nbPieces, $prix, $ville, $type, $titre, $description)
{
   $statement=$objPDO->prepare("UPDATE biens SET adresse=:adresse, surface=:surface, jardin=:jardin, nbPieces=:nbPieces, prix=:prix, ville=:ville, type=:type, titre=:titre, description=:description WHERE numero=:numero");
    
    $afftecteValeur=$statement->bindValue(':numero',$numero);
    $affecteValeur=$statement->bindValue(':adresse',$adresse);
    $affecteValeur=$statement->bindValue(':surface',$surface);
    $affecteValeur=$statement->bindValue(':jardin',$jardin);
    $affecteValeur=$statement->bindValue(':nbPieces',$nbPieces);
    $affecteValeur=$statement->bindValue(':prix',$prix);
    $affecteValeur=$statement->bindValue(':ville',$ville);
    $affecteValeur=$statement->bindValue(':type',$type);
    $affecteValeur=$statement->bindValue(':titre',$titre);
    $affecteValeur=$statement->bindValue(':description',$description);
    
    $verifExecution=$statement->execute();  
    $lignesAffectée=$statement->rowCount();
    $verif=false;
    if($lignesAffectée>0)
    {
        $verif=true;
    }
    
    
    return $verif;
}

function supprimerUnBien($objPDO, $numero)
{
    $statement=$objPDO->prepare("DELETE FROM biens WHERE numero= :numero");
    $affecteValeur=$statement->bindValue(':numero',$numero);
    $verifExecution=$statement->execute();       
    $lignesAffectée=$statement->rowCount();
    $verif=false;
    if($lignesAffectée>0)
    {
        $verif=true;
    }
    
    
    return $verif;
}

function recupNumBien($objPDO)
{
    $statement=$objPDO->prepare("SELECT numero FROM biens");
    $statement->execute();
    $resultat=$statement->fetchAll();
    $statement->closeCursor();
    return $resultat;
    
}

function ajouterImage($objPDO, $numero, $lienImage)
{
    $statement=$objPDO->prepare("INSERT INTO images VALUES(:lien, :numero)");
    $affecteValeur=$statement->bindValue(':lien',$lienImage);
    $affecteValeur=$statement->bindValue(':numero',$numero);
    $statement->execute();
    $lignesAffectées=$statement->rowCount();
    $verif=false;
    if($lignesAffectées>0)
    {
        $verif=true;
    }
     return $verif;
}

function ajouterUser($objPDO, $leLogin, $leMDP)
{
    $leMDPhashé = password_hash($leMDP, PASSWORD_DEFAULT);           //Hashage du mot de passe pour la bdd
    $statement=$objPDO->prepare("INSERT INTO utilisateur VALUES"
            ."(:leLogin, :leMDP)"); 
    $affecteValeur= $statement->bindValue(':leLogin',$leLogin);
    $affecteValeur= $statement->bindValue(':leMDP',$leMDPhashé); 
    $verifExecution=$statement->execute();
   
   return $verifExecution;   
}
function recupStats($PDO){
    $PDO = $PDO->prepare("SELECT FROM stats");
    $PDO = $PDO->execute();
    $resultat = $PDO->fetchAll();
    $PDO-> closeCursor();
    return $resultat;
}