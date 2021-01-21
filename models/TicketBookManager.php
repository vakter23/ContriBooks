<?php

class TicketBookManager extends Model
{
    public function getTicketsBook()
    {
        return $this->getAll('ticket_book','TicketBook');
    }

    public function addBooks($id,$isbn,$title,$year,$author,$subject){
        return $this->addWithParams('ticket_book (`id_user`, `ISBN`, `title_book`, `synopsis_book`,`date_of_creation`,`author`)','\''.$id.'\',\''.$isbn.'\', \' '.$title.' \' , \' '.$subject.' \' , \' '.$year.' \' , \' '.$author.' \' ');
    }

}