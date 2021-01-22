<?php


class LikeList
{

    private $_ISBN;
    private $_id_user;
    private $_title_book;
    private $_id_genre;

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

    public function getId_user()
    {
        return $this->_id_user;
    }

    public function setId_user($id_user)
    {
        $this->_id_user = $id_user;
    }

    public function getTitle_book()
    {
        return $this->_title_book;
    }

    public function setTitle_book($ISBN)
    {
        $this->_title_book = $ISBN;
    }

    public function getId_genre()
    {
        return $this->_id_genre;
    }

    public function setId_genre($id_genre)
    {
        $this->_id_genre = $id_genre;
    }



}