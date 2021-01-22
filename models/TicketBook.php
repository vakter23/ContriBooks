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

    public function getId_ticket_book()
    {
        return $this->_id_ticket_book;
    }

    public function setId_ticket_book($id_ticket_book)
    {
        $this->_id_ticket_book = $id_ticket_book;
    }

    public function getId_user()
    {
        return $this->_id_user;
    }

    public function setId_user($id_user)
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

    public function getTitle_book()
    {
        return $this->_title_book;
    }

    public function setTitle_book($title_book)
    {
        $this->_title_book = $title_book;
    }

    public function getSynopsis_book()
    {
        return $this->_synopsis_book;
    }

    public function setSynopsis_book($synopsis_book)
    {
        $this->_synopsis_book = $synopsis_book;
    }

    public function getDate_of_creation()
    {
        return $this->_date_of_creation;
    }

    public function setDate_of_creation($date_of_creation)
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