<!--Page de connexion avec le framework @Boostrap -->

<h1 class="uk-heading-line uk-text-center"><span>Authentification administrateur</span></h1>
<br>

<form method="POST" action="index.php?uc=connexion&action=valideConnexion">

    <div class="moove">
        <div class="container">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="login">
            </div>
        </div>

        <div class="container">
            <div class="uk-inline">
                <span class="uk-form-icon " uk-icon="icon: lock"></span>
                <input class="uk-input" type="password" name="mdp">
            </div>

        </div>
        <div class="container">
            <div class="uk-inline">

                <input type="submit" class="btn btn-success btn-send" value="Envoie" name="connexion">
            </div>

        </div>
    </div>

</form>

<style>
    .moove{
        position:relative;
        left: 22%;

    }

</style>