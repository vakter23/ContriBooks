<?php  $this->_t = 'Contribooks'; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
            <a class="nav-link" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $livre->getTitle_book() ?></a>
        </li>

    </ul>
</div>
<div class="container">
    <ul class="nav justify-content-center mw-25">


        <figure class="figure-synopsis">
            <a class="figure-a-synopsis"</a>
            <p>  <?= $livre->getSynopsis_book() ?> </p>
        </figure>
        <br class="figure-review">

        <div class="post">
            <!-- post will be placed here from db -->
        </div>
        <div class="comment-block">
            <!-- comment will be apped here from db-->
        </div>
        <!-- comment form -->
        <form id="form" method="post" action="">
            <!-- need to supply post id with hidden fild -->
            <input type="hidden" name="postid" value="1">
            <label>
                <span>Score :</span>
                <input type="text" name="score" id="comment-name" placeholder="Le score (0-5)" required>
            </label>
            <label>
                <span>Votre commentaire :</span>
                <textarea name="comment" id="comment" cols="30" rows="1" placeholder="Type your comment here...." required></textarea>
            </label>
            <input type="submit" id="submit" value="Submit Comment">
        </form>

        <?php
        //version php
        $i = 1;
        foreach ($reviews as $review ):
            echo ("Commentaire n°".$i." : ");
            $notice = $review ->getOpinion();
            $i = $i+1;
            ?>
            <p>  <?= $notice ?> </p>
        <?php endforeach; ?>
        <script>
            $("#more_com").click(function(){

                $.ajax({
                    url : 'ControllerBook.php', // La ressource ciblée
                    type : 'POST', // Le type de la requête HTTP.
                    data : 'score='+ score + '&commentaire=' + comment,
                    dataType : 'html',
                    success : function()
                });

            });
        </script>
        </figure>
    </ul>
</div>
