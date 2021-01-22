<?php
require_once('core/View.php');

class ControllerNewBooks
{
    private $_bookManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else {
            $this->_bookManager = new BookManager;
            $this->_view = new View('NewBooks');
            $books = $this->_bookManager->getNewBooks();
            $booksGenre1 = $this->_bookManager->getBooksGenre(1);
            $booksGenre2 = $this->_bookManager->getBooksGenre(2);
            $this->_view->generate(array('newBooks' => $books,'bookGenre1'=>$booksGenre1,'bookGenre2'=>$booksGenre2));
        }
    }
}