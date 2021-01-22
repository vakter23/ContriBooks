<div class="border border-1 mx-auto" style="width:400px">
    <form action="/ContriBooks/Register?" accept-charset="UTF-8" method="post">
        <label for="login_field" class="">Pseudo</label>
        <input type="text" name="login" class="form-control input-block">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="form-control form-control input-block">
        <label for="email">Email</label></td>
        <input type="email" name="email" placeholder="saisir votre Email" class="form-control input-block"/>
        <input type="submit" name="check" id="register-button" value="S'inscrire" class="btn btn-primary btn-block">
    </form>
</div>
<?php
if (isset($_POST['check'])) {
    if ($_POST['check'] == false) {
        echo '<p>Identifiant ou email incorrect</p>';
    } else {
        echo '<p>Vous êtes maintenant inscrit ! Vous pouvez vous connecter <a href="/ContriBooks/Connexion">ici</a></p>';
    }
}
?>

