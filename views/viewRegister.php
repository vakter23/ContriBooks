<?php
?>

<div class="border border-1 mx-auto" style="width:400px">
    <form action="/ContriBooks/Register?check=yes" accept-charset="UTF-8" method="post">
        <label for="login_field" class="">Pseudo</label>
        <input type="text" name="login" class="form-control input-block">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="form-control form-control input-block">
        <label for="email">Email</label></td>
        <input type="email" name="email" placeholder="saisir votre Email" class="form-control input-block"/>
        <input type="submit" value="S'inscrire" class="btn btn-primary btn-block">
    </form>
</div>
