<?php


class TicketReport
{

    private $_id_ticket_report;
    private $_id_user_send;
    private $_ISBN;
    private $_id_review;
    private $_id_user_target;
    private $_title_report;
    private $reason_report;

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

    public function getId_ticket_report()
    {
        return $this->_id_ticket_report;
    }

    public function setId_ticket_report($id_ticket_report)
    {
        $this->_id_ticket_report = $id_ticket_report;
    }

    public function getId_user_send()
    {
        return $this->_id_user_send;
    }

    public function setId_user_send($id_user_send)
    {
        $this->_id_user_send = $id_user_send;
    }

    public function getISBN()
    {
        return $this->_ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->_ISBN = $ISBN;
    }

    public function getId_review()
    {
        return $this->_id_review;
    }

    public function setId_review($id_review)
    {
        $this->_id_review = $id_review;
    }

    public function getId_user_target()
    {
        return $this->_id_user_target;
    }

    public function setId_user_target($id_user_target)
    {
        $this->_id_user_target = $id_user_target;
    }

    public function getTitle_report()
    {
        return $this->_title_report;
    }

    public function setTitle_report($title_report)
    {
        $this->_title_report = $title_report;
    }

    public function getReason_report()
    {
        return $this->reason_report;
    }

    public function setReason_report($reason_report)
    {
        $this->reason_report = $reason_report;
    }


}