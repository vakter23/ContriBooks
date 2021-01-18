<?php
require_once('core/View.php');

class ControllerBook
{
    private $_isbn;
    private $view;
    private $_bookManager;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Livre Introuvable');
        else {
            $this->_isbn = explode('=', $_SERVER['REQUEST_URI']);
            $this->_bookManager = new BookManager;
            $this->view = new View('Book');
            $book = $this->_bookManager->getBookByISBN($this->_isbn[1]);
            $reviews = $this->_bookManager->getReviewsByISBN($this->_isbn[1]);
            $this->view->generate(array('book' => $book, 'reviews' => $reviews));
            if (isset($_POST["score"]) && isset($_POST["comment"])) {
                $this->postComment();
            }
        }
    }
    /*formulaire vers ajax, ajax redirige vers controleur, controleur verifie post et envoie vers modele, modele envoie vers bd*/

    private function postComment()
    {
        $this->_bookManager->addComment($this->_isbn[1]);
    }

}