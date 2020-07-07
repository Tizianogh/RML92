<?php


//Fonction pour envoyer des mails au format html. Cette fonction correspond principalement à la page de contact du site.
function contact() {

    if (isset($_POST['civilite']) AND isset($_POST['situation']) AND isset($_POST['nom']) AND isset($_POST['prenom'])AND isset($_POST['adresse']) AND isset($_POST['cp']) AND isset($_POST['ville']) AND isset($_POST['complement']) AND isset($_POST['email']) AND isset($_POST['tel'])) {



        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"RML92"<contact@rml92.org>' . "\n";
        $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
        $header .= 'Content-Transfer-Encoding: 8bit';

        $message = '
		<html>
			<body>
				<div align="center">
					<img src="http://image.noelshack.com/fichiers/2018/50/2/1544519908-unnamed.gif"/>
					<br />
                                        <u>Civilité de l\'expéditeur :</u>' . $_POST['civilite'] . '<br />
					<u>Nom de l\'expéditeur :</u>' . $_POST['nom'] . '<br />
                                            <u>Mail de l\'expéditeur :</u>' . $_POST['prenom'] . '<br />
                                                      <u>situation de l\'expéditeur :</u>' . $_POST['situation'] . '<br />
					<u>Mail de l\'expéditeur :</u>' . $_POST['email'] . '<br />
                                                  <u>adresse de l\'expéditeur :</u>' . $_POST['adresse'] . '<br />
                                                            <u>Code postal de l\'expéditeur :</u>' . $_POST['cp'] . '<br />
                                                                      <u>Ville de l\'expéditeur :</u>' . $_POST['ville'] . '<br />
                                                                                <u>Complément de l\'expéditeur :</u>' . $_POST['complement'] . '<br />
                                                                                          <u>Téléphone de l\'expéditeur :</u>' . $_POST['tel'] . '<br />
                                            
                                          
					<br />
					' . nl2br($_POST['message']) . '
					
				</div>
			</body>
		</html>
		';

        mail("tiziano.ghisotti@gmail.com", "CONTACT - RML92", $message, $header);
        $msg = "Votre message a bien été envoyé !";
    }
}

/**
 * 
 * PARTIE DES SESSIONS 
 * 
 * 
 * 
 */

function estConnecte(){
  return isset($_SESSION['idVisiteur']);
}

function getTypeAdmin(){
    
    return isset($_SESSION['type']);
    
}
/**
 * Enregistre dans une variable session les infos d'un visiteur

 * @param $id
 * @param $nom
 * @param $type
 */
function connecter($id,$login,$type){
	$_SESSION['idVisiteur']= $id;
	$_SESSION['login']= $login;
        $_SESSION['type']=$type;
       

}

 
/**
 * Détruit la session active
 */
function deconnecter(){
	session_destroy();
}
?>