<?php $this->_t = 'Contribooks'; ?>

<div class="container">
    <h2><a>Auteur </a></h2>
    <ul class="nav justify-content-center mw-25">
        <?php foreach ($authors as $author): ?>

            <h3> Profil de : <a
                        href="/Contribooks/Author?author=<?= $author->getId_author() ?>"><?= $author->getFirst_name_author(); ?> <?= $author->getLast_name_author(); ?></a>
            </h3>
            <li class="nav-item">
                <a class="nav-link active" href="/Contribooks/Author?author=<?= $author->getId_author() ?>"></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="container">
    <ul class="nav justify-content-center mw-25">
        <?php foreach ($books

        as $book):
        $ISBN = $book->getISBN();
        $img_link = "$ISBN" . '.jpg';
        $filename = 'utils/media/img/book/' . $img_link;
        ?>
        <li class="nav-item">
            <img class="img-thumbnail img-responsive nav-link" src="<?= $filename ?>"
                 style="width: 150px; height: 204px">
            <a class="nav-link active" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"> <?= $book->getTitle_book(); ?> </a>

        </li>
    </ul>
    <h3>Biographie : </h3>
    <p> <?= $author->getBiography_author() ?></p>

    <h3>Date de naissance : </h3>
    <p> <?= $author->getDate_of_birth() ?></p>
    <?php if (!is_null($author->getDate_of_death())): ?>
        <h3>Date de décès : </h3>
        <p> <?= $author->getDate_of_death() ?></p>
    <?php else: ?>
        <p>Cet auteur est encore en vie ! </p>
    <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</div>