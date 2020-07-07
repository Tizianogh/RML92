<h1 class="uk-heading-line uk-text-center"><span>L'apprenti(e) : </span></h1>
<br>
<div class="uk-grid-small uk-child-width-1-5@s uk-flex-center uk-text-center" uk-grid>
       <?php
        foreach ($lesDates as $uneDate) {
            $titre = $uneDate['titre'];
            $phrase = $uneDate['phrase'];
            $id = $uneDate['id']
            
     
            ?>
    <div class="uk-card uk-card-default">
        <div class="uk-card-media-top">
            <img src="images/apprentie.png" alt="">
        </div>
        <div class="uk-card-body">
            <h3 class="uk-card-title"><?php echo $titre;?></h3>
            <p><?php echo $phrase;?></p>
            <br>
            
            <a href="index.php?uc=apprentie&action=affichageapprentie&id=<?php echo $id;?>" class="uk-button uk-button-text">Voir</a>
           
        </div>
    </div> 
            <?php }?>
</div>
