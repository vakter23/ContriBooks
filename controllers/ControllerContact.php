<?php

require_once('core/View.php');

class ControllerContact
{
    private $_ticketContactManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Introuvable');
        else {
            $this->_ticketContactManager = new TicketContactManager;
            $this->_view = new View('Contact');
            $this->_view->generate(array());
        }
        if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Reason']) && isset($_POST['Message'])) {
            $this->sendMessage($_POST['Name'],$_POST['Email'],$_POST['Reason'],$_POST['Message']);
        }
    }

    function sendMessage($name,$email,$reason,$message)
    {
        $userName 		= $name;
        $userEmail	 	= $email;
        $userReason     = $reason;
        $userMessage 	= $message;
        $this->_ticketContactManager->addComment($userName,$userEmail,$userReason,$userMessage);
    }
}