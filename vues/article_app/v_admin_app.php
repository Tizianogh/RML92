<?php

if (empty($_SESSION['login']) == 'adminapp') {

    echo "Vous devez êtres connecté pour accéder à cette page.";
} else {

    echo '<h1 class="uk-heading-line uk-text-center"><span>Gestion des articles de l\'alternance et de l\'apprentissage :</span></h1>';
    echo '<br>';
    echo '<div class="container">';
    echo'<ul class="uk-breadcrumb">';
    echo' <li><a href="index.php?uc=app&action=write">NEW</a></li>';
    echo '<li><a href = "index.php?uc=apprentie&action=adminapprentie">APPRENTI(E)</a></li>';
   
echo '</ul>';

    echo '<table style = "text-align: center"class = "table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Titre</th>';
    echo '<th>Création</th>';
      echo '<th>Modification</th>';
    echo '<th>Online</th>';
    echo '<th>Gestion</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody style = "font-weight: bold">';

                foreach ($articles as $unarticle) {
                $titre = $unarticle['titre'];
                $phrase = $unarticle['phrase'];
                $id = $unarticle['id'];
                $status=$unarticle['online'];
                $date = $unarticle['date_article'];
                $datem =$unarticle['date_modif'];
           

    echo '<tr>';
    echo '<td>'.$id.'</td>';
    echo '<td>'.$titre.'</td>';
    echo '<td>'.$date.'</td>';
    echo '<td>'.$datem.'</td>';
    echo '<td>';
    echo ($status == '0') ? '<a href = "index.php?uc=app&action=status&id='.$id.'"><button type = "button" class = "btn btn-danger">Hors-ligne</button></a>' :
           '<a href = "index.php?uc=app&action=status&id='.$id.'"><button type = "button" class = "btn btn-success">En ligne</button></a></td>';
    echo '</td>';
    echo '<td><a href = "index.php?uc=app&action=modify&id='.$id.'"><button type = "button" class = "btn btn-secondary">Modifier</button></a> <a href = "index.php?uc=app&action=delete&id='.$id.'"><button type = "button" class = "btn btn-secondary">Supprimer</button></a></td>';
    echo '</tr>';
                }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
?>