<?php
require_once('core/View.php');

class ControllerBook
{
    private $_isbn;
    private $_view;
    private $_bookManager;
    private $_lastComment;
    private $_wishManager;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Livre Introuvable');
        else {
            $this->_isbn = explode('=', $_SERVER['REQUEST_URI']);
            $this->_isbn = $this->_isbn[1];
            $this->_bookManager = new BookManager();
            $this->_view = new View('Book');
            $book = $this->_bookManager->getBookByISBN($this->_isbn);
            $this->_wishManager = new WishManager();

            if (isset($_SESSION["id"])) {
                $wishlist = $this->_wishManager->getWishlist($_SESSION["id"]);

                $allComments = $this->_bookManager->getReviewsByISBN($this->_isbn);
                $userComments = $this->_bookManager->getReviewsByISBNAndIdUser($this->_isbn, $_SESSION["id"]);
                if (isset($_POST["statusComment"])) {
                    foreach ($allComments as $review):
                        if ($review->getId_user() === $_SESSION["id"] && ((($review->getOpinion())))) {
                            $_POST["statusComment"] = "Edit";
                        }
                    endforeach;
                }

                if (isset($_POST["comment"]) && $allComments != null) {
                    $this->_lastComment = $userComments[sizeof($userComments) - 1];
                }
                if (isset($_POST["statusComment"])) {
                    if ($_POST["statusComment"] === "Edit" && isset($_POST["score"])) {

                        $this->editComment($_SESSION["id"]);
                        // echo "<meta http-equiv='refresh' content='0'>";
                    } else {
                        $this->postComment($_SESSION["id"]);
                        // echo "<meta http-equiv='refresh' content='0'>";
                    }
                }
            } else {
                $comments = null;
            }
            $authors = $this->_bookManager->getAuthor($book[0]->getId_author());
            var_dump($book[0]);
            $userComments = "";
            $allComments = "";

            $allBooks = $this->_bookManager->getBooks();
            $this->_view->generate(array('book' => $book, 'commentaires' => $allComments, 'userComments' => $userComments, 'authors' => $authors, 'wishes' => $wishlist, 'allbooks' => $allBooks));
        }
        if (isset($_POST["wishlist"])) {
            if ($_POST["wishlist"] == "Ajouter") {
                $this->addWish();
                //echo "<meta http-equiv='refresh' content='0'>";
            } else {
                $this->removeWish();
                //echo "<meta http-equiv='refresh' content='0'>";
            }
        }
    }

    /*formulaire vers ajax, ajax redirige vers controleur, controleur verifie post et envoie vers modele, modele envoie vers bd*/

    private function editComment($id_user)
    {
        if (is_numeric($_POST["score"]) && $_POST["score"] <= 5 && $_POST["score"] >= 0) {
            if (isset($this->_lastComment)){
                $this->_bookManager->changeComment($_POST["comment"], $this->_lastComment->getId_review(), $_POST["score"], $id_user);
        }
        }
        echo $this->_bookManager->getReviewByIdUser($this->_isbn);
    }

    private function postComment($id_user)
    {
        if (isset($_POST["score"]) && is_numeric($_POST["score"]) && $_POST["score"] <= 5 && $_POST["score"] >= 0) {
            $this->_bookManager->addComment($this->_isbn);
            echo $this->_bookManager->getReviewByIdUser($this->_isbn);
        }
    }

    private function addWish()
    {
        $this->_wishManager->addWithParams('wish (isbn, id_user)', $this->_isbn);
    }

    private function removeWish()
    {
        $this->_wishManager->removeWish('wish', $this->_isbn);
    }
}