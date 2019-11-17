<div id="contenu">
    <h2>Frais forfaitisés</h2>
    <table class="listeLegere">
        <tr>
            <th class="id">ID</th>
            <th class="libelle">Libellé</th>
            <th class='montant'>Montant</th>                
        </tr>
        <?php
            foreach ($lesFraisForfait as $unFrais) 
            {
                $id = $unFrais['id'];
                $libelle = $unFrais['libelle'];
                $montant = $unFrais['montant'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $libelle; ?></td>
            <td><?php echo $montant; ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>
</div>