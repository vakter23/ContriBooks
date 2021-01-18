<?php

class BookManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('book','Book');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('book','ORDER BY date_of_publication DESC LIMIT 5;','Book');
    }

    public function search() {
        $query = $_POST['query'];
        return $this->getWithParams('book', 'WHERE ISBN LIKE '."'".'%'.$query.'%'."'".' OR title_book LIKE '."'".'%'.$query.'%'."'".';','Book');
    }
}