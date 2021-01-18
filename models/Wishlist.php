<?php


class Wishlist
{

    private $_id_wishlist;
    private $_id_user;
    private $_ISBN;

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

    public function getId_wishlist()
    {
        return $this->_id_wishlist;
    }

    public function setId_wishlist($id_wishlist)
    {
        $this->_id_wishlist = $id_wishlist;
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


}