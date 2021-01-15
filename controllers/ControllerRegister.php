<?php
require_once('core/View.php');

class ControllerRegister
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

            $this->_view = new View('Register');
            $this->_view->generate(array('newUsers' => $newUsers));
        }
    //CHECK SI LES TROIS VARIABLES SONT REMPLIES
        if(isset($_POST['email'])) {
            $this->actions();
        }
    }

    function actions()
    {
        $result = $this->_userManager->checkIfExists();
        if($result == 1) {
            echo("mauvais login");
        }
        else if ($result == 2) {
            echo("mauvais email");
        }
        else {
            $this->_userManager->addUser();
        }
    }
}