<?php

function donneVilleParNombreRecherche($PDO)
{
    $PDO = $PDO->prepare("SELECT distinct ville, count(ville) as cVille FROM stats group by ville");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
    
    
}

function donnePrixParNombreRecherche($PDO)
{
    $PDO = $PDO->prepare("SELECT distinct prix, count(prix) as cPrix FROM stats group by prix");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
    
    
}

function donneSurfaceParNombreRecherche($PDO)
{
    $PDO = $PDO->prepare("SELECT distinct surface, count(surface) as cSurface FROM stats group by surface");
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
    
    
}


?>