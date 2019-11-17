<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action)
{
	case 'selectionnerMois':
        {
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            $lesCles = array_keys($lesMois);
            $moisASelectionner = $lesCles[0];
            include("vues/v_listeMois.php");
            break;
	}
        
	case 'voirEtatFrais':
        {
            $leMois = $_REQUEST['lstMois']; 
            $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            $moisASelectionner = $leMois;
            include("vues/v_listeMois.php");
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur,$leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
            $numAnnee = substr($leMois,0,4);
            $numMois = substr($leMois,4,2);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif = dateAnglaisVersFrancais($lesInfosFicheFrais['dateModif']);
            include("vues/v_etatFrais.php");
            break;
	}
        
        case 'voirFraisForfait':
        {
            $lesFraisForfait = $pdo->getFraisAuForfait();
            include("vues/v_listeFraisAuForfait.php");
            break;
        }
        
        case 'voirRecap':
        {
            $nbTotalFichesFrais = $pdo->getNbTotalFichesFrais($idVisiteur);
            $montantTotalFichesFrais = $pdo->getMontantTotalFichesFraisRb($idVisiteur);
            $nbFichesFraisAnnee = $pdo->getNbFichesFraisAnneeEnCours($idVisiteur);
            $montantFichesFraisAnnee = $pdo->getMontantTotalRbAnneeEnCours($idVisiteur);
            include("vues/v_voirRecap.php");
            break;
        }
}
?>