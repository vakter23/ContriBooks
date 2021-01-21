<?php
require_once('core/View.php');

class ControllerRating
{
    private $_bookManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else {
            $this->_bookManager = new BookManager;
            $this->_view = new View('Rating');
            $books = $this->_bookManager->getTop50();
            $this->_view->generate(array('newBooks' => $books));
        }
    }
}