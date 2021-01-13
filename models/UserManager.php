<?php

class UserManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('user','Users');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('user','ORDER BY date_of_publication DESC LIMIT 5;','Users');
    }

}