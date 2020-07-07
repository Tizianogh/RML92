<?php
/**
 *  Contrôleur permettant de gérer l'écriture, la modification, la mise en ligne, la suppression et l'affichage des articles du VEP, 
 *  il reçoit un paramètre par url qui l'oriente dans le switch afin d'afficher la bonne page et d'effectuer les bonnes actions.
 */

$action = $_REQUEST['action'];
switch ($action) {
    case'adminvep': {

            $articles = $pdo->afficherArticleVep(); // requête PDO permettant d'afficher les Articles dans le pannel
            include'vues/article_vep/v_admin_vep.php';
            break;
        }
    case'status': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $pdo->modifyStatusVep($id);  // requête PDO permettant de changer le status en fonction du status actuel, si online = 0 alors il se transforme en 1 et si online = 1 alors il se transforme en 0
            echo '<script>window.location.replace("index.php?uc=vep&action=adminvep");</script>'; // redirection vers le pannel admin après la modification du status
            break;
        }
    case 'modify': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $affichage = $pdo->unArticleVep($id); // requête PDO permettant de récuperer un article par rapport à son id
            include'vues/article_vep/v_modifiy_vep.php';

            break;
        }
    case 'delete': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $pdo->deleteArticleVep($id); // requête PDO permettant de supprimer un article par rapport à son ID
            echo '<script>window.location.replace("index.php?uc=vep&action=adminvep");</script>';
            break;
        }
    case 'write': {
            include'vues/article_vep/v_wysiwyg_vep.php';
            if (isset($_POST['titre']) AND $_POST['article'] AND $_POST['phrase'] AND $_POST['img']) {
              $titre = htmlspecialchars($_POST['titre'], ENT_QUOTES); // récupération du titre de l'article
                $phrase = htmlspecialchars($_POST['phrase'], ENT_QUOTES); // récupération de la phrase d'introduction de l'article
               $contenu = addslashes($_POST['article']); // récupération du contenu de l'article
                $img = $_POST['img']; // récupération de l'URL de l'image de l'article
                $article = $pdo->newArticleVep($titre, $phrase, $contenu, $img); // requête PDO permettant d'enregistrer le nouvel article dans la base de données
                echo '<script>window.location.replace("index.php?uc=vep&action=adminvep");</script>'; // redirection vers le pannel admin après l'enregistrement
            }
            break;
        }
    case 'update': {
            $id = $_POST['id']; // récupération de l'id de l'article en question
        $titre = htmlspecialchars($_POST['titre'], ENT_QUOTES); // récupération du nouveau titre de l'article
            $phrase = htmlspecialchars($_POST['phrase'], ENT_QUOTES); // récupération de la nouvelle phrase d'introduction de l'article
            $contenu = addslashes($_POST['article']); // récupération du nouveau contenu de l'article
            $img = $_POST['img']; // récupération du nouveau URL de l'image de l'article
            $pdo->updateArticleVep($id, $titre, $phrase, $img, $contenu); // requête PDO permettant d'enregistrer les modifications du nouveau article
            echo '<script>window.location.replace("index.php?uc=vep&action=adminvep");</script>'; // redirection vers le pannel admin après l'enregistrement des modifications
            break;
        }

    case 'article': {
            $article = $pdo->articleOnlineLimiteVep(); // requête PDO permettant d'afficher les 5 derniers articles online
            $articles = $pdo-> articleOnlineVep(); // requête PDO permettant d'afficher tous les articles online
            include 'vues/article_vep/v_carousel_vep.php';
            break;
        }
    case 'affichagearticle': {
            $id = $_REQUEST['id']; // récupération de l'id de l'article en question
            $affichage = $pdo->unArticleVep($id); // requête PDO permettant d'afficher un article par rapport à son id
            include'vues/article_vep/v_affichage_article_vep.php';
            break;
        }
        
        
    case 'presentation':{
        include'vues/article_vep/v_presentation_vep.php';
        break;
        
        
    }
}