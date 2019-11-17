<div id="contenu">
    <h2>Sélectionner un visiteur</h2>
    <h3>Visiteur à sélectionner : </h3>
    <form action="index.php?uc=gererVisiteur&action=modifVisiteur" method="post">
        <div class="corpsForm">
            <p>
                <label for="lstV" accesskey="n">Visiteur :</label>
                <select id="lstMois" name="lstV">
                    <?php
                        foreach ($lesVisiteurs as $v)
                        {
                            $id = $v['id'];
                            $nom =  $v['nom'];
                            $prenom =  $v['prenom'];
                            if ($id == $selectId)
                            {
                    ?>
                                <option selected value="<?php echo $id ?>"><?php echo "$id - $nom $prenom"; ?> </option>
                    <?php 
                            }
                            else
                            { 
                    ?>
                                <option value="<?php echo $id ?>"><?php echo "$id - $nom $prenom"; ?> </option>
                    <?php 
                            }
                        }
                    ?>
                </select>
            </p>
        </div>
        <div class="piedForm">
            <p>
              <input id="ok" type="submit" value="Valider" size="20" />
              <input id="annuler" type="reset" value="Réinitialiser" size="20" />
            </p> 
        </div>
    </form>