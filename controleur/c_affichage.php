<?php
/**
 *  Contrôleur permettant de gérer les affichages, il reçoit un paramètre par url qui l'oriente dans le switch afin d'afficher la bonne page.
 */
$action = $_REQUEST['action'];
switch ($action) {
    case'contact': {
            include'vues/v_contact.php';
            break;
        }
    case'faq': {
            include'vues/v_faq.php';
            break;
        }
    case 'annuaire': {
            include'vues/v_annuaire.php';
            break;
        }
    case 'equipe': {
            include'vues/v_equipe.php';
            break;
        }
    case 'milo':{
        include 'vues/v_milo.php';
        break;
        
    }
    case 'mention':{
        include 'vues/v_mention.php';
        break;
        
    }
    case 'institutionnels':{
        include 'vues/partenaires/v_instit.php';
        break;
       }
    case 'economiques':{
        include 'vues/partenaires/v_eco.php';
        break;
        
    }
    case 'sociaux':{
        include 'vues/partenaires/v_soc.php';
        break;
    }
      case 'apprentissage': {
            include'vues/v_apprentissage.php';
            break;
        }
    case 'appel':{
        include'vues/v_projet.php';
        break;
        
    }
      case'contactemail':{
        include'vues/v_contact.php';
        contact(); // Appel de la fonction qui permet d'envoyer un email
        break;
        
    }
    case'localisation':{
        include 'vues/v_localisation.php';
        break;
    }
    case'plan':{
        include'vues/v_plan.php';
        break;
    }
}