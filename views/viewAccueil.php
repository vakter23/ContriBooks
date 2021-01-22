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
        <?php foreach($newBestBook as $book): ?>
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

<?php if (isset($_SESSION["id"])):?>
    <?php if(empty($likedList)):?>
        <div>
            <p>Vous n'avez pas encore aimé de livre ! N'hésitez pas à liker vos livres préférés pour que nous puissions vous proposer des oeuvres susceptibles de vous plaire !</p>
        </div>
    <?php else:?>
        <?php ; ?>
        <div class="container">
            <h2><a>Vous avez aimé...</a></h2>
            <ul class="nav justify-content-center mw-25">
                <?php foreach($likedList as $book): ?>
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
            <h2><a>Alors vous aimerez sûrement...</a></h2>
            <ul class="nav justify-content-center mw-25">
                <?php foreach($likeList as $book): ?>
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
    <?php endif ?>
<!--    --><?php //if(!empty($likelist)):?>
<!--        <form method="post" action="/ContriBooks/Book?ISBN=--><?//= $ISBN ?><!--">-->
<!--            <input type="submit" name="like" id="like-button" value="Je n'aime pas">-->
<!--        </form>-->
<!--    --><?php //else: ?>
<!--        <form method="post" action="/ContriBooks/Book?ISBN=--><?//= $ISBN ?><!--">-->
<!--            <input type="submit" name="like" id="like-button" value="J'aime">-->
<!--        </form>-->
<!--    --><?php //endif; ?>
<?php endif; ?>
