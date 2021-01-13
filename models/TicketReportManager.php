<?php

class TicketReportManager extends Model
{
    public function getTicketsReport()
    {
        return $this->getAll('ticket_report','TicketReport');
    }

}