<?php
foreach ($affichage as $unaffichage) {

    $titre = $unaffichage['titre'];
    $pdf = $unaffichage['pdf'];
}
?>
<h1 class="uk-heading-line uk-text-center"><span><?php echo $titre; ?></span></h1>
<br>
<div class="container">
    <p style="text-align: center"><object id="cv" width="600" height="800"  data="<?php echo $pdf; ?>" type="text/html">La visualisation n’est pas encore disponible sur votre navigateur, veillez à le mettre à jour.</object></p>

</div>

<script>
    pdfDocument = document.getElementById("cv");
    pageWidth = document.getElementById("content").offsetWidth;
    documentWidth = 0.3 * pageWidth;
    pdfDocument.style.width = documentWidth + "px";
    pdfDocument.style.height = documentWidth * 1.2 + "px";
</script>

