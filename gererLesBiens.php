<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Stefane Plagiat</title>
    </head>
    <body>
        
        <div class='conteneur'>   
        <fieldset id='ajouterBien' class='contenu'>
            <label for='ajouterBien'>Remplissez ce formulaire pour ajouter un produit à la BDD</label>    
            <form method="post" id="ajouter" action="ajouterUnBien.php">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresseAjou" name="adresseAjou">
                <br/>
                <br/>
                <label for="surface">Surface :<label>
                <input type="text" id="surfaceAjou" name="surfaceAjou">
                <br/>
                <br/>
                <label for="jardin">Jardin (Oui ou non) :<label>
                <input type="text" id="jardin" name="jardinAjou">
                <br/>
                <br/>
                <label for="nbPieces">Nombre de pièces :<label>
                <input type="text" id="nbPieces" name="nbPiecesAjou">
                <br/>
                <br/>
                <label for="prix">Prix :<label>
                <input type="text" id="prix" name="prixAjou">
                <br/>
                <br/>
                <label for="ville">Ville :<label>
                <input type="text" id="ville" name="villeAjou">
                <br/>
                <br/>
                <label for="type">Type :<label>
                <input type="text" id="type" name="typeAjou">
                <br/>
                <br/>
                <label for="titre">Titre :<label>
                <input type="text" id="titre" name="titreAjou">
                <br/>
                <br/>
                <label for="description">Description :<label>
                <input type="text" id="description" name="descriptionAjou">
                <br/>
                <br/>                
                <input type="submit" value="Se connecter" name='btnAjou'>
            </form> 
        </fieldset>
        
         <fieldset id='modifierBien' class='contenu'>
            <label for='modifierBien'>Remplissez ce formulaire pour modifier un produit de la BDD</label>    
            <form method="post" id="ajouter" action="#">
                <label for="numero">Numero :</label>
                <input type="text" id="numero" name="numeroModif">
                <br/>
                <br/>
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresseModif">
                <br/>
                <br/>
                <label for="surface">Surface :<label>
                <input type="text" id="surface" name="surfaceModif">
                <br/>
                <br/>
                <label for="jardin">Jardin (Oui ou non) :<label>
                <input type="text" id="jardin" name="jardinModif">
                <br/>
                <br/>
                <label for="nbPieces">Nombre de pièces :<label>
                <input type="text" id="nbPieces" name="nbPiecesModif">
                <br/>
                <br/>
                <label for="prix">Prix :<label>
                <input type="text" id="prix" name="prixModif">
                <br/>
                <br/>
                <label for="ville">Ville :<label>
                <input type="text" id="ville" name="villeModif">
                <br/>
                <br/>
                <label for="type">Type :<label>
                <input type="text" id="type" name="typeModif">
                <br/>
                <br/>
                <label for="titre">Titre :<label>
                <input type="text" id="titre" name="titreModif">
                <br/>
                <br/>
                <label for="description">Description :<label>
                <input type="text" id="description" name="descriptionModif">
                <br/>
                <br/>                
                <input type="submit" value="Modifier" name='btnModif'>
            </form> 
        </fieldset>
        
        <fieldset id='supprimerBien' class="contenu">
            <form action="#">
                <label for='supprimerBien'>Entrez le numéro du Bien à Supprimer</label>
                <input type="text" id='supprimer'>
                <br/>
                <input type='submit' value="Supprimer" name='supprimerProduit'> 
            </form>
        </fieldset>           
        </div>
        
        
        
        
        
        
        
        
    </body>
</html>
