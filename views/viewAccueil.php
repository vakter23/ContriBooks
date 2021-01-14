<?php  $this->_t = 'Contribooks'; ?>

<div class="container">
    <h2><a>Nouveautés</a></h2>
    <ul class="nav justify-content-center mw-25">
        <?php foreach($newBooks as $book): ?>
            <?php $ISBN = $book->getISBN();
            $img_link = "$ISBN".'.jpg';
            $filename = 'utils/media/img/book/'.$img_link;
            ?>

            <li class="nav-item">
                <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                <a class="nav-link" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $book->getTitle_book() ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="container">
    <h2><a>Meilleurs livres du moments</a></h2>
    <ul class="nav justify-content-center mw-25">
        <?php foreach($newBooks as $book): ?>
            <?php $ISBN = $book->getISBN();
            $img_link = "$ISBN".'.jpg';
            $filename = 'utils/media/img/book/'.$img_link;
            ?>

            <li class="nav-item">
                <img class="img-thumbnail img-responsive nav-link" src="<?= $filename ?>" style="width: 150px; height: 204px">
                <a class="nav-link active" href="viewBook.php?ISBN=<?= $ISBN ?>"><?= $book->getTitle_book() ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>