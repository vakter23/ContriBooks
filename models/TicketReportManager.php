<?php

class TicketReportManager extends Model
{
    public function getTicketsReport()
    {
        return $this->getAll('ticket_report','TicketReport');
    }
    public function addReport($userName,$userReason,$userMessage){
        return $this->addWithParams("ticket_report('id_user_send','title_report','reason_report')","'$userName','$userReason','$userMessage'");
    }

}