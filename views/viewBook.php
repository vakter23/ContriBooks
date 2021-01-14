<?php  $this->_t = 'Contribooks'; ?>





<div class="container">
    <h2><a>Nouveautés</a></h2>
    <ul class="nav justify-content-center mw-25">

            <?php foreach ($book as $livre ):
            $ISBN = $livre->getISBN();
            $img_link = "$ISBN".'.jpg';
            $filename = 'utils/media/img/book/'.$img_link;
             ?>

        <?php endforeach; ?>
            <li class="nav-item">
                <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                <a class="nav-link" href="/ContriBooks/Book?ISBN=<?= $ISBN ?>"><?= $livre->getTitle_book() ?></a>
            </li>

    </ul>
</div>
<div class="container">
    <ul class="nav justify-content-center mw-25">

<!--            --><?php //$ISBN = $book->getISBN();
//            $img_link = "$ISBN".'.jpg';
//            $filename = 'utils/media/img/book/'.$img_link;
//            ?>

            <figure class="figure-synopsis">
                <a class="figure-a-synopsis"</a>
                <p>  <?= $livre->getSynopsis_book() ?> </p>
            </figure>


            <figure class="figure-review">
<?php
    $i = 0;
    foreach ($reviews as $review ):
    echo i;
    $notice = $review ->getReview();
    $i = $i+1;
?>
    <a class="figure-a-synopsis"</a>
    <p>  <?= $notice ?> </p>
<?php endforeach; ?>
            </figure>
    </ul>
</div>