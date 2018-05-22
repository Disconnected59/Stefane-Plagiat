<?php

function donneVilleParNombreRecherche($PDO, $dateDebut, $dateFin)
{
    $PDO = $PDO->prepare("SELECT distinct ville, count(ville) as cVille FROM stats group by ville where dateRecherche between :dateDebut and :dateFin");
    $Test0 = $PDO->bindValue(':dateDebut',$dateDebut);
    $Test1 = $PDO->bindValue(':dateFin',$dateFin);
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
    
    
}

function donnePrixParNombreRecherche($PDO)
{
    $PDO = $PDO->prepare("SELECT distinct prix, count(prix) as cPrix FROM stats group by prix where dateRecherche between ".$dateDebut." and ".$dateFin.";");
    $Test0 = $PDO->bindValue(':dateDebut',$dateDebut);
    $Test1 = $PDO->bindValue(':dateFin',$dateFin);
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
    
    
}

function donneSurfaceParNombreRecherche($PDO)
{
    $PDO = $PDO->prepare("SELECT distinct surface, count(surface) as cSurface FROM stats group by surface where dateRecherche between ".$dateDebut." and ".$dateFin.";");
    $Test0 = $PDO->bindValue(':dateDebut',$dateDebut);
    $Test1 = $PDO->bindValue(':dateFin',$dateFin);
    $resultat = $PDO->execute();
    $resultat = $PDO->fetchall();
    $PDO-> closeCursor();
    return $resultat;
    
    
}


?>