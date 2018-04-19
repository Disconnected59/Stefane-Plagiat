<?php

function getInfosMaison ($monPdo,$numMaison){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=1 and numero='".$numMaison."'");
    $executionOk = $monObjPdoStatement->execute();
    $laMaison = $monObjPdoStatement->fetch();
    $monObjPdoStatement-> closeCursor();
    return $laMaison;
}

function getInfos($monPdo,$id){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where numero='".$id."'");
    $executionOk = $monObjPdoStatement->execute();
    $laMaison = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $laMaison;
}

function getInfosMaisons($monPdo){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=1");
    $executionOk = $monObjPdoStatement->execute();
    $lesMaisons = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $lesMaisons;
}

function getInfosAppart ($monPdo,$numAppart){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=2 and numero='".$numAppart."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesApparts = $monObjPdoStatement->fetch();
    $monObjPdoStatement-> closeCursor();
    return $lesAppart;
}

function getInfosApparts ($monPdo){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=2");
    $executionOk = $monObjPdoStatement->execute();
    $lesAppart = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $lesAppart;
}



function getInfosLocal ($monPdo,$numLocaux){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=3 and numero='".$numLocaux."'");
    $executionOk = $monObjPdoStatement->execute();
    $leLocal = $monObjPdoStatement->fetch();
    $monObjPdoStatement-> closeCursor();
    return $leLocal;
}

function getInfosLocaux ($monPdo){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=3");
    $executionOk = $monObjPdoStatement->execute();
    $lesLocaux = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $lesLocaux;
}

function getInfosImmeuble ($monPdo,$numImmeuble){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=4 and numero='".$numImmeuble."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesImmeubles = $monObjPdoStatement->fetch();
    $monObjPdoStatement-> closeCursor();
    return $lesImmeubles;
}
    

    function getInfosImmeubles ($monPdo){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=4");
    $executionOk = $monObjPdoStatement->execute();
    $lesImmeubles = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $lesImmeubles;
    
}


function getInfosTerrain ($monPdo,$numTerrain){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=5 and numero='".$numTerrain."'");
    $executionOk = $monObjPdoStatement->execute();
    $leTerrain = $monObjPdoStatement->fetch();
    $monObjPdoStatement-> closeCursor();
    return $leTerrain;
}

function getInfosTerrains ($monPdo){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=5");
    $executionOk = $monObjPdoStatement->execute();
    $lesTerrains = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $lesTerrains;
}

function getTypeBien($PDO){
    $PDO = $PDO->prepare("SELECT libelle FROM typebien");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
}
function getVille($PDO){
    $PDO = $PDO->prepare("SELECT DISTINCT ville FROM biens ORDER BY 1");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
}
function getPiece($PDO){
    $PDO = $PDO->prepare("SELECT piece FROM critere");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
}
function getSurface($PDO){
    $PDO = $PDO->prepare("SELECT surface FROM critere");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
}
function getPrix($PDO){
    $PDO = $PDO->prepare("SELECT prix FROM critere");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
}
function selectionBien($PDO,$type,$jardin,$piece,$surface,$prix,$loc){
    $eType = " = ";
    $eJardin = " = ";
    $ePiece = ($piece - 10);
    $eSurface = ($surface - 200);
    $ePrix = ($prix - 200000);
    $eLoc = " = ";
    if ($type == "tous"){
        $type = 0;
        $eType = " <> ";
    }
    if ($jardin == "tous"){
        $jardin = 'rien';
        $eJardin = " <> ";
    }
    if ($loc == "tous"){
        $loc = 'rien';
        $eLoc = " <> ";
    }
    if ($piece == "tous"){
        $piece = 99999999999999;
        $ePiece = 0;
    }
    if ($surface == "tous"){
        $surface = 99999999999999;
        $eSurface = 0;
    }
    if ($prix == "tous"){
        $prix = 99999999999999;
        $ePrix = 0;
    }
    $string = ("SELECT * FROM biens WHERE type".$eType.":type AND jardin".$eJardin.":jardin AND ville".$eLoc.":ville AND nbPieces BETWEEN :ePiece AND :piece AND surface BETWEEN :eSurface AND :surface AND prix BETWEEN :ePrix AND :prix");
    $PDO = $PDO->prepare($string);
    $Test0 = $PDO->bindValue(':type',$type);
    $Test1 = $PDO->bindValue(':jardin',$jardin);
    $Test2 = $PDO->bindValue(':ville',$loc);
    $Test3 = $PDO->bindValue(':ePiece',$ePiece);
    $Test4 = $PDO->bindValue(':piece',$piece);
    $Test5 = $PDO->bindValue(':eSurface',$eSurface);
    $Test6 = $PDO->bindValue(':surface',$surface);
    $Test7 = $PDO->bindValue(':ePrix',$ePrix);
    $Test8 = $PDO->bindValue(':prix',$prix);
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
}