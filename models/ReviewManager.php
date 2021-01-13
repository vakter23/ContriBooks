<?php

class ReviewManager extends Model
{
    public function getReviews()
    {
        return $this->getAll('review','Review');
    }

}