<?php  $this->_t = 'Contribooks'; ?>

<ul class="nav justify-content-center mw-25">
    <?php foreach($books as $book): ?>
        <?php $ISBN = $book->getISBN();
        $img_link = "$ISBN".'.jpg';
        $filename = 'utils/media/img/'.$img_link;
        ?>

        <li class="nav-item">
            <a class="nav-link active" href="#="><?= $book->getTitle_book() ?></a>
            <img class="img-thumbnail img-responsive" src="<?= $filename ?>" style="width: 150px; height: 204px">
        </li>
    <?php endforeach; ?>
</ul>
