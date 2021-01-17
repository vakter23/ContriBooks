<?php


class ControllerTemplate {

    private $_bookManager;

    public function __construct() {
        $this->_bookManager = new BookManager;
        $this->search();
    }

    public function search() {
        /*$books = $this->_bookManager->searchNav();
        $result ="" ;
        var_dump($books);
        if(count($books)>0) {
            foreach($books as $book) {
                $result = $result .'<div class="search-result">'.$book->getTitle_book().'</div>';
            }
        }
        echo $result ;*/
        echo "lol";
    }
}