<?php

class ReviewManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('review','Review');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('review','ORDER BY date_of_publication DESC LIMIT 5;','Review');
    }

}