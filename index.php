<?php
/*
 * Contrôleur principale, il s'occupe à renvoyer toutes les demandes de l'utilisateur vers le bon contrôleur
 */

session_start();
require_once 'include/fct.php';
require_once 'include/pdorml.php';
$co  = estConnecte();
$pdo = pdorml::getPdo();
if (!isset($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'action';
}
/*
 * Affiche le bon entête en fonction du type de compte connecté
 */
$uc = $_REQUEST['uc'];

if ($co == FALSE) {
    
    include 'vues/v_entete.php';
} else if ($_SESSION['type'] == 'V') {
    
    include 'vues/article_vep/v_entete_vep.php';
} else {
    
    
    include 'vues/article_app/v_entete_app.php';
}

//-------------------------------------------------------------------------------- SWITCH POUR ENVOYER VERS LE BON CONTROLEUR ---------------------------------------------------------


switch ($uc) {
    case 'connexion': {
        include("controleur/c_connexion.php");
        break;
    }
    case 'deconnexion': {
        include('controleur/c_connexion.php');
        break;
    }
  
    case 'app':{
        include("controleur/c_article_app.php");
     break;   
    }
    case 'apprentie':{
                include("controleur/c_apprentie.php");
     break;   
    }
        
    case 'affichage': {
        include("controleur/c_affichage.php");
        break;
    }
    case 'vep'; {
        include("controleur/c_article_vep.php");
        break;
    }

    default: {
        include 'vues/v_main.php';

    }
}
include 'vues/v_pied.php';
?>