<?php

class ReviewManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('review','Review');
    }
    public function getComments($ISBN)
    {
      // Y'a pas de date de publication dans la table >.>  return $this->getWithParams('review','ORDER BY date_of_publication DESC LIMIT 5;','Review');
        return $this->getWithParams('review', 'WHERE ISBN = 0747532699;', 'Review');
    }
    public function addComment($ISBN){
        return $this->addWithParams('review (isbn, id_user, score, opinion',''.$ISBN.','.$user.', '.$score.', '.$opinion.'', 'Review');
    }

}