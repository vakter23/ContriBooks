<?php


class ControllerRequestBook
{
    private $_ticketBookManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Introuvable');
        else {
            $this->_ticketBookManager = new TicketBookManager();
            $this->_view = new View('RequestBook');
            $this->_view->generate(array());
        }

        if (isset($_POST['ISBN']) && isset($_POST['Title']) &&  isset($_POST['Year']) && isset($_POST['Author']) && isset($_POST['Subject'])) {
            $this->addRequest($_POST['ISBN'],$_POST['Title'],$_POST['Year'],$_POST['Author'],$_POST['Subject']);
        }
    }

    function addRequest($isbn,$title,$year,$author,$subject)
    {
        $bookIsbn       = $isbn;
        $bookTitle      = $title;
        $bookYear       = $year;
        $bookAuthor 	= $author;
        $bookSynop      = $subject;
        $this->_ticketBookManager->addBooks($_SESSION['id'],$isbn,$title,$year,$author,$subject);

    }

}