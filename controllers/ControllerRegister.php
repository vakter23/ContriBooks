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
            if(isset($_POST['email'])) {
                $result = $this->_userManager->checkIfExists();
                if(count($result)>0) {
                    $_POST['check'] = false;
                }
                else {
                    $this->_userManager->addUser();
                }
            }
            $newUsers = $this->_userManager->getUsers();
            $this->_view = new View('Register');
            $this->_view->generate(array('newUsers' => $newUsers));
        }
    }
}