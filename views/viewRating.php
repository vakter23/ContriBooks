<?php $this->_t = 'Rate'; ?>

    <div class="d-inline">
        <ul class="nav justify-content-center mw-25">
            <?php foreach($newBooks as $book): ?>
                <?php $ISBN = $book->getISBN();
                $img_link = "$ISBN".'.jpg';
                $filename = 'utils/media/img/book/'.$img_link;
                ?>
                <li class="nav-item book-list" genre="<?= $book->getId_genre()?>" type="<?= $book->getId_type()?>" author="<?= $book->getId_author()?>" style="display:block;">
                    <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                    <a class="nav-link" href="viewBook.php?ISBN=<?= $ISBN ?>"><?= $book->getTitle_book() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
