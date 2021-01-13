<?php

class TicketBookManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('ticket_book','TicketBook');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('ticket_book','ORDER BY date_of_publication DESC LIMIT 5;','TicketBook');
    }

}