<?php $this->_t = 'Contribooks'; ?>


<div class="container">


    <?php foreach ($book

    as $livre):
    $ISBN = $livre->getISBN();
    $genre = $livre->getId_genre() ?>

    <ul class="nav justify-content-center mw-25">
        <?php
        $img_link = "$ISBN" . '.jpg';
        $filename = 'utils/media/img/book/' . $img_link;
        ?>

        <?php endforeach; ?>
        <?php foreach ($authors

        as $author):
        ?>
        <div class="mx-auto" style="width: 450px;">
            <li class="nav-item">
                <h2><a class="nav-link" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $livre->getTitle_book() ?></a>
                </h2>
                <h3> Écrit par : <a
                            href="/Contribooks/Author?author=<?= $author->getId_author() ?>"><?= $author->getFirst_name_author(); ?> <?= $author->getLast_name_author(); ?></a>
                </h3>


                <form id="form" method="post">
                    <!-- need to supply post id with hidden fild -->

                    <label>
                        <?php $val;

                        if (!empty($wishes)) {
                            foreach ($wishes as $wish):
                                if ($wish->getISBN() == $ISBN):
                                    $val = "Supprimer" ?>

                                <?php elseif (!isset($val)):
                                    $val = "Ajouter" ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if ($val == "Supprimer"): ?>
                                <span>Supprimer de la wishlist ? :</span>
                                <input type="submit" name="wishlist" id="score-data" value="<?= $val ?>">
                                <input type="hidden" name="<?php $livre->getISBN() ?>" id="score-data"
                                       value="<?= $val ?>">
                            <?php elseif ($val == "Ajouter"): ?>

                                <span>Ajouter à la wishlist ? :</span>
                                <input type="submit" name="wishlist" id="score-data" value="<?= $val ?>">
                                <input type="hidden" name="<?php $livre->getISBN() ?>" id="score-data"
                                       value="<?= $val ?>">
                            <?php endif;
                        } else {
                            $val = "Ajouter"; ?>
                            <span>Ajouter à la wishlist ? :</span>
                            <input type="submit" name="wishlist" id="score-data" value="<?= $val ?>">
                            <input type="hidden" name="<?php $livre->getISBN() ?>" id="score-data" value="<?= $val ?>">
                        <?php } ?>


                    </label>

                    <br>
                    <label>

                    </label>

                </form>
                <p>  <?= $livre->getSynopsis_book() ?> </p>
                <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
            </li>
            <?php endforeach; ?>
    </ul>
</div>
<div class="container">

    <h2>Livres du même genre : </h2>
    <?php
    $i = 0;
    foreach ($allbooks as $livre):
        if ($livre->getId_genre() == $genre && $livre->getISBN() != $ISBN && $i < 3):
            $i + 1 ?>

            <?php $img_link = $livre->getISBN() . '.jpg';
            $filename = 'utils/media/img/book/' . $img_link;
            ?>  <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
            <a href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $livre->getTitle_book() ?></a>
        <?php endif;
    endforeach; ?>


    <br>



    <h2>Commentaires : </h2>
    <br>
    <ul>
        <?php
        if (isset($_SESSION["id"])):
        ?>
        <div class="container">
            <form id="form" method="post">
                <!-- need to supply post id with hidden fild -->
                <input type="hidden" name="postid" value="1">
                <label>
                    <span>Note :</span>
                    <input type="text" name="score" id="score-data" placeholder="Le score (0-5)" required
                           value="<?php if (!empty($userComments)  ) {
                               foreach ($userComments as $comment) {
                                   if($comment->getId_user() == $_SESSION["id"])
                                   echo $comment->getScore();
                               }
                           } ?>">

                </label>
                <br>

                <label>
                    <span>Votre commentaire :</span>
                    <textarea name="comment" id="comment-data" cols="30" rows="1"
                              placeholder="Type your comment here...."
                              required><?php  if (!empty($userComments)) {
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
                        echo"1";
                        if ($_SESSION["id"] == $comment->getId_user()){
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
        //version php
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
