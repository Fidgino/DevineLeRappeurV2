<?PHP
include_once('views/header.php'); ?>

<section class="container__form">
    <form class="form" action="./fonctions/fonctionDevineRappeur.php" method="post">
        <div class="labelAndInput">
            <label for="clientPseudo">Pseudo :</label>
            <input class="inputPseudo" type="text" name="clientPseudo">
        </div>
        <div class="labelAndInput">
            <label for="clientMail">Mail :</label>
            <input class="inputMail" type="email" name="clientMail">
        </div>
        <div class="labelAndInput">
            <label for="clientPassword">Mot de passe :</label>
            <input class="inputPassword" type="password" name="clientPassword">
        </div>
        <button class="form__submit">Creer un compte</button>
    </form>
</section>
<?PHP
include("views/footer.php");
?>