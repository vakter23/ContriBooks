<?php $this->_t = 'Contribooks';
?>
<div class="container">
    </br>
    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == 9){
        echo '<a class="nav-link active" href="/Contribooks/Admin">Adminstration</a></li>';
    } ?>
    <h2><a>Votre profil : </a></h2>
    <hr>


    <?php
    foreach ($stats as $stat):
        $username = $stat->getUsername();
        if($stat->getEmail() == null){}
        else
            $email = $stat->getEmail();
    endforeach;
    ?>

    <h3>Votre adresse eMail associée : </h3>
    <ul><?= $email ?></ul>

    <h3>Votre Pseudo : </h3>

    <ul><?= $username ?></ul>

    <h3>Votre Wishlist : </h3>
    <ul><?php foreach ($books as $book):?>
        <li>
            <?php $isbn = $book->getISBN()?>
            <a class="nav-link active" href="/Contribooks/Book?ISBN=<?= $isbn ?>"> <?= $book->getTitle_book(); ?>  </a></li>
        <?php endforeach;?>
    </ul>

    <h3>Vos commentaires : </h3>
    <?php
    foreach ($comments as $comment):
        $notice = $comment->getOpinion();
        $title = $comment->getISBN();
        /* Comment obtenir un titre a partir de son ISBN ? Ajouter getBook ?*/
        ?>
        <ul><p>  <?= $notice ?> </p></ul>
    <?php endforeach; ?>
    </br>

</div>
<div class="container">

    <?php ?>

    <?php ?>

</div>
