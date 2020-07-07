<?php

if (empty($_SESSION['login']) == 'adminapp') {

    echo "Vous devez êtres connecté pour accéder à cette page.";
} else {

    echo '<h1 class="uk-heading-line uk-text-center"><span>Gestion des apprenti(e)s : </span></h1>';
    echo '<br>';
    echo '<div class="container">';
    echo'<ul class="uk-breadcrumb">';
    echo' <li><a href="index.php?uc=apprentie&action=write">NEW</a></li>';
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

    foreach ($apprenties as $unapprenti) {
        $titre = $unapprenti['titre'];
        $phrase = $unapprenti['phrase'];
        $id = $unapprenti['id'];
        $status = $unapprenti['online'];
        $date = $unapprenti['date_apprentie'];
        $datem = $unapprenti['date_modif'];


        echo '<tr>';
        echo '<td>' . $id . '</td>';
        echo '<td>' . $titre . '</td>';
        echo '<td>' . $date . '</td>';
        echo '<td>' . $datem . '</td>';
        echo '<td>';
        echo ($status == '0') ? '<a href = "index.php?uc=apprentie&action=status&id=' . $id . '"><button type = "button" class = "btn btn-danger">Hors-ligne</button></a>' :
                '<a href = "index.php?uc=apprentie&action=status&id=' . $id . '"><button type = "button" class = "btn btn-success">En ligne</button></a></td>';
        echo '</td>';
        echo '<td><a href = "index.php?uc=apprentie&action=modify&id=' . $id . '"><button type = "button" class = "btn btn-secondary">Modifier</button></a> <a href = "index.php?uc=apprentie&action=delete&id=' . $id . '"><button type = "button" class = "btn btn-secondary">Supprimer</button></a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
?>