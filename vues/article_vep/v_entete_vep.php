



<!-- Main Nav avec le framework @Ulkit -->


<!DOCTYPE html>
<html>
    <head><?php include 'include/style.php'; ?>
    </head>
    <body>
        <!-- Menu mobile -->
        <nav class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-hidden@m" id="menu" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" href="#" uk-toggle="target: #menu-mobile">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                </a>
            </div>

        </nav>
        <div class="uk-offcanvas-content">
            <div id="menu-mobile" uk-offcanvas="mode: push; overlay: true">
                <div class="uk-offcanvas-bar">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <ul class="uk-nav uk-nav-default">
                        <li><a href="index.php"><span uk-icon="home"></span></a></li>
                        <li
                            ><a href="#">RML92</a>
                            <div class="uk-nav-sub">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="index.php?uc=affichage&action=localisation">Nous rencontrer</a></li>
                                    <li><a href="index.php?uc=affichage&action=equipe">L'équipe</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#">Entreprise</a>
                            <div class="uk-nav-sub">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Dispositifs</a></li>
                                    <li><a href="#">Alternance</a></li>
                                    <li><a href="index.php?uc=affichage&action=apprentissage">Apprentissage</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Partenaire</a>
                            <div class="uk-nav-sub">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="index.php?uc=affichage&action=institutionnels">Institutionnels</a></li>
                                    <li><a href="index.php?uc=affichage&action=economiques">Acteurs économiques</a></li>
                                    <li><a href="index.php?uc=affichage&action=sociaux">Acteurs sociaux</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Présentation des missions locales</a>
                            <div class="uk-nav-sub">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="index.php?uc=affichage&action=annuaire">Mission locale des Hauts-De-Seine</a></li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">VEP</a>
                            <div class="uk-nav-sub">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li> <a href="index.php?uc=vep&action=presentation">Présentation</a></li>
                                    <li> <a href="#">LCD</a></li>
                                    <li> <a href="index.php?uc=vep&action=article">Nos articles</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Alternance/Apprentissage</a>
                            <div class="uk-nav-sub">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li> <a href="index.php?uc=app&action=presentation">Présentation</a></li>
                                    <li> <a href="index.php?uc=app&action=article">Nos articles</a></li>
                                    <li> <a href="index.php?uc=apprentie&action=liste">L'apprenti(e)</a></li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="index.php?uc=affichage&action=appel">Appels à projets</a></li>
                        <li><a href="index.php?uc=affichage&action=milo">I-MILO</a></li>

                        <li><a href="index.php?uc=affichage&action=faq">FAQ</a></li>
                        <li><a href="index.php?uc=affichage&action=contact">Contact</a></li>
                           <li><a href="index.php?uc=vep&action=adminapp">ADMIN</a></li>
             <li><a href="index.php?uc=deconnexion&action=deconnexion">Déconnexion</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Menu desktop -->
        <nav class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-visible@l" id="menu" uk-navbar>

            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li><a href="index.php"><span uk-icon="home"></span></a></li>
                    <li
                        ><a href="#">RML92</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="index.php?uc=affichage&action=localisation">Nous rencontrer</a></li>
                                <li><a href="index.php?uc=affichage&action=equipe">L'équipe</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="#">Entreprise</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Dispositifs</a></li>
                                <li><a href="#">Alternance</a></li>
                                <li><a href="index.php?uc=affichage&action=apprentissage">Apprentissage</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Partenaire</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="index.php?uc=affichage&action=institutionnels">Institutionnels</a></li>
                                <li><a href="index.php?uc=affichage&action=economiques">Acteurs économiques</a></li>
                                <li><a href="index.php?uc=affichage&action=sociaux">Acteurs sociaux</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Présentation des missions locales</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="index.php?uc=affichage&action=annuaire">Mission locale des Hauts-De-Seine</a></li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">VEP</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li> <a href="index.php?uc=vep&action=presentation">Présentation</a></li>
                                <li> <a href="#">LCD</a></li>
                                <li> <a href="index.php?uc=vep&action=article">Nos articles</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Alternance/Apprentissage</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li> <a href="index.php?uc=app&action=presentation">Présentation</a></li>
                                <li> <a href="index.php?uc=app&action=article">Nos articles</a></li>
                                <li> <a href="index.php?uc=apprentie&action=liste">L'apprenti(e)</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="index.php?uc=affichage&action=appel">Appels à projets</a></li>
                    <li><a href="index.php?uc=affichage&action=milo">I-MILO</a></li>

                    <li><a href="index.php?uc=affichage&action=faq">FAQ</a></li>
                    <li><a href="index.php?uc=affichage&action=contact">Contact</a></li>
                    <li><a href="index.php?uc=vep&action=adminapp">ADMIN</a></li>

                </ul>
            </div>
            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li><a href="index.php?uc=deconnexion&action=deconnexion">Déconnexion</a></li>
                </ul>

            </div>
        </nav>
        <!-- Fin menu -->
        <img class='banniere' src='images/paper.jpg'></img>



