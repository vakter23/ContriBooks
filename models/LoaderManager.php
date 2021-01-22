<?php

class LoaderManager extends Model
{

    public function __construct(){
    }

    public function getBooks() {
        $query = $_POST['autocomplete'];
        $books= $this->getWithParams('*','book', 'WHERE ISBN LIKE '."'".'%'.$query.'%'."'".' OR title_book LIKE '."'".'%'.$query.'%'."'".';','Book');
        $result = "";
        if (count($books) > 0) {
            foreach ($books as $book) {
                $ISBN = $book->getISBN();
                $result =  $result .'<a href="/Contribooks/Book?ISBN='.$ISBN.'"><div class="search-result">'.$book->getTitle_book().'</div></a>';
            }
        }
        return $result;

    }

}