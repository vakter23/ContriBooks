<?php  $this->_t = 'Accueil'; ?>

<div class="container">
    <h2><a>Nouveautés</a></h2>
    <ul class="nav justify-content-center mw-25">
        <?php foreach($newBooks as $book): ?>
            <?php $ISBN = $book->getISBN();
            $img_link = "$ISBN".'.jpg';
            $filename = 'utils/media/img/book/'.$img_link;
            if(!file_exists('utils/media/img/book/'.$img_link))$filename='utils/media/img/book/NotFound.jpg';
            ?>
            <ul class="list-inline text-center align-items-center">
                <ul class="list-inline text-center align-items-center">
                    <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                </ul>
                <ul class="list-inline text-center align-items-center">
                    <a class="nav-link active" style="font-size: 14px;" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= substr($book->getTitle_book(),0,40) ?></a>
                </ul>
            </ul>
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
            if(!file_exists('utils/media/img/book/'.$img_link))$filename='utils/media/img/book/NotFound.jpg';

            ?>

            <ul class="list-inline text-center align-items-center">
                <ul class="list-inline text-center align-items-center">
                    <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                </ul>
                <ul class="list-inline text-center align-items-center">
                    <a class="nav-link active" style="font-size: 14px;" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= substr($book->getTitle_book(),0,40) ?></a>
                </ul>
            </ul>
        <?php endforeach; ?>
    </ul>
</div>