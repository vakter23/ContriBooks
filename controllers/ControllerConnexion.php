<?php
require_once('core/View.php');

class ControllerConnexion
{
    private $_userManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else {
            $this->_userManager = new UserManager;
            $newUsers = $this->_userManager->getUsers();
            if(isset($_POST['submit']) && !isset($_SESSION['id'])) {
                $this->log_In();
            }
            $this->_view = new View('Connexion');
            $this->_view->generate(array('newUsers' => $newUsers));
            if (isset($_POST['logout']) && isset($_SESSION['login'])) {
                $this->sign_Out();
            }
        }
    }

    function log_In()
    {
        $this->_userManager->connect();
    }

    function sign_Out() {
        $this->_userManager->disconnect();
    }
}