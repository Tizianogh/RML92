<?php

if (empty($_SESSION['login']) == 'adminvep') {


    echo "Vous devez êtes connecté pour rejoindre cette page";
} else {


    echo '<script type="text/javascript" src="js/j_tiny.js"></script>';
    echo '<h1 class="uk-heading-line uk-text-center"><span>Nouvel article :</span></h1>';
    echo '<br>';
    echo '<form action="index.php?uc=vep&action=write" method="POST">';
    echo '<div class="container">';
  
    echo '<input placeholder="Entrez un titre" name="titre" type="text" class="form-control" >';
    echo '<br>';
    echo '<input name="phrase" placeholder="Entrez une phrase d\'introduction"  type="text" class="form-control" >';
    echo '<br>';

    echo '<input name="img" placeholder="Entrez l\'URL d\'une image (1800x1200)" type="text" class="form-control" >';
    echo '<br>';
   
    echo '<textarea name="article" id="myTextarea"></textarea>';

    echo '<input type="submit" class="btn btn-success btn-send" value="Send message">';
    echo '</form>';
 

    echo '</div>';

}
?>

