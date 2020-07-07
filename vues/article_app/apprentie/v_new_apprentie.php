<?php

if (empty($_SESSION['login']) == 'adminapp') {


    echo "Vous devez êtes connecté pour rejoindre cette page";
} else {


    echo '<script type="text/javascript" src="js/j_tiny.js"></script>';
    echo '<h1 class="uk-heading-line uk-text-center"><span>Nouveau apprenti(e) :</span></h1>';
    echo '<br>';
    echo '<form action="index.php?uc=apprentie&action=write" method="POST">';
    echo '<div class="container">';

    echo '<input name="titre" placeholder="Entrez un titre" type="text" class="form-control" >';
    echo '<br>';
    echo '<input name="phrase" placeholder="Entrez une phrase d\'introduction" type="text" class="form-control" >';
    echo '<br>';
        echo '<input name="pdf" placeholder="Entrez l\'URL de votre PDF" type="text" class="form-control" >';
    echo '<br>';

     echo' <input name="dateapprentie" class="form-control" type="date" >';
                  echo '<br>';
    echo '<input type="submit" class="btn btn-success btn-send" value="Send message">';
    echo '</form>';

    echo '</div>';
}
?>

