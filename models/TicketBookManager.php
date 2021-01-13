<?php

class TicketBookManager extends Model
{
    public function getTicketsBook()
    {
        return $this->getAll('ticket_book','TicketBook');
    }

}