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
    public function getBookByISBN($ISBN){
        return $this->getWithParams('book', 'WHERE ISBN = '.$ISBN.';', 'Book');
    }
    public function getReviewsByISBN($ISBN){
        return $this->getWithParams('review', 'WHERE ISBN = '.$ISBN.';', 'Review');
    }

}