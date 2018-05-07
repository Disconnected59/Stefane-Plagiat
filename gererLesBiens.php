<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <title>Stefane Plagiat</title>
    </head>
    <body>
        <?php
        include_once 'FonctionsPhp/fonctionsBackOffice.php';
        $objetPDO= new PDO('mysql:host=localhost;dbname=bddstefaneplagiat','root','');
        if(isset($_SESSION['login']))
        {
        include_once'/include/adminConnecte.inc';
        }
        include_once'/include/menuEtImage.inc';
        
        ?>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class='conteneur'>   
        <fieldset class='contenu'>
            <legend>Remplissez ce formulaire pour ajouter un produit à la BDD</legend>    
            <form method="post" id="ajouter" action="ajouterUnBien.php">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresseAjou" name="adresseAjou">
                <br/>
                <br/>
                <label for="surface">Surface :</label>
                <input type="text" id="surfaceAjou" name="surfaceAjou">
                <br/>
                <br/>
                <label for="jardin">Jardin (Oui ou non) :</label>
                <input type="text" id="jardinAjou" name="jardinAjou">
                <br/>
                <br/>
                <label for="nbPieces">Nombre de pièces :</label>
                <input type="text" id="nbPiecesAjou" name="nbPiecesAjou">
                <br/>
                <br/>
                <label for="prix">Prix :</label>
                <input type="text" id="prixAjou" name="prixAjou">
                <br/>
                <br/>
                <label for="ville">Ville :</label>
                <input type="text" id="villeAjou" name="villeAjou">
                <br/>
                <br/>
                <label for="type">Type :</label>
                <input type="text" id="typeAjou" name="typeAjou">
                <br/>
                <br/>
                <label for="titre">Titre :</label>
                <input type="text" id="titreAjou" name="titreAjou">
                <br/>
                <br/>
                <label for="description">Description :</label>
                <input type="text" id="descriptionAjou" name="descriptionAjou">
                <br/>
                <br/>                
                <input type="submit" value="Ajouter" name='btnAjou'>
            </form> 
        </fieldset>
        
         <fieldset  class='contenu'>
             <legend>Remplissez ce formulaire pour modifier un produit de la BDD</legend>  
            <form method="post" id="modifier" action="modifierUnBien.php">
                <label>Numero :</label>
                <select name='numeroModif' id='numeroModif'> 
                <?php
                $i=1;
                       $lesNumerosBiens=recupNumBien($objetPDO);
                       foreach($lesNumerosBiens as $unNumero)
                       {
                          echo '<option value="'.$i.'">'.$unNumero['numero'].'</option>';
                          $i++;
                       }
                
                ?>
               </select> 
                <br/>
            
                <br/>
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresseModif">
                <br/>
                <br/>
                <label for="surface">Surface :</label>
                <input type="text" id="surface" name="surfaceModif">
                <br/>
                <br/>
                <label for="jardin">Jardin (Oui ou non) :</label>
                <input type="text" id="jardin" name="jardinModif">
                <br/>
                <br/>
                <label for="nbPieces">Nombre de pièces :</label>
                <input type="text" id="nbPieces" name="nbPiecesModif">
                <br/>
                <br/>
                <label for="prix">Prix :</label>
                <input type="text" id="prix" name="prixModif">
                <br/>
                <br/>
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="villeModif">
                <br/>
                <br/>
                <label for="type">Type :</label>
                <input type="text" id="type" name="typeModif">
                <br/>
                <br/>
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titreModif">
                <br/>
                <br/>
                <label for="description">Description :</label>
                <input type="text" id="description" name="descriptionModif">
                <br/>
                <br/>                
                <input type="submit" value="Modifier" name='btnModif'>
            </form> 
        </fieldset>
        
        <fieldset id='supprimerBien' class="contenu">
            <legend>Remplissez ce formulaire pour supprimer un bien</legend>
            <form method="post" action="supprimerUnBien.php">
                <label>Entrez le numéro du Bien à Supprimer</label>
                <br/>
                <input type="text" id="numeroSuppr" name="numeroSuppr">
                <br/>
                <input type="submit" value="Supprimer" name="supprimerBien"> 
            </form>
        </fieldset>           
        </div>
        
        <fieldset id="ajouterImage" class="contenu">
            <legend>Remplissez ce formulaire pour ajouter une Image à un bien</legend>
            <form method="post" action="ajouterUneImage.php">
                <label>Selectionez le numero du Bien auquel ajouter l'image</label>  
                <br/>
                <select name='numeroBien' id='numerosBiens'> 
                <?php   
                
                       $lesNumerosBiens=recupNumBien($objetPDO);
                       foreach($lesNumerosBiens as $unNumero)
                       {
                       echo '<option value="'.$unNumero['numero'].'">'.$unNumero['numero'].'</option>';
                       }
                
                ?>
               </select> 
                <br/>
                <label for='lienImage'>Entrez le lien de l'image à ajouter</label>
                <br/>
                <input type='text' id="lienImage" name='lienImage'>
                <br/>
                
                <input type='submit' value='Ajouter image' name='ajouImage'>             
            </form>
        </fieldset>

    </body>
</html>
