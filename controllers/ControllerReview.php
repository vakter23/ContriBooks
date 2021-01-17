<?php
//
//
//if(isset($_GET['Commentaire']))
//{
//    if(!empty($_GET['Commentaire']))
//    {
//        $Commentaire    =   SecuBDD($_GET['Commentaire']);
//        $IdArticle      =   SecuBDD($_GET['IdArticle']);
//        $IdMembre       =   SecuBDD($_GET['IdMembre']);
//
//        mysql_query("INSERT INTO commentaire (`id_membre`, `id_article`, `commentaire`) VALUES ('".$IdMembre."', '".$IdArticle."', '".$Commentaire."')");
//    }
//}

class ControllerReview
{
    private $_isbn;
    private $_view;
    private $_reviewManager;

    public function __construct($ISBN, $view)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Review Introuvable');
        else {
            $this->_isbn = $ISBN;
            $this->_view = $view;
            $this->getReview();
        }
    }

    public function getReview(){
        $this->_reviewManager = new ReviewManager;
//        $book = $this->_reviewManager->getBookByISBN($this->_isbn[1]);
        $reviews = $this->_reviewManager->getComments($this->_isbn);
        //var_dump($book);
        $this->view = new View('Book');
        $this->view->generate(array('reviews' => $reviews));
    }

}

?>