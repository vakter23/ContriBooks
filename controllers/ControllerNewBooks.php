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
            $this->_view->generate(array('newBooks' => $books));
        }
    }
}