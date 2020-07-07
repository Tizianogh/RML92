<?php
/*
 *  Contrôleur permettant de gérer les connexions avec les différents comptes,
 * il reçoit un paramètre par url qui l'oriente dans le switch afin d'afficher la bonne page et d'effectuer les bonnes actions.
 * 
 */

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion': {
            include 'vues/v_connexion.php';
            break;
        }
    case 'valideConnexion': {
            $login = $_REQUEST['login']; // récupération du login de l'utilisateur
            $mdp = $_REQUEST['mdp']; // récupération du mdp de l'utilisateur
            $visiteur = $pdo->getInfosVisiteur($login, $mdp); // Récupération des infos de l'utilisateur en fonction du login et du mdp donné
            if (!is_array($visiteur)) {
                echo '<script>window.location.replace("index.php?uc=connexion&action=demandeConnexion");</script>'; // Si le login et le mdp ne corresponde à rien, alors on redirige vers la page demande de connexion
            } else { // sinon on récupère ses informations afin de les mettre dans dans la fonction connecter qui créer des variables de sessions
                $id = $visiteur['idVisiteur'];
                $nom = $visiteur['login'];
                $type = $visiteur['type'];
                connecter($id, $login,$type);
                echo '<script>window.location.replace("index.php");</script>'; // redirection vers l'index
                break;
            }
        }
    case 'deconnexion' : {
            session_destroy(); // destruction de la session afin de pouvoir se déconnecter
            echo '<script>window.location.replace("index.php");</script>'; // redirection vers l'index
            break;
        }
}
?>
                                





