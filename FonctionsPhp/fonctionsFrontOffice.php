<?php

function getInfosMaison ($monPdo,$numMaison){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=1 and numero='".$numMaison."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesMaisons = $monObjPdoStatement->fetchall();
    $monObjPdoStatement-> closeCursor();
    return $lesMaisons;
}

function getInfosAppart ($monPdo,$numAppart){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=2 and numero='".$numAppart."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesAppart = $monObjPdoStatement->fetchall();
    $monObjPdoStatement-> closeCursor();
    return $lesAppart;
}

function getInfosLocaux ($monPdo,$numLocaux){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=3 and numero='".$numLocaux."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesLocaux = $monObjPdoStatement->fetchall();
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

function getInfosTerrains ($monPdo,$numTerrain){
    $monObjPdoStatement = $monPdo->prepare("SELECT * FROM biens where type=5 and numero='".$numTerrain."'");
    $executionOk = $monObjPdoStatement->execute();
    $lesTerrains = $monObjPdoStatement->fetchall();
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