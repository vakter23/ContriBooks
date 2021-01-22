<?php

class TicketContactManager extends Model
{
    public function getTicketContact()
    {
        return $this->getAll('ticket_contact','TicketContact');
    }

    public function addComment($name,$email,$reason,$userMessage){
        $name = htmlentities($name);
        $name = htmlspecialchars($name);
        $email = htmlentities($email);
        $email = htmlspecialchars($email);
        $reason = htmlentities($reason);
        $reason = htmlspecialchars($reason);
        $userMessage = htmlentities($userMessage);
        $userMessage = htmlspecialchars($userMessage);

        return $this->addWithParams('ticket_contact (`username`, `email`, `subject`, `message`)','\''.$name.'\',\''.$email.'\', \' '.$reason.' \' , \' '.$userMessage.' \'', '');
    }

    public function deleteComment($IdTicket){
        $IdTicket = htmlentities($IdTicket);
        $IdTicket = htmlspecialchars($IdTicket);
        return $this->removeWithParams("ticket_contact","id_ticket_contact=$IdTicket");
    }


}