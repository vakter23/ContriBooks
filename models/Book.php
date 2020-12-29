<?php


class Book
{

    public $_ISBN;
    public $_id_type;
    public $_id_author;
    public $_id_genre;
    public $_title_book;
    public $_date_of_publication;
    public $_cover_book;
    public $_synopsis_book;

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

    /**
     * @return mixed
     */
    public function getISBN()
    {
        return $this->_ISBN;
    }

    /**
     * @param mixed $ISBN
     */
    public function setISBN($ISBN)
    {
        $this->_ISBN = $ISBN;
    }

    /**
     * @return mixed
     */
    public function getId_type()
    {
        return $this->_id_type;
    }

    /**
     * @param mixed $id_type
     */
    public function setId_type($id_type)
    {
        $this->_id_type = $id_type;
    }

    /**
     * @return mixed
     */
    public function getId_author()
    {
        return $this->_id_author;
    }

    /**
     * @param mixed $id_author
     */
    public function setId_author($id_author)
    {
        $this->_id_author = $id_author;
    }

    /**
     * @return mixed
     */
    public function getId_genre()
    {
        return $this->_id_genre;
    }

    /**
     * @param mixed $id_genre
     */
    public function setId_genre($id_genre)
    {
        $this->_id_genre = $id_genre;
    }

    /**
     * @return mixed
     */
    public function getTitle_book()
    {
        return $this->_title_book;
    }

    /**
     * @param mixed $title_book
     */
    public function setTitle_book($title_book)
    {
        $this->_title_book = $title_book;
    }

    /**
     * @return mixed
     */
    public function getDate_of_publication()
    {
        return $this->_date_of_publication;
    }

    /**
     * @param mixed $date_of_publication
     */
    public function setDate_of_publication($date_of_publication)
    {
        $this->_date_of_publication = $date_of_publication;
    }

    /**
     * @return mixed
     */
    public function getCover_book()
    {
        return $this->_cover_book;
    }

    /**
     * @param mixed $cover_book
     */
    public function setCover_book($cover_book)
    {
        $this->_cover_book = $cover_book;
    }

    /**
     * @return mixed
     */
    public function getSynopsis_book()
    {
        return $this->_synopsis_book;
    }

    /**
     * @param mixed $synopsis_book
     */
    public function setSynopsis_book($synopsis_book)
    {
        $this->_synopsis_book = $synopsis_book;
    }

}