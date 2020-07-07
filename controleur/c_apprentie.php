<?php
/**
 *  Contrôleur permettant de gérer l'écriture, la modification, la mise en ligne, la suppression et l'affichage des apprenties, 
 *  il reçoit une variable par url qui l'oriente dans le switch afin d'afficher la bonne page et d'effectuer les bonnes actions.
 */
$action = $_REQUEST['action'];
switch ($action) {
    case'adminapprentie': {
            $apprenties = $pdo->afficherApprentie(); //Requête PDO afin d'afficher les apprenties dans l'administration
            include'vues/article_app/apprentie/v_admin_apprentie.php';
            break;
        }

    case 'write': {
            include'vues/article_app/apprentie/v_new_apprentie.php';
            if (isset($_POST['titre']) AND $_POST['phrase'] AND $_POST['pdf'] AND $_POST['dateapprentie']) {
                $titre = htmlspecialchars($_POST['titre'], ENT_QUOTES); // récupération du titre par l'URL
                $phrase = htmlspecialchars($_POST['phrase'], ENT_QUOTES); // récupération de la phrase d'introduction par l'URL
                $url = $_POST['pdf']; // récupération de l'url du PDF par url
                $dateapprentie = $_POST['dateapprentie']; // récupération de la date de la publication de l'apprentie afin de pouvoir l'afficher dans l'ordre croissant par la suite.
                $pdo->newApprentie($titre, $phrase, $url, $dateapprentie); // Requête PDO permettant d'enregistrer un nouveau apprentie dans la base de données
                echo '<script>window.location.replace("index.php?uc=apprentie&action=adminapprentie");</script>'; // redirection vers le pannel admin après l'enregistrement
            }
            break;
        }

    case'status': {
            $id = $_REQUEST['id']; // récupération de l'id de l'apprentie en question
            $pdo->modifyStatusApprentie($id); // requête PDO qui test la valeur de la colonne online et la change en fonction de son état. Si online = 0 alors change en 1 et si online = 0 change en 1.
            echo '<script>window.location.replace("index.php?uc=apprentie&action=adminapprentie");</script>'; // redirection vers le pannel admin après la modification du status
            break;
        }
    case'liste': {
            $lesDates = $pdo->onlineApprentie(); // requête PDO affichant tous les apprenties en ligne.
            include'vues/article_app/apprentie/v_liste_apprentie.php';
            break;
        }

    case 'modify': {
            $id = $_REQUEST['id']; // récupération de l'id de l'apprentie en question
            $affichage = $pdo->unApprentie($id); // requête PDO permettant de récupérer un apprentie en fonction de son id afin de le modifier par la suite
            include'vues/article_app/apprentie/v_modifiy_apprentie.php';

            break;
        }

    case 'update': {
            $id = $_POST['id']; // récupération de l'id de l'apprentie en question
            $titre = htmlspecialchars($_POST['titre'], ENT_QUOTES); // récupération du nouveau titre de l'apprentie 
            $phrase = htmlspecialchars($_POST['phrase'], ENT_QUOTES); // récupération de la nouvelle phrase d'introduction de l'apprentie
            $pdf = $_POST['pdf']; // récupération du nouveau URL du pdf de l'apprentie
            $complte = $_POST['dateapprentie']; // récupération de la nouvelle date de l'apprentie 
            $pdo->updateApprentie($id, $titre, $phrase, $pdf, $complte); // requête PDO afin de mettre à jour les modifications
            echo '<script>window.location.replace("index.php?uc=apprentie&action=adminapprentie");</script>'; // redirection vers le pannel admin après la modification
            break;
        }
    case 'delete': {
            $id = $_REQUEST['id'];  // récupération de l'id de l'apprentie en question
            $pdo->deleteApprentie($id); // requête PDO permettant de supprimer l'apprentie par rapport à son ID
            echo '<script>window.location.replace("index.php?uc=apprentie&action=adminapprentie");</script>'; // redirection vers le pannel admin après la suppression
            break;
        }

    case 'affichageapprentie': {
            $id = $_REQUEST['id']; // récupération de l'id de l'apprentie en question
            $affichage = $pdo->unApprentie($id); // requête PDO permettant de récupérer un apprentie en fonction de son id afin de l'afficher
            include'vues/article_app/apprentie/v_apercu_apprentie.php';
            break;
        }
}