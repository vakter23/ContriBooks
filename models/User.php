<?php


class User
{

    private $_id_user;
    private $_username;
    private $_email;
    private $_password;
    private $_password_reset_hash;
    private $_password_reset_expires_at;
    private $_activation_hash;

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

    public function getActivationHash()
    {
        return $this->_activation_hash;
    }

    public function setActivationHash($activation_hash)
    {
        $this->_activation_hash = $activation_hash;
    }

    public function getPasswordResetExpiresAt()
    {
        return $this->_password_reset_expires_at;
    }

    public function setPasswordResetExpiresAt($password_reset_expires_at)
    {
        $this->_password_reset_expires_at = $password_reset_expires_at;
    }

    public function getPasswordResetHash()
    {
        return $this->_password_reset_hash;
    }

    public function setPasswordResetHash($password_reset_hash)
    {
        $this->_password_reset_hash = $password_reset_hash;
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

}