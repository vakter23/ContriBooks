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
        if(isset($_POST['query'])){$query = $_POST['query'];}else{$query='';}
        return $this->getWithParams('book', 'WHERE ISBN LIKE '."'".'%'.$query.'%'."'".' OR title_book LIKE '."'".'%'.$query.'%'."'".';','Book');
    }

    public function getTop50(){
        return $this->getWithParams('book', 'ORDER BY RATE DESC LIMIT 50', 'Book');
    }
    
    public function getBookByISBN($ISBN){
        return $this->getWithParams('book', 'WHERE ISBN = '.$ISBN.';', 'Book');
    }
    public function getReviewsByISBN($ISBN){
        return $this->getWithParams('review', 'WHERE ISBN = '.$ISBN.';', 'Review');
    }
    public function addComment($ISBN){
        $score = $_POST["score"];
        $comment = $_POST["comment"];
        return $this->addWithParams('review (isbn, score, opinion)','\''.$ISBN.'\', \''.$score.'\', \''.$comment.'\'');

    }

}