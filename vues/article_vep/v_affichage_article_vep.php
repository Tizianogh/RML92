<?php
    foreach($affichage as $unaffichage){
        
        $titre=$unaffichage['titre'];
        $contenu=$unaffichage['contenu'];
    }
?>
<h1 class="uk-heading-line uk-text-center"><span><?php echo $titre; ?></span></h1>
<div class="container">
    <?php echo stripslashes($contenu); ?>
   
</div>