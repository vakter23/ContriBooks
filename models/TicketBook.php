<?php


class TicketBook
{

    private $_id_ticket_book;
    private $_id_user;
    private $_ISBN;
    private $_title_book;
    private $_synopsis_book;
    private $_date_of_creation;
    private $_author;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this,$method))
                $this->$method($value);
        }
    }

    public function getIdTicketBook()
    {
        return $this->_id_ticket_book;
    }

    public function setIdTicketBook($id_ticket_book)
    {
        $this->_id_ticket_book = $id_ticket_book;
    }

    public function getIdUser()
    {
        return $this->_id_user;
    }

    public function setIdUser($id_user)
    {
        $this->_id_user = $id_user;
    }

    public function getISBN()
    {
        return $this->_ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->_ISBN = $ISBN;
    }

    public function getTitleBook()
    {
        return $this->_title_book;
    }

    public function setTitleBook($title_book)
    {
        $this->_title_book = $title_book;
    }

    public function getSynopsisBook()
    {
        return $this->_synopsis_book;
    }

    public function setSynopsisBook($synopsis_book)
    {
        $this->_synopsis_book = $synopsis_book;
    }

    public function getDateOfCreation()
    {
        return $this->_date_of_creation;
    }

    public function setDateOfCreation($date_of_creation)
    {
        $this->_date_of_creation = $date_of_creation;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
    }
}