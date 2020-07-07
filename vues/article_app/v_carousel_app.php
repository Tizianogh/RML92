
<h1 class="uk-heading-line uk-text-center"><span>Les derniers articles</span></h1>
<br>
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: fade">

    <ul class="uk-slideshow-items">
         <?php
        foreach ($article as $unArticleOnline) {
            $titre = $unArticleOnline['titre'];
            $phrase = $unArticleOnline['phrase'];
            $img = $unArticleOnline['img'];
            $id = $unArticleOnline['id'];
            ?>
        <li>
            <img src="<?php echo $img;?>" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                <h3 class="uk-margin-remove"><?php echo $titre;?></h3>
                <p class="uk-margin-remove"><?php echo $phrase;?></p>
                <br>
                <a href="index.php?uc=app&action=affichagearticle&id=<?php echo $id;?>" class="uk-button uk-button-text">Lire plus</a>
            </div>
        </li>
        <?php }?>
    </ul>

    <a style='color:black' class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a style='color:black' class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<h1 class="uk-heading-line uk-text-center"><span>Nos articles les plus anciens</span></h1>
<br>

<div class="uk-grid-small uk-child-width-1-5@s uk-flex-center uk-text-center" uk-grid>
       <?php
        foreach ($articles as $lesArticles) {
            $titre = $lesArticles['titre'];
            $phrase = $lesArticles['phrase'];
            $img = $lesArticles['img'];
            $id = $lesArticles['id'];
            ?>
    <div class="uk-card uk-card-default">
        <div class="uk-card-media-top">
            <img src="<?php echo $img;?>"" alt="">
        </div>
        <div class="uk-card-body">
            <h3 class="uk-card-title"><?php echo $titre;?></h3>
            <p><?php echo $phrase;?></p>
            <br>
            
            <a href="index.php?uc=app&action=affichagearticle&id=<?php echo $id;?>" class="uk-button uk-button-text">Lire plus</a>
           
        </div>
    </div> 
            <?php }?>
</div>




