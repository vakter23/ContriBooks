<?php ?>

<div class="container p-5"     <?php if(!isset($_SESSION['id'])) echo 'style="display:none;"'?>>
    <h1 class="font-weight-bold">Proposez-nous votre livre</h1>
    <form method="POST" action="/Contribooks/RequestBook">
        <div><label>ISBN:</label><div class="float-right font-italic">(Écrivez le sans les tirets)</div></div>
        <div><input type="number" name="ISBN" min="1" step="1" class="form-control" required/></div>
        <br>
        <div><label>Nom du livre:</label><div class="float-right font-italic"></div></div>
        <div><input type="text" name="Title" class="form-control" required/></div>
        <br>
        <div><label>Année de publication:</label><div class="float-right font-italic">(Seul les livres deja publiés sont autorisés)</div></div>
        <div><input type="number" name="Year" min="1" step="1" max="2021" class="form-control" required/></div>
        <br>
        <div><label>Auteur:</label><div class="float-right font-italic"></div></div>
        <div><input type="text" name="Author" class="form-control" required/></div>
        <br>
        <div><label>Synopsis:</label><div class="float-right font-italic"></div></div>
        <div><input type="text" name="Subject" class="form-control" required/></div>
        <br>
        <input type="submit" value="Send" class="btn btn-primary form-control" />
    </form>
</div>

<?php if(!isset($_SESSION['id'])): ?>
    <div class="container p-5">
        <h1 class="font-weight-bold">Proposez-nous votre livre</h1>
        <h1>Si vous voulez nous proposer un livre <br>Veuillez vous connectez</h1>
        <a href="/Contribooks/Connexion" class="btn btn-primary form-control" role="button">Connexion</a>

    </div>

<?php endif; ?>