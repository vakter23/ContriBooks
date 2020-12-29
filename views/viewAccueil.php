<?php  $this->_t = 'Contribooks';

foreach($books as $article): ?>
<h2><?= $article->getISBN() ?></h2>
    <p><?= $article->getId_author() ?></p>

<?php endforeach; ?>
