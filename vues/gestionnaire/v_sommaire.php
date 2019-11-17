<!-- Division pour le sommaire -->
<div id="menuGauche">
<div id="infosUtil">    
    <h2>
        
    </h2>
    
</div>  
        <ul id="menuList">
            <li>
                Gestionnaire :<br>
                <?php echo $_SESSION['prenom']."  ".$_SESSION['nom'] ?>
            </li>
            <li class="smenu">
               <a href="index.php?uc=gererVisiteur&action=ajoutVisiteur" title="Ajout d'un visiteur">Ajouter un visiteur</a>
            </li>
            <li class="smenu">
               <a href="index.php?uc=gererVisiteur&action=selectionVisiteur" title="Mise à jour des infos d'un visiteur">Modifier un visiteur</a>
            </li>
            <li class="smenu">
               <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
            </li>
         </ul>
    </div>
    