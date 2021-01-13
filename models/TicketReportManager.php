<?php

class TicketReportManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('ticket_report','TicketReport');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('ticket_report','ORDER BY date_of_publication DESC LIMIT 5;','TicketReport');
    }

}