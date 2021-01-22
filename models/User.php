<?php


class User
{

    private $_id_user;
    private $_username;
    private $_email;
    private $_password;
    private $_biography_user;
    private $_date_of_creation;


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

    public function getId_user()
    {
        return $this->_id_user;
    }

    public function setId_user($_id_user)
    {
        $this->_id_user = $_id_user;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
    }
    public function getDate_of_creation(){
        return $this->_date_of_creation;
    }

    public function setDate_of_creation($_date_of_creation){
        $this->_date_of_creation = $_date_of_creation;
    }

    public function getBiography_user(){
        return $this->_biography_user;
    }

    public function setBiography_user($_biography_user){
        $this->_biography_user = $_biography_user;
    }

}