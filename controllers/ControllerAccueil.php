<?php

class ControllerAccueil
{
    private $_articleManager;
    private $_view;

    public function __construct($url)
    {
        if(!isset($url) && count($url)>1)
            throw new Exception('Page Introuvable');
        else
            $this->articles();
    }
    private function articles()
    {
        $this->_articleManager = new ArticleManager;
        $articles = $this->_articleManager->getArticles();

        require_once('views/viewAccueil.php');
    }
}