<?php
require_once('core/View.php');


class ControllerReport
{
    private $_ticketReportManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Introuvable');
        else {
            $this->_ticketReportManager = new TicketReportManager();
            $this->_view = new View('Report');
            $this->_view->generate(array());
        }
        if (isset($_POST['Reason']) && isset($_POST['Message'])) {
            $this->addReport($_SESSION['id'],$_POST['Reason'],$_POST['Message']);
            echo "<meta http-equiv='refresh' content='0'>";

        }
    }

    function sendMessage($idUser,$reason,$message)
    {
        $userName 		= $idUser;
        $userReason     = $reason;
        $userMessage 	= $message;
        $this->_ticketReportManager->addReport($userName,$userReason,$userMessage);
    }
}