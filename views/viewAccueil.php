<?php  $this->_t = 'Monblog';

foreach($articles as $article): ?>
<h2><?= $article->title() ?></h2>
<p><?= $article->content() ?></p>

<?php endforeach; ?>
