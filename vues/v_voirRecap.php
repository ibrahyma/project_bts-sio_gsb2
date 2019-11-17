<div id="contenu">
    <h2>Consulter récapitulatif</h2>
    <table class="listeLegere">
        <tr>
            <td>Nombre total de fiches frais saisies</td>
            <td><?php echo $nbTotalFichesFrais; ?></td>
        </tr>
        <tr>
            <td>Montant total de fiches frais remboursées</td>
            <td><?php echo $montantTotalFichesFrais; ?>€</td>
        </tr>
        <tr>
            <td>Nombre total de fiches frais saisies pour l'année <?php echo date("Y");?></td>
            <td><?php echo $nbFichesFraisAnnee; ?></td>
        </tr>
        <tr>
            <td>Montant total de fiches frais remboursées pour l'année <?php echo date("Y");?></td>
            <td><?php echo $montantFichesFraisAnnee; ?>€</td>
        </tr>
    </table>
</div>