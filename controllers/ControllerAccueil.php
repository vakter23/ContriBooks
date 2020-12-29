<?php
require_once('views/View.php');

class ControllerAccueil
{
    private $_articleManager;
    private $_bookManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else
//            $this->articles();
              $this->books();
    }
    private function articles()
    {
        $this->_articleManager = new ArticleManager;
        $articles = $this->_articleManager->getArticles();

        $this->_view = new View('Accueil');
        $this->_view->generate(array('articles' => $articles));
    }
    private function books()
    {
        $this->_bookManager = new BookManager;
        $books = $this->_bookManager->getBooks();

        $this->_view = new View('Accueil');
        $this->_view->generate(array('books' => $books));

    }
}