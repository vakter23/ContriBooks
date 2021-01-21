<?php

class LoaderManager
{
    private $action;

    public function __construct()
    {
        header('Content-Type: application/json');
        $this->action = $_POST['action'];
        $this->switch();
    }

    public function switch() {
        switch($this->action) {
            case "autocomplete" :
                $this->getBooks();
                break;
        }
    }

    public function getBooks() {
//        $query = $_POST['autocomplete'];
//        $req = $this->getBdd()->prepare('SELECT title_book FROM book WHERE ISBN LIKE '."'".'%'.$query.'%'."'".' OR title_book LIKE '."'".'%'.$query.'%'."'".';');
//        $req->execute();
//        $books = $req->fetchAll();
//        $result = "";
//        if (count($books) > 0) {
//            foreach ($books as $book) {
//                $result = $result . '<div class="search-result">'.$book['title_book'].'</div>';
//            }
//        }
        $result = "lol";
        return json_encode($result);

    }



}