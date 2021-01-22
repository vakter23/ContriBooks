<?php $this->_t = 'Contribooks'; ?>


<div class="container">
    <?php foreach ($book as $livre):
    $ISBN = $livre->getISBN(); ?>

    <ul class="nav justify-content-center mw-25">
        <?php
        $img_link = "$ISBN" . '.jpg';
        $filename = 'utils/media/img/book/' . $img_link;
        ?>

        <?php endforeach; ?>
        <?php foreach ($authors as $author):
            ?>

            <li class="nav-item">
                <h2><a class="nav-link" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $livre->getTitle_book() ?></a>
                </h2>
                <h3> Écrit par : <a
                            href="/Contribooks/Author?author=<?= $author->getId_author() ?>"><?= $author->getFirst_name_author(); ?> <?= $author->getLast_name_author(); ?></a>
                </h3>
                <p>  <?= $livre->getSynopsis_book() ?> </p>
                <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="container">
    <ul class="nav justify-content-center mw-25">


        <figure class="figure-synopsis">


        </figure>
        <br class="figure-review">

        <div class="post">
            <!-- post will be placed here from db -->
        </div>
        <div class="comment-block">
            <!-- comment will be apped here from db-->
        </div>
        <!-- comment form -->
        <br>
    </ul>

    <h2>Commentaires : </h2>
    <br>
    <ul>
        <?php

        if (isset($_SESSION["id"])):
        ?>
        <?php if(!empty($likelist)):?>
            <form method="post" action="/ContriBooks/Book?ISBN=<?= $ISBN ?>">
                <input type="submit" name="like" id="like-button" value="Je n'aime pas">
            </form>
        <?php else: ?>
            <form method="post" action="/ContriBooks/Book?ISBN=<?= $ISBN ?>">
                <input type="submit" name="like" id="like-button" value="J'aime">
            </form>
        <?php endif; ?>

        <form id="form" method="post" action="/ContriBooks/Book?ISBN=<?= $ISBN ?>">
            <!-- need to supply post id with hidden fild -->
            <input type="hidden" name="postid" value="1">
            <label>
                <span>Score :</span>
                <input type="text" name="score" id="comment-name" placeholder="Le score (0-5)" required
                       value="<?php if (!empty($commentaire)) {
                           echo $commentaire[0]->getScore();
                       } ?>">

            </label>
            <br>
            <label>
                <span>Votre commentaire :</span>
                <textarea name="comment" id="comment" cols="30" rows="1" placeholder="Type your comment here...."
                          required><?php if (!empty($commentaire)) {
                        echo $commentaire[0]->getOpinion();
                    } ?> </textarea>
            </label>

            <?php
            if (isset($commentaire) && count($commentaire) != 0):?>
                <input type="submit" name="statusComment" id="submit" value="Edit">
            <?php else: ?>
                <input type="submit" name="statusComment" id="submit" value="Submit Comment">
            <?php endif; ?>
            <?php
            else:
                echo "Vous devez être connecté pour poster un commentaire "; ?>
            <?php endif; ?>
        </form>

        <br>

        <?php
        $i = 1;
        foreach ($reviews as $review):
            echo("Commentaire n°" . $i . " : ");
            $notice = $review->getOpinion();
            $i = $i + 1;
            ?>
            <p>  <?= $notice ?> </p>
        <?php endforeach; ?>
        </figure>
    </ul>
</div>
