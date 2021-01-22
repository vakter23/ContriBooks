<?php
require_once('core/View.php');

class ControllerAdmin
{
    private $_bookManager;
    private $_reviewManager;
    private $_userManager;
    private $_ticketBookManager;
    private $_ticketContactManager;
    private $_ticketReportManager;

    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Introuvable');
        else {
            $this->newBooks();
        }
    }
    private function newBooks()
    {
        $this->_bookManager = new BookManager;
        $this->_reviewManager = new ReviewManager;
        $this->_userManager = new UserManager();
        $this->_ticketBookManager = new TicketBookManager();
        $this->_ticketContactManager = new TicketContactManager();
        $this->_ticketReportManager = new TicketReportManager();

        $books = $this->_bookManager->getBooks();
        $review = $this->_reviewManager->getReviews();
        $user = $this->_userManager->getUsers();
        $ticketBooks = $this->_ticketBookManager->getTicketsBook();
        $ticketContact = $this->_ticketContactManager->getTicketContact();
        $ticketReport = $this->_ticketReportManager->getTicketsReport();

        if(isset($_POST['editBook'])){
            $ISBN = $_POST['ISBN'];
            $Title =  $_POST['Title'];
            $Synopsis = htmlentities($_POST['Synopsis'], ENT_QUOTES, 'UTF-8');
            $this->_bookManager->editBook($ISBN,$Title,$Synopsis);
            echo "<meta http-equiv='refresh' content='0'>";
        }
        if(isset($_POST['deleteBook'])){
            $ISBN = $_POST['deleteBook'];
            var_dump($_POST);
            $this->_bookManager->deleteBook($ISBN);
            echo "<meta http-equiv='refresh' content='0'>";
        }

        if(isset($_POST['deleteReview'])){
            $ISBN = $_POST['ISBN'];
            $IdUser = $_POST['IdUser'];
            $this->_reviewManager->deleteReview($ISBN,$IdUser);
            echo "<meta http-equiv='refresh' content='0'>";
        }

        if(isset($_POST['deleteUser'])){
            print_r($_POST);
            $Email = $_POST['Email'];
            $Username = $_POST['Username'];
            $this->_userManager->deleteUser($Email,$Username);
            echo "<meta http-equiv='refresh' content='0'>";
        }

        if(isset($_POST['addNewBook'])){
            $ISBN = $_POST['ISBN'];
            $Title = $_POST['Title'];
            $Synopsis = $_POST['Synopsis'];
            $Date = $_POST['Date'];
            $Author = $_POST['Author'];
            //$this->_bookManager->addNewBook($ISBN,$Title,$Synopsis,$Date,$Author);
        }
        if(isset($_POST['deleteRequestBook'])){
            var_dump($_POST);
        }

        if(isset($_POST['deleteTicketContact'])){
            var_dump($_POST);
            $IdTicket = $_POST['deleteTicketContact'];
            $this->_ticketContactManager->deleteComment($IdTicket);
            echo "<meta http-equiv='refresh' content='0'>";
        }




        $this->_view = new View('Admin');
        $this->_view->generate(array('Books' => $books, 'Review'=>$review, 'User'=>$user,'TicketBook'=>$ticketBooks,'TicketContact'=>$ticketContact,'TicketReport'=>$ticketReport));
    }

}