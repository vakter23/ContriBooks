<?php


class TicketContact
{

    private $_id_ticket_contact;
    private $_username;
    private $_email;
    private $_subject;
    private $_message;

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

    public function getId_ticket_contact()
    {
        return $this->_id_ticket_contact;
    }

    public function setId_ticket_contact($id_ticket_contact)
    {
        $this->_id_ticket_contact = $id_ticket_contact;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setUsername($username)
    {
        $this->_username = $username;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getSubject()
    {
        return $this->_subject;
    }

    public function setSubject($subject)
    {
        $this->_subject = $subject;
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($message)
    {
        $this->_message = $message;
    }



}