<?php


class ControllerAuthor
{
    private $_idAuthor;
    private $_view;
    private $_authorManager;
    private $_bookManager;

    public function __construct($url){
        if(isset($url) && count( array($url) )>1)
            throw new Exception('Page Livre Introuvable');
        else {
            $this->_view = new View('Author');
            $this->_authorManager = new AuthorManager();
            $this->_bookManager = new BookManager();
            $this->_idAuthor = explode('=', $_SERVER['REQUEST_URI']);
            $this->_idAuthor = $this->_idAuthor[1];

            $author = $this->_authorManager->getAuthor($this->_idAuthor);
            $books = $this->_bookManager->getBooksByAuthor($this->_idAuthor);
            //var_dump($books["isbn"]);
           // $books = $this->_bookManager->getBookByISBN($books['_ISBN']);
           foreach ($books as $test){
                $isbn = $test->getISBN();
           }
            $books =  $this->_bookManager->getBookByISBN($isbn);
             $this->_view->generate(array('authors' => $author, 'books' => $books));

        }
    }
}