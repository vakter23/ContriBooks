<?php $this->_t = 'Contribooks'; ?>


<div class="container">


    <?php foreach ($book as $livre):
        $ISBN = $livre->getISBN();
        $genre = $livre->getId_genre() ?>
    <?php endforeach; ?>

    <?php
    $img_link = "$ISBN" . '.jpg';
    $filename = 'utils/media/img/book/' . $img_link;
    if (!file_exists('utils/media/img/book/' . $img_link)) $filename = 'utils/media/img/book/NotFound.jpg';
    ?>
    <?php foreach ($authors as $author): ?>

    <?php endforeach; ?>
</div>
<div class="container">
    <?php
    $i = 0;
    foreach ($allbooks as $livre):
        if ($livre->getId_genre() == $genre && $livre->getISBN() != $ISBN && $i < 3):
            $i + 1 ?>
            <?php $img_link = $livre->getISBN() . '.jpg';
            $filename = 'utils/media/img/book/' . $img_link;
            if (!file_exists('utils/media/img/book/' . $img_link)) $filename = 'utils/media/img/book/NotFound.jpg';
            ?>
        <?php endif;
    endforeach; ?>
</div>
<div class="container">
    <div class="row" style="background-color: #B9C6CE;padding: 20px;font-size: 20px;">
        <div class="col-6 col-md-4"><img class="" src="<?= $filename ?>" style="width: 250px; height: 300px"></div>
        <div class="col-6 col-md-4">
            <div class="row">
                <div style="margin-right: 20px" class="col-6 col-sm-3">
                    <p><?= $livre->getTitle_book() ?></p>
                </div>
                <div class="w-100"></div>
                <div class="col-6 col-sm-3"><p> Écrit par :<a
                                href="/Contribooks/Author?author=<?= $author->getId_author() ?>"><?= $author->getFirst_name_author(); ?><?= $author->getLast_name_author(); ?></a>
                    </p></div>
                <div class="w-100"></div>
                <div class="col-6 col-sm-3"><?= $livre->getDate_of_publication() ?></div>
                <div class="w-100"></div>
                <br>
                <div class="col-6 col-sm-3"><?= $livre->getRate() ?></div>
                <div class="w-100"></div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <p>
                <?= $livre->getSynopsis_book() ?>
            </p>
            <?php
            if (isset($_SESSION["id"])):
            ?>
            <?php if (!empty($likelist)): ?>
                <form method="post" action="/ContriBooks/Book?ISBN=<?= $ISBN ?>">
                    <input type="submit" name="like" id="like-button" value="Je n'aime pas">
                </form>
            <?php else: ?>
                <form method="post" action="/ContriBooks/Book?ISBN=<?= $ISBN ?>">
                    <input type="submit" name="like" id="like-button" value="J'aime">
                </form>
            <?php endif; ?>

        </div>
    </div>
    <div class="container" style="padding: 30px;">
        <h2>Livres du même genre : </h2>
        <?php
        $i = 0;
        foreach ($allbooks as $livre):
            if ($livre->getId_genre() == $genre && $livre->getISBN() != $ISBN && $i < 3):
                $i + 1 ?>

                <?php $img_link = $livre->getISBN() . '.jpg';
                $filename = 'utils/media/img/book/' . $img_link;
                if (!file_exists('utils/media/img/book/' . $img_link)) $filename = 'utils/media/img/book/NotFound.jpg';

                ?>  <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                <a href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $livre->getTitle_book() ?></a>
            <?php endif;
        endforeach; ?>
    </div>
    <div class="row">
        <h2>Commentaires : </h2>
        <br>
        <ul>
            <div class="container">
                <form id="form" method="post">
                    <!-- need to supply post id with hidden fild -->
                    <input type="hidden" name="postid" value="1">
                    <label>
                        <span>Note :</span>
                        <input type="text" name="score" id="score-data" placeholder="Le score (0-5)" required
                               value="<?php if (!empty($userComments)) {
                                   foreach ($userComments as $comment) {
                                       if ($comment->getId_user() == $_SESSION["id"])
                                           echo $comment->getScore();
                                   }
                               } ?>">
                    </label>
                    <br>
                    <label>
                        <span>Votre commentaire :</span>
                        <textarea name="comment" id="comment-data" cols="30" rows="1"
                                  placeholder="Type your comment here...."
                                  required><?php if (!empty($userComments)) {
                                foreach ($userComments as $comment) {
                                    if ($comment->getId_user() == $_SESSION["id"])
                                        echo $comment->getOpinion();
                                }
                            }
                            ?></textarea>
                    </label>
                    <?php
                    if (isset($commentaires) && count($userComments) != 0 && count($commentaires) != 0):
                        foreach ($userComments as $comment) {
                            echo "1";
                            if ($_SESSION["id"] == $comment->getId_user()) {
                                echo "2";
                            }
                        }
                        ?>
                        <input type="submit" id="editing" name="statusComment" value="Edit">
                    <?php else: ?>
                        <input type="submit" id="posting" name="statusComment" value="Submit Comment">
                    <?php endif; ?>
                    <?php
                    else:
                        echo "Vous devez être connectés pour poster un commentaire "; ?>
                    <?php endif; ?>
                </form>
            </div>
            <br>
            <?php
            $i = 1;
            foreach ($commentaires as $review):
                echo("Commentaire n°" . $i . " : ");
                $notice = $review->getOpinion();
                $note = $review->getScore();
                $i = $i + 1;
                if (isset($_POST["comment"]) && $review == $_POST["comment"]):
                    ?>
                    <div id="comment-container">
                        <p>  <?= $notice ?> </br> Note : <?= $note ?> </p>
                    </div>
                <?php else: ?>
                    <p>  <?= $notice ?> </br> Note : <?= $note ?> </p>
                <?php endif; ?>
            <?php endforeach;
            ?>
        </ul>
    </div>
</div>