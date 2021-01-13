<?php
require_once('core/View.php');

class ControllerAccueil
{
    private $_bookManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else
              $this->newBooks();
    }
    private function newBooks()
    {
        $this->_bookManager = new BookManager;
        $newBooks = $this->_bookManager->getNewFiveBooks();

        $this->_view = new View('Accueil');
        $this->_view->generate(array('newBooks' => $newBooks));

    }


}