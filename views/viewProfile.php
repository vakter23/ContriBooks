<?php $this->_t = 'Contribooks';
?>
<div class="container">
    </br>
    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == 9) {
        echo '<a class="nav-link active" href="/Contribooks/Admin">Adminstration</a></li>';
    } else {
        echo '<a class="nav-link active" href="/Contribooks/Report">Signalement</a></li>';
    } ?>
    <h2><a>Votre profil : </a></h2>
    <hr>
    <?php
    foreach ($stats as $stat):
        $username = $stat->getUsername();
        if ($stat->getEmail() == null) {
        } else
            $email = $stat->getEmail();
    endforeach;
    ?>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h3>Votre adresse eMail associée : </h3>
            <ul><?= $email ?></ul>
        </div>
        <div class="col">
            <h3>Votre Pseudo : </h3>
            <ul><?= $username ?></ul>
        </div>
    </div>
    <div class="col">
        <form id="form" method="post">
            <textarea name="bio" cols="40" rows="3" placeholder="Tapez votre biographie...."
                      required><?= $stat->getBiography_user() ?></textarea>
            <input type="submit" name="biography" value="Confirmer">
        </form>
    </div>
    <div class="row">
        <div class="col-6">
        <h3>Vos commentaires : </h3>
        <?php
        foreach ($comments as $comment):
            $notice = $comment->getOpinion();
            $title = $comment->getISBN();
            ?>
            <div class="col-6"><ul><p>  <?= $notice ?> </p></ul></div>
        <?php endforeach; ?>
        </div>
        <div class="col-6">
            <h3>Votre Wishlist : </h3>
            <ul><?php foreach ($books as $book): ?>
                    <li>
                        <?php $isbn = $book->getISBN() ?>
                        <a class="nav-link active"
                           href="/Contribooks/Book?ISBN=<?= $isbn ?>"> <?= $book->getTitle_book(); ?>  </a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
