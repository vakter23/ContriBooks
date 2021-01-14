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

        <?php
        if(isset($_POST['submit_commentaire'])){
            if(isset($_POST['pseudo'], $_POST['commentaire'])
                AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])){

            } else{
                $c_error = "Tous les champs doivent êtres complétés.";
            }

        }?>
        <figure class="figure-review">

            <form method="post">
                <input type="text" name="pseudo" placeholder="Votre Pseudo"/></br>
                <textarea name="commentaire" placeholder="Votre commentaire..."></textarea></br>
                <input type="submit" value="Poster mon commentaire" name="submit_commentaire">
            </form></br>



            <?php if(isset($c_erreur)){
                echo $c_erreur; /*Il faut ajouter un moyen de dire que le commentaire est n'est pas passé*/
            }?>
            <?php
            $i = 1;
            foreach ($reviews as $review ):
                echo ("Commentaire n°".$i." : ");
                $notice = $review ->getOpinion();
                $i = $i+1;
                ?>
                </br>
                <a class="figure-a-synopsis"</a>
                <p>  <?= $notice ?> </p>
            <?php endforeach; ?>
        </figure>
    </ul>
</div>