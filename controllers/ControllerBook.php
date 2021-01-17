<?php
require_once('core/View.php');
require_once ('ControllerReview.php');

class ControllerBook
{
    private $_isbn;
    private $view;
    private $_bookManager;
    private $_reviews;

    public function __construct($url)
    {
        //$url = 2294756290;

        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Livre Introuvable');
        else {
            $this->_isbn = explode('=', $_SERVER['REQUEST_URI']);
            $this->getBook();
        }
    }

    private function getBook(){
        $this->_bookManager = new BookManager;
        $book = $this->_bookManager->getBookByISBN($this->_isbn[1]);
        $reviews = $this->_bookManager->getReviewsByISBN($this->_isbn[1]);
        //var_dump($book);
        $this->view = new View('Book');
        //$this->_reviews = new ControllerReview($this->_isbn, $this->view);
        $this->view->generate(array('book' => $book, 'reviews' => $reviews));

    }

    private function getHttp(){

    }
}