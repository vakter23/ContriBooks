<?php $this->_t = 'Rate'; ?>
<div class="container">
<h1>Nouveautés par genre</h1>
    <div class="d-inline">
        <h2>Roman</h2>
        <ul class="nav justify-content-center mw-25">
            <?php foreach($bookGenre1 as $book): ?>
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

</div>
<div class="container">
    <div class="d-inline">
        <h2>BD</h2>
        <ul class="nav justify-content-center mw-25">
            <?php foreach($bookGenre2 as $book): ?>
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
</div>
