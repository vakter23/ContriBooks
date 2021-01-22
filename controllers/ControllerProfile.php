<?php


class ControllerProfile
{
    private $_bookManager;
    private $_userManager;
    private $_view;
    private $_id;
    private $_wishlistManager;

    public function __construct($url)
    {
        if (!isset($_SESSION["id"])) {
            throw new Exception('Merci de vous connecter pour accéder à votre profil    ');
        } else {
            if (isset($url) && count(array($url)) > 1)
                throw new Exception('Page Profil Introuvable');
            else {
                $this->_view = new View('Profile');
                $this->_bookManager = new BookManager();
                $this->_userManager = new UserManager();
                $this->_wishlistManager = new WishManager();
                $this->_id = $_SESSION["id"];

                $stats = $this->_userManager->getStatsUser($this->_id);
                $comments = $this->_bookManager->getLastReviewsByUser($this->_id);
                $wishlist = $this->_wishlistManager->getWishlist($this->_id);
                $books = $this->_bookManager->getBookByWishlist($this->_id);
                $this->_view->generate(array('books' => $books, 'stats' => $stats, 'comments' => $comments, 'wishlist' => $wishlist));

                if(isset($_POST["bio"])){
                    echo $_POST["bio"];
                    $this->_userManager->updateBiography($this->_id, $_POST["bio"]);
                }
            }
        }
    }
}