<?php $this->_t = 'Contribooks';
?>
<div class="container">
    </br>
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

    <h3>Votre adresse eMail associée : </h3>
    <ul><?= $email ?></ul>

    <h3>Votre Pseudo : </h3>

    <ul><?= $username ?></ul>

    <h3>Votre Biographie : </h3>
    <?php if (is_null($stat->getBiography_user())): ?>
        <p>Vous n'avez pas encore de biographie, ajoutez-en une ! </p>


    <?php else: ?>
        <p> <?= $stat->getBiography_user() ?></p>
    <?php endif; ?>
    <form id="form" method="post">
        <!-- need to supply post id with hidden fild -->

        <label>

        </label>
        <textarea name="bio"cols="40" rows="3" placeholder="Tapez votre biographie...." required><?= $stat->getBiography_user() ?></textarea>
        <input type="submit" name="biography" value="Confirmer">
    </form>
    <h3>Votre Wishlist : </h3>
    <ul><?php foreach ($books as $book): ?>
            <li>
                <?php $isbn = $book->getISBN() ?>
                <a class="nav-link active"
                   href="/Contribooks/Book?ISBN=<?= $isbn ?>"> <?= $book->getTitle_book(); ?>  </a></li>
        <?php endforeach; ?>
    </ul>

    <h3>Vos commentaires : </h3>
    <?php
    foreach ($comments as $comment):
        $notice = $comment->getOpinion();
        $title = $comment->getISBN();
        ?>
        <ul><p>  <?= $notice ?> </p></ul>
    <?php endforeach; ?>
    </br>

</div>
<div class="container">

    <?php ?>

    <?php ?>

</div>
