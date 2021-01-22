<?php
require_once('core/View.php');

class ControllerAccueil
{
    private $_bookManager;
    private $_likeListManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else {
            $this->_bookManager = new BookManager;
            if(isset($_SESSION['id'])) {
                $this->_likeListManager = new LikeListManager();
                $likedList = $this->liked();
                $likeList = $this->willLike();
            }
            $newBooks = $this->_bookManager->getNewFiveBooks();

            $this->_view = new View('Accueil');
            $this->_view->generate(array('newBooks' => $newBooks, 'likedList' => $likedList, 'likeList' => $likeList));
        }
    }

    private function liked() {
        $likedList = $this->_likeListManager->getLiked();
        if(empty($likedList)) {
            return 0;
        }
        return $likedList;
    }
    private function willLike() {
        $genre = $this->_likeListManager->getWillLike();
        $res = "";
        foreach ($genre as $gen) {
            if($gen != null) {
                $res= $gen->getId_genre();
            }
        }
        return $this->_bookManager->getBooksByGenre($res);
    }
}