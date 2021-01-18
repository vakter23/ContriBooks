<?php
require_once('core/View.php');

class ControllerSearch
{
    private $_bookManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else {
            $this->_bookManager = new BookManager;
            $filter = explode('=', $_SERVER['REQUEST_URI']);
            if (isset($filter)) {
                $newBooks = $this->_bookManager->getBooks();
            }
            else {
                $newBooks = $this->_bookManager->search();
            }
            $this->_view = new View('Search');
            $this->_view->generate(array('newBooks' => $newBooks));
        }
    }
}


