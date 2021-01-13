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

    public function getIdTicketReport()
    {
        return $this->_id_ticket_report;
    }

    public function setIdTicketReport($id_ticket_report)
    {
        $this->_id_ticket_report = $id_ticket_report;
    }

    public function getIdUserSend()
    {
        return $this->_id_user_send;
    }

    public function setIdUserSend($id_user_send)
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

    public function getIdReview()
    {
        return $this->_id_review;
    }

    public function setIdReview($id_review)
    {
        $this->_id_review = $id_review;
    }

    public function getIdUserTarget()
    {
        return $this->_id_user_target;
    }

    public function setIdUserTarget($id_user_target)
    {
        $this->_id_user_target = $id_user_target;
    }

    public function getTitleReport()
    {
        return $this->_title_report;
    }

    public function setTitleReport($title_report)
    {
        $this->_title_report = $title_report;
    }

    public function getReasonReport()
    {
        return $this->reason_report;
    }

    public function setReasonReport($reason_report)
    {
        $this->reason_report = $reason_report;
    }


}