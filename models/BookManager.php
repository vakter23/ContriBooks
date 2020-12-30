<?php

class BookManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('book','Book');
    }
    public function getBook($book)
    {
        $books = $this->getAll('book', 'Book');
        foreach ($books as $article):
            if($article == $book){
                return $article;
            }
            endforeach;
            return 'Livre Introuvable';
    }
}