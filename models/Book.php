<?php


class Book
{

    private $_ISBN;
    private $_id_type;
    private $_id_author;
    private $_id_genre;
    private $_title_book;
    private $_date_of_publication;
    private $_cover_book;
    private $_synopsis_book;
    private $_rate;

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


    public function getISBN()
    {
        return $this->_ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->_ISBN = $ISBN;
    }

    public function getId_type()
    {
        return $this->_id_type;
    }

    public function setId_type($id_type)
    {
        $this->_id_type = $id_type;
    }
    public function getId_author()
    {
        return $this->_id_author;
    }

    public function setId_author($id_author)
    {
        $this->_id_author = $id_author;
    }

    public function getId_genre()
    {
        return $this->_id_genre;
    }

    public function setId_genre($id_genre)
    {
        $this->_id_genre = $id_genre;
    }

    public function getTitle_book()
    {
        return $this->_title_book;
    }

    public function setTitle_book($title_book)
    {
        $this->_title_book = $title_book;
    }

    public function getDate_of_publication()
    {
        return $this->_date_of_publication;
    }

    public function setDate_of_publication($date_of_publication)
    {
        $this->_date_of_publication = $date_of_publication;
    }

    public function getCover_book()
    {
        return $this->_cover_book;
    }

    public function setCover_book($cover_book)
    {
        $this->_cover_book = $cover_book;
    }

    public function getSynopsis_book()
    {
        return $this->_synopsis_book;
    }

    public function setSynopsis_book($synopsis_book)
    {
        $this->_synopsis_book = $synopsis_book;
    }

    public function getRate()
    {
        return $this->_rate;
    }
    public function setRate($rate)
    {
        $this->_rate = $rate;
    }

}