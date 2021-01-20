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
            //L'erreur
            $this->_bookManager = new BookManager;
            $newBooks = $this->_bookManager->search();

            $this->_view = new View('Search');
            $this->_view->generate(array('newBooks' => $newBooks));
        }
    }
}


