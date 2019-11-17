<div id="contenu">
    <h2>Ajouter un visiteur</h2>
    <form method="POST"  action="index.php?uc=gererVisiteur&action=validerAjoutVisiteur">
    <div class="corpsForm">
        <fieldset>
            <legend>Ajout d'un visiteur</legend>
            <p>Champs obligatoires*</p>
            <p>
                <p>
                    <label>Id*</label>
                    <input type="text" name="id" size="4" maxlength="4">
                </p>
                <p>
                    <label>Nom*</label>
                    <input type="text" name="nom" size="32">
                </p>
                <p>
                    <label>Prenom*</label>
                    <input type="text" name="prenom" size="32">
                </p>
                <p>
                    <label>Adresse</label>
                    <input type="text" name="adresse" size="50">
                </p>
                <p>
                    <label>Code postal</label>
                    <input type="text" name="cp" size="5" maxlength="5">
                </p>
                <p>
                    <label>Ville</label>
                    <input type="text" name="ville" size="20">
                </p>
            </p>
        </fieldset>
    </div>
    <div class="piedForm">
        <p>
            <input id="ok" type="submit" value="Valider" size="20"/>
            <input id="annuler" type="reset" value="Effacer" size="20"/>
        </p> 
    </div>
    </form>
</div>
