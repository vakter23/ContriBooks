<?php

class TicketContactManager extends Model
{
    public function getTicketContact()
    {
        return $this->getAll('ticket_contact','TicketContact');
    }

    public function addComment($name,$email,$reason,$userMessage){
        return $this->addWithParams('ticket_contact (`username`, `email`, `subject`, `message`)','\''.$name.'\',\''.$email.'\', \' '.$reason.' \' , \' '.$userMessage.' \'');
    }

    public function deleteComment($IdTicket){
        return $this->removeWithParams("ticket_contact","id_ticket_contact=$IdTicket");
    }


}