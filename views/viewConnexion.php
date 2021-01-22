<?php  $this->_t = 'Connexion'; ?>

<div class="border border-1 mx-auto" style="width:300px">
    <form action="/ContriBooks/Connexion" accept-charset="UTF-8" method="post">
        <label for="login_field" class="">Pseudo</label>
        <input type="text" name="login" class="form-control input-block">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="form-control form-control input-block">
        <input type="submit" name="submit" value="Se Connecter" class="btn btn-primary btn-block">
    </form>
    <p class="login-callout mt-3">
        Nouveau sur Contribooks?
        <a href="Register">Créer un compte</a>.
    </p>
</div>

<?php
if(isset($_POST['submit'])) {
    if($_POST['submit'] == 'connected') {
        header('Location: /ContriBooks/Accueil');
        exit();
    }
    else {
        echo '<p>Identifiants incorrectes</p>';
    }
}
?>


