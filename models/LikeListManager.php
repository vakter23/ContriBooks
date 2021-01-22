<?php


class LikeListManager extends Model
{

    public function __construct(){
    }

    public function getLiked() {
        return $this->getWithParams('*','like_list', "natural join book WHERE id_user=".$_SESSION['id']."", 'LikeList');
    }

    public function getWillLike() {
        return $this->getWithParams('id_genre, count(*) maximum','like_list', "INNER JOIN book ON like_list.ISBN = book.ISBN GROUP BY book.id_genre ORDER BY maximum DESC LIMIT 1", 'LikeList');
    }

    public function getLikeListByUserAndISBN($isbn) {
        return $this->getWithParams('*','like_list', "WHERE id_user=".$_SESSION['id']." AND ISBN='".$isbn."'", 'LikeList');
    }

    public function like($isbn) {
        $this->addWithParams('like_list (id_user, ISBN)', '\''.$_SESSION['id'].'\', \''.$isbn.'\'');
    }

    public function dislike($isbn) {
        $this->removeWithParams('like_list', "id_user=".$_SESSION['id']." AND ISBN='".$isbn."'");
    }

}