<?php
class ReviewManager extends Model
{
    public function getReviews()
    {
        return $this->getAll('review','Review');
    }
    public function deleteReview($ISBN,$IdUser)
    {
        $ISBN = htmlentities($ISBN);
        $ISBN = htmlspecialchars($ISBN);
        $IdUser = htmlentities($IdUser);
        $IdUser = htmlspecialchars($IdUser);

        return $this->removeWithParams('review',"ISBN = '$ISBN' AND id_user=$IdUser ");
    }

}