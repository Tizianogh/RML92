<?php

class pdorml {

    /**
     * Class PDO, cette classe a pour but d'interagir uniquement avec la base de données.
     *  On enregistre des variables static avec les informations pour se connecter à la base de données
     */
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=rml92';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdorml = null;

    /*

     *  ----------------------------------------------------- BASE DE LA CLASSE PDO ------------------------------------------------------------------------
     * 
     *      */

    private function __construct() {
        pdorml::$monPdo = new PDO(pdorml::$serveur . ';' . pdorml::$bdd, pdorml::$user, pdorml::$mdp);
        pdorml::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        pdorml::$monPdo = null;
    }

    public static function getPdo() {
        if (pdorml::$monPdorml == null) {
            pdorml::$monPdorml = new pdorml();
        }
        return pdorml::$monPdorml;
    }

    /*

     *  ----------------------------------------------------- CONNEXION ------------------------------------------------------------------------
     * 
     *      */

    /**
     * Information sur l'utilisateur
     * @param type $login
     * @param type $mdp
     * @return type
     */
    public function getInfosVisiteur($login, $mdp) {
        $req = "select * from admin
		where admin.login='$login' and admin.mdp='$mdp' ";
        $rs = pdorml::$monPdo->query($req);
        $ligne = $rs->fetch();
        return $ligne;
    }

    /**
     * Information sur le type de compte de l'utilisateur
     * @param type $id
     * @param type $login
     * @return type
     */
    function getTypeCompte($id, $login) {
        $req = "SELECT type from admin where idVisiteur='$id' AND login='$login' ";
        $rs = pdorml::$monPdo->query($req);
        $compte = $rs->fetch();
        return $compte;
    }

    /*

     *  ----------------------------------------------------- ARTICLE VEP ------------------------------------------------------------------------
     * 
     *      */

    /**
     * Nouvel article VEP
     * @param type $titre
     * @param type $phrase
     * @param type $contenu
     * @param type $img
     */
    public function newArticleVep($titre, $phrase, $contenu, $img) {

        $req = "insert into article_vep
        values('','$titre','$phrase','$contenu','$img','0',NOW(),'-')";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Affichage des articles VEP
     * @return type
     */
    function afficherArticleVep() {


        $req2 = "select * from article_vep";
        $res = pdorml::$monPdo->query($req2);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Affichage d'un article par rapport à son ID VEP
     * @param type $id
     * @return type
     */
    function unArticleVep($id) {
        $req = "select * from article_vep where id='$id'";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();


        return $ligne;
    }

    /**
     * Modification du status VEP
     * @param type $id
     */
    function modifyStatusVep($id) {

        $req = "SELECT * from article_vep where id='$id'";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        foreach ($ligne as $unStatus) {

            $leStatus = $unStatus['online'];
        }

        if ($leStatus == '0') {
            $req2 = "UPDATE article_vep SET online='1' WHERE id='$id'";
            pdorml::$monPdo->exec($req2);
        } else {

            $req3 = "UPDATE article_vep SET online='0' WHERE id='$id'";
            pdorml::$monPdo->exec($req3);
        }
    }

    /**
     * Suppression d'un article VEP
     * @param type $id
     */
    function deleteArticleVep($id) {
        $req = "DELETE FROM article_vep WHERE id='$id';";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Enregistrement des modifications d'un article VEP
     * @param type $id
     * @param type $titre
     * @param type $phrase
     * @param type $img
     * @param type $contenu
     */
    function updateArticleVep($id, $titre, $phrase, $img, $contenu) {
        $req = "UPDATE article_vep SET titre='$titre', phrase='$phrase', img='$img', contenu='$contenu', date_modif=NOW() WHERE id='$id'";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Affichage des 5 derniers article online VEP
     * @return type
     */
    function articleOnlineLimiteVep() {
        $req = 'SELECT * from article_vep where online = "1" ORDER BY date_article desc LIMIT 5';
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Affichage de tous les articles online VEP
     * @return type
     */
    function articleOnlineVep() {
        $req = 'SELECT * from article_vep where online = "1" ORDER BY date_article desc';
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /*

     *  ----------------------------------------------------- ARTICLE APP ------------------------------------------------------------------------
     * 
     *      */

    /**
     * Enregistrement d'un nouvel article Apprentissage/Alternance
     * @param type $titre
     * @param type $phrase
     * @param type $contenu
     * @param type $img
     */
    public function newArticleApp($titre, $phrase, $contenu, $img) {


        $req = "insert into article_app
        values('','$titre','$phrase','$contenu','$img','0',NOW(),'-')";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Affichage de tous les articles  Apprentissage/Alternance
     * @return type
     */
    function afficherArticleApp() {


        $req2 = "select * from article_app";
        $res = pdorml::$monPdo->query($req2);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Affichage d'un article par rapport à son id  Apprentissage/Alternance
     * @param type $id
     * @return type
     */
    function unArticleApp($id) {
        $req = "select * from article_app where id='$id'";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();


        return $ligne;
    }

    /**
     * Modification du status  Apprentissage/Alternance
     * @param type $id
     */
    function modifyStatusApp($id) {

        $req = "SELECT * from article_app where id='$id'";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        foreach ($ligne as $unStatus) {

            $leStatus = $unStatus['online'];
        }

        if ($leStatus == '0') {
            $req2 = "UPDATE article_app SET online='1' WHERE id='$id'";
            pdorml::$monPdo->exec($req2);
        } else {

            $req3 = "UPDATE article_app SET online='0' WHERE id='$id'";
            pdorml::$monPdo->exec($req3);
        }
    }

    /**
     * Suprresion d'un article  Apprentissage/Alternance
     * @param type $id
     */
    function deleteArticleApp($id) {
        $req = "DELETE FROM article_app WHERE id='$id';";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Enregistrement des modifications d'un article  Apprentissage/Alternance
     * @param type $id
     * @param type $titre
     * @param type $phrase
     * @param type $img
     * @param type $contenu
     */
    function updateArticleApp($id, $titre, $phrase, $img, $contenu) {
        $req = "UPDATE article_app SET titre='$titre', phrase='$phrase', img='$img', contenu='$contenu', date_modif=NOW() WHERE id='$id'";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Affichage des 5 derniers articles online  Apprentissage/Alternance
     * @return type
     */
    function articleOnlineLimiteApp() {
        $req = 'SELECT * from article_app where online = "1" ORDER BY date_article desc LIMIT 5';
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Affichage de tous les articles online  Apprentissage/Alternance
     * @return type
     */
    function articleOnlineApp() {
        $req = 'SELECT * from article_app where online = "1" ORDER BY date_article desc';
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /*

     *  ----------------------------------------------------- L'APPRENTIE ------------------------------------------------------------------------
     * 
     *      */

    /**
     * Enregistrement d'un nouveau apprentie
     * @param type $titre
     * @param type $phrase
     * @param type $url
     * @param type $dateapprentie
     */
    function newApprentie($titre, $phrase, $url, $dateapprentie) {
        $todaymodifier = substr($dateapprentie, 0, 4);

        $req = "insert into apprentie
        values('','$titre','$phrase','$url','$dateapprentie','-','$todaymodifier','0')";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Affichage de tous les apprenties
     * @return type
     */
    function afficherApprentie() {


        $req2 = "select * from apprentie";
        $res = pdorml::$monPdo->query($req2);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Modification du sttus de l'apprentie
     * @param type $id
     */
    function modifyStatusApprentie($id) {

        $req = "SELECT * from apprentie where id='$id'";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        foreach ($ligne as $unStatus) {

            $leStatus = $unStatus['online'];
        }

        if ($leStatus == '0') {
            $req2 = "UPDATE apprentie SET online='1' WHERE id='$id'";
            pdorml::$monPdo->exec($req2);
        } else {

            $req3 = "UPDATE apprentie SET online='0' WHERE id='$id'";
            pdorml::$monPdo->exec($req3);
        }
    }

    /**
     * Affichage des apprenties online et par odre croissant
     * @return type
     */
    function onlineApprentie() {
        $req = "SELECT id,titre, phrase, year FROM apprentie WHERE online='1' ORDER BY year DESC";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();
        return $ligne;
    }

    /**
     * Affichage d'un apprentie par rapport à son id
     * @param type $id
     * @return type
     */
    function unApprentie($id) {
        $req = "select * from apprentie where id='$id'";
        $res = pdorml::$monPdo->query($req);
        $ligne = $res->fetchAll();


        return $ligne;
    }

    /**
     * Enregistrement des modifications de l'apprentie
     * @param type $id
     * @param type $titre
     * @param type $phrase
     * @param type $pdf
     * @param type $complte
     */
    function updateApprentie($id, $titre, $phrase, $pdf, $complte) {
        $req = "UPDATE apprentie SET titre='$titre', phrase='$phrase', pdf='$pdf',date_apprentie='$complte', date_modif=NOW() WHERE id='$id'";
        pdorml::$monPdo->exec($req);
    }

    /**
     * Suppression d'un apprentie
     * @param type $id
     */
    function deleteApprentie($id) {
        $req = "DELETE FROM apprentie WHERE id='$id';";
        pdorml::$monPdo->exec($req);
    }

}
