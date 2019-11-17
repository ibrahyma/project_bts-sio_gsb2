<div id="contenu">
    <h2>Modifier le visiteur <?php echo $sctdVisiteur["id"]; ?></h2>
    <form method="POST"  action="index.php?uc=gererVisiteur&action=validerModifVisiteur">
    <div class="corpsForm">
        <fieldset>
            <legend>Modification d'un visiteur</legend>
            <input type="hidden" name="id" value="<?php echo $idV ?>"/>
            <p>
                <p>
                    <label>Nom</label>
                    <input type="text" name="nom" size="32" value="<?php echo $nomV; ?>">
                </p>
                <p>
                    <label>Prénom</label>
                    <input type="text" name="prenom" size="32" value="<?php echo $prenomV; ?>">
                </p>
                <p>
                    <label>Adresse</label>
                    <input type="text" name="adresse" size="50" value="<?php echo $adresseV; ?>">
                </p>
                <p>
                    <label>Code postal</label>
                    <input type="text" name="cp" size="5" maxlength="5" value="<?php echo $cpV; ?>">
                </p>
                <p>
                    <label>Ville</label>
                    <input type="text" name="ville" size="20" value="<?php echo $villeV; ?>">
                </p>
            </p>
        </fieldset>
    </div>
    <div class="piedForm">
        <p>
            <input id="ok" type="submit" value="Valider" size="20"/>
            <input id="annuler" type="reset" value="Réinitialiser" size="20"/>
        </p> 
    </div>
    </form>
</div>
