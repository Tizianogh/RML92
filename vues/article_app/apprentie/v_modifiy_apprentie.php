<?php

if (empty($_SESSION['login']) == 'adminapp') {
    
    
    echo "Vous devez êtres connecté pour accéder à cette page.";
} else {
    
    
    foreach ($affichage as $unaffichage) {
        
        $titre   = $unaffichage['titre'];
        $phrase  = $unaffichage['phrase'];
        $img     = $unaffichage['pdf'];
        $complte = $unaffichage['date_apprentie'];
        $id      = $unaffichage['id'];
    }
    
    echo '<script type="text/javascript" src="js/j_tiny.js"></script>';
    echo '<h1 class="uk-heading-line uk-text-center"><span>Modification de l\'apprenti(e) : </span></h1>';
    echo '<br>';
    echo '<form action="index.php?uc=apprentie&action=update" method="POST">';
    echo '<div class="container">';
    echo '<input name="titre" type="text" class="form-control" value="' . $titre . '" >';
    echo '<br>';
    echo '<input name="phrase"  type="text" class="form-control" value="' . $phrase . '">';
    echo '<br>';
    echo '<input name="pdf"  type="text" class="form-control"  value="' . $img . '">';
    echo '<br>';
       echo' <input name="dateapprentie" value="'.$complte.'"class="form-control" type="date" >';
    echo '<input id="prodId" name="id" type="hidden" value="' . $id . '">';
    echo '<input type="submit" class="btn btn-success btn-send" value="Send message">';
    echo '</form>';
    echo '</div>';
}
?>