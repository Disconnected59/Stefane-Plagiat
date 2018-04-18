<?php

function getInfosMaison ($monPdo,$numMaison){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=1 and numero='".$numMaison."'");
    $executionOk = $monObjPdoStatement->execute();
    $laMaison = $monObjPdoStatement->fetch();
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

function getInfosLocaux ($monPdo,$numLocaux){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=3");
    $executionOk = $monObjPdoStatement->execute();
    $lesLocaux = $monObjPdoStatement->fetchAll();
    $monObjPdoStatement-> closeCursor();
    return $lesLocaux;
}

function getInfosImmeuble ($monPdo,$numImmeuble){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=4 and numero='".$numImmeuble."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesImmeubles = $monObjPdoStatement->fetchall();
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

function getInfosTerrains ($monPdo,$numTerrain){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=5 and numero='".$numTerrain."'");
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
function selectionBien($PDO){
    
}