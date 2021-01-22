<?php
require_once('core/View.php');

class ControllerBook
{
    private $_isbn;
    private $_view;
    private $_bookManager;
    private $_lastComment;
    private $_likeListManager;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Livre Introuvable');
        else {
            $this->_isbn = explode('=', $_SERVER['REQUEST_URI']);
            $this->_isbn = $this->_isbn[1];
            $this->_bookManager = new BookManager();
            $this->_likeListManager = new LikeListManager();
            $this->_view = new View('Book');
            $book = $this->_bookManager->getBookByISBN($this->_isbn);
            $reviews = $this->_bookManager->getReviewsByISBN($this->_isbn);

            if (isset($_SESSION["id"])) {
                $comments = $this->_bookManager->getReviewByIdUser($this->_isbn);
                $likelist = $this->_likeListManager->getLikeListByUserAndISBN($this->_isbn);
                if (isset($_POST["statusComment"])) {
                    foreach ($comments as $review):
                        if ($review->getId_user() === $_SESSION["id"] && ((($review->getOpinion()) === htmlentities($_POST["comment"], ENT_QUOTES, 'UTF-8')))) {
                            $_POST["statusComment"] = "exists";
                        }
                    endforeach;
                }

                if (isset($_POST["comment"])) {
                    $this->_lastComment = $comments[sizeof($comments) - 1];
                }

                if (isset($_POST["statusComment"]) && $_POST["statusComment"] === "Edit") {
                    $this->editComment();
                }

                else if (isset($_POST["score"])) {
                    $this->postComment();
                }

                if(isset($_POST['like'])) {
                    $this->like();
                    echo "<meta http-equiv='refresh' content='0'>";
                }
            }
            else {
                $comments = null;
            }
            $authors = $this->_bookManager->getAuthor($book[0]->getId_author());
            $this->_view->generate(array('book' => $book, 'reviews' => $reviews, 'commentaire' => $comments, 'authors' => $authors, 'likelist' => $likelist));
        }
    }

    /*formulaire vers ajax, ajax redirige vers controleur, controleur verifie post et envoie vers modele, modele envoie vers bd*/

    private function editComment()
    {
        if (is_numeric($_POST["score"]) && $_POST["score"] <= 5 && $_POST["score"] >= 0) ;
        $this->_bookManager->changeComment($_POST["comment"], $this->_lastComment->getId_review());
    }

    private function postComment()
    {
        if (is_numeric($_POST["score"]) && $_POST["score"] <= 5 && $_POST["score"] >= 0)
            $this->_bookManager->addComment($this->_isbn);
        else
            echo "La note n'est pas un int entre 1 et 5.";
    }

    public function like() {
        if($_POST['like'] == 'Je n\'aime pas') {
            $this->_likeListManager->dislike($this->_isbn);
        }
        else {
            $this->_likeListManager->like($this->_isbn);
        }
    }


}