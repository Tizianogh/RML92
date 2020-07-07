<?php

/**
 *  Contrôleur permettant de gérer l'écriture, la modification, la mise en ligne, la suppression et l'affichage des articles de l'apprentissage/alternance, 
 *  il reçoit une variable par url qui l'oriente dans le switch afin d'afficher la bonne page et d'effectuer les bonnes actions.
 */
$action = $_REQUEST['action'];
switch ($action) {
    case'adminapp': {

            $articles = $pdo->afficherArticleApp(); // requête PDO afin d'afficher tous les articles dans le pannel admin
            include'vues/article_app/v_admin_app.php';
            break;
        }
    case'status': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $pdo->modifyStatusApp($id); // requête PDO permettant de changer le status en fonction du status actuel, si online = 0 alors il se transforme en 1 et si online = 1 alors il se transforme en 0
            echo '<script>window.location.replace("index.php?uc=app&action=adminapp");</script>'; // redirection vers le pannel admin après la modification du status
            break;
        }
    case 'modify': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $affichage = $pdo->unArticleApp($id); // requête PDO afin d'afficher l'article en fonction de son id.
            include'vues/article_app/v_modifiy_app.php';

            break;
        }
    case 'delete': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $pdo->deleteArticleApp($id); // requête PDO afin de supprimer l'article en fonction de son id   
            echo '<script>window.location.replace("index.php?uc=app&action=adminapp");</script>'; // redirection vers le pannel admin après la suppression
            break;
        }
    case 'write': {
            include'vues/article_app/v_wysiwyg_app.php';
            if (isset($_POST['titre']) AND $_POST['article'] AND $_POST['phrase'] AND $_POST['img']) {
                $titre = htmlspecialchars($_POST['titre'], ENT_QUOTES); // récupération du titre de l'article
                $phrase = htmlspecialchars($_POST['phrase'], ENT_QUOTES); // récupération de la phrase d'introduction de l'article
                $contenu = addslashes($_POST['article']); // récupération du contenu de l'article
                $img = $_POST['img']; // récupération du liens de l'image de l'article
                $article = $pdo->newArticleApp($titre, $phrase, $contenu, $img); // requête PDo afin d'enregistrer le nouveau article dans la base de données
                echo '<script>window.location.replace("index.php?uc=app&action=adminapp");</script>'; // redirection vers le pannel admin
            }
            break;
        }
    case 'update': {
            $id = $_POST['id']; // récupération de l'id de l'article
            $titre = htmlspecialchars($_POST['titre'], ENT_QUOTES); // récupération du nouveau titre de l'article
            $phrase = htmlspecialchars($_POST['phrase'], ENT_QUOTES); // récupération de la nouvelle phrase de l'article
            $contenu = addslashes($_POST['article']); // récupération du nouveau contenu de l'article
            $img = $_POST['img']; // récupération du nouveau URL de l'image de l'article
            $pdo->updateArticleApp($id, $titre, $phrase, $img, $contenu); // requête PDO afin d'enregister les modifications dans la base de données
            echo '<script>window.location.replace("index.php?uc=app&action=adminapp");</script>'; // redirection vers le pannel admin
        }

    case 'article': {
            $article = $pdo->articleOnlineLimiteApp(); // requête PDO qui permet d'afficher les 5 derniers articles postés online
            $articles = $pdo->articleOnlineApp(); // requête PDO qui permet d'afficher tous les articles online
            include 'vues/article_app/v_carousel_app.php';
            break;
        }
    case 'affichagearticle': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $affichage = $pdo->unArticleApp($id); // affichage d'un article en fonction d'un id
            include'vues/article_app/v_affichage_article_app.php';
            break;
        }
}