<?php


class Author
{


    private $_first_name_author;
    private $_id_author;
    private $_last_name_author;
    private $_date_of_birth;
    private $_date_of_death;
    private $_biography_author;


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


    public function getFirst_name_author()
    {
        return $this->_first_name_author;
    }

    public function setFirst_name_author($first_name_author)
    {
        $this->_first_name_author = $first_name_author;
    }

    public function getId_author()
    {
        return $this->_id_author;
    }

    public function setId_author($id_author)
    {
        $this->_id_author = $id_author;
    }
    public function getLast_name_author()
    {
        return $this->_last_name_author;
    }

    public function setLast_name_author($last_name_author)
    {
        $this->_last_name_author = $last_name_author;
    }

    public function getDate_of_birth()
    {
        return $this->_date_of_birth;
    }

    public function setDate_of_birth($date_of_birth)
    {
        $this->_date_of_birth = $date_of_birth;
    }

    public function getDate_of_death()
    {
        return $this->_date_of_death;
    }

    public function setDate_of_death($date_of_death)
    {
        $this->_date_of_death = $date_of_death;
    }

    public function getBiography_author()
    {
        return $this->_biography_author;
    }

    public function setBiography_author($biography_author)
    {
        $this->_biography_author = $biography_author;
    }


}