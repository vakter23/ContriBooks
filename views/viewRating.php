<?php $this->_t = 'Rate'; ?>

<div class="container" style="padding-top: 20px;padding-bottom: 20px;">
    <h1>Classement selon les avis des utilisateurs</h1>
    <div class="row">
        <div class="">
            <div class="d-flex flex-column">
                <?php
                $i = 1;
                foreach($newBooks as $book): ?>
                <?php $ISBN = $book->getISBN();
                $img_link = "$ISBN".'.jpg';
                $filename = 'utils/media/img/book/'.$img_link;
                if(!file_exists($filename)) $filename = 'utils/media/img/book/NotFound.jpg';
                ?>
                <div class="p-2 nav-item book-list" genre="<?= $book->getId_genre()?>" type="<?= $book->getId_type()?>" author="<?= $book->getId_author()?>"">
                <div class="row border border-primary" style="background-color: #B9C6CE">
                    <div class="col border-right border-primary">
                        <p class="border border-primary " style="font-size: 55px; margin-top: 55px;padding: 10px;padding-left: 60px; "><?= $i ?></p>
                    </div>

                    <div class="col border-right border-primary">
                        <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 200px">
                    </div>
                    <div class="col-6">
                        <a class="font-weight-bold" style="font-size: 25px;" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $book->getTitle_book() ?></a>
                        <p style="font-size: 17px;">
                            <?= mb_strimwidth($book->getSynopsis_book(), 0, 420," ..."); ?>
                        </p>
                    </div>
                    <div class="col text-center ">
                        <p class="border border-primary rounded-circle" style="font-size: 55px; margin-top: 55px;padding: 10px;"><?= $book->getRate() ?></p>
                    </div>
                </div>

            </div>
            <?php $i++ ?>
            <?php endforeach; ?>
        </div>
    </div>

</div>
