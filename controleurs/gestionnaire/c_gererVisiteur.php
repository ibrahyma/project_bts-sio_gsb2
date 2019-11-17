<?php
    include("vues/gestionnaire/v_sommaire.php");
    $idVisiteur = $_SESSION['idVisiteur'];
    $action = $_REQUEST['action'];
    switch($action)
    {
        case "ajoutVisiteur":
            include("vues/gestionnaire/v_formAjoutVisiteur.php");
            break;
        
        case "validerAjoutVisiteur":
            $idNewV = $_POST["id"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $adresse = $_POST["adresse"];
            $cp = $_POST["cp"];
            $ville = $_POST["ville"];
            if ($idNewV != "" && $nom != "" && $prenom != "")
            {
                $resultat = $pdo->ajouterVisiteur($idNewV, $nom, $prenom, $adresse, $cp, $ville);
                if ($resultat['nbLignes'] == 0)
                {
                    ajouterErreur("Une erreur empêche à l'ajout du visiteur, son id existe peut-être déjà.");
                }
                else
                {
                    echo "<p>Le visiteur a été crée :</p>";
                    echo "Login : ".$resultat['loginGenere'];
                    echo "<br>Mot de passe : ".$resultat['mdpGenere'];
                }
            }
            else
            {
                ajouterErreur("Veuillez saisir tous les champs obligatoires.");
            }
            
            if (nbErreurs() > 0)
            {
                include("vues/v_erreurs.php");
                include("vues/gestionnaire/v_formAjoutVisiteur.php");
            }
            break;
            
        case "selectionVisiteur":
            $lesVisiteurs = $pdo->getLesVisiteurs();
            $selectId = $lesVisiteurs[0]['id'];
            include("vues/gestionnaire/v_listeVisiteurs.php");
            break;
            
        case "modifVisiteur":
            $sctdVisiteur = $pdo->getVisiteur($_POST["lstV"])[0];
//            var_dump($sctdVisiteur); die();
            $idV = $sctdVisiteur["id"];
            $nomV = $sctdVisiteur["nom"];
            $prenomV = $sctdVisiteur["prenom"];
            $adresseV = $sctdVisiteur["adresse"];
            $cpV = $sctdVisiteur["cp"];
            $villeV = $sctdVisiteur["ville"];
            include("vues/gestionnaire/v_formModifVisiteur.php");
            break;
        
        case "validerModifVisiteur":
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $adresse = $_POST["adresse"];
            $cp = $_POST["cp"];
            $ville = $_POST["ville"];
//            var_dump($_POST); die();
            if ($nom != "" && $prenom != "")
            {
                $nbLignes = $pdo->modifierVisiteur($id, $nom, $prenom, $adresse, $cp, $ville);
                if ($nbLignes == 0)
                {
                    ajouterErreur("Une erreur empêche la modification du visiteur.");
                }
            }
            else
            {
                 ajouterErreur("Le nom et le prénom sont obligatoires : Veuillez recommencer !");
            }            
            if (nbErreurs() > 0)
            {
                include("vues/v_erreurs.php");
            }
            break;
        
        default:
            break;
    }
?>