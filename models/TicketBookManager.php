<?php

class TicketBookManager extends Model
{
    public function getTicketsBook()
    {
        return $this->getAll('ticket_book','TicketBook');
    }

    public function addBooks($id,$isbn,$title,$year,$author,$subject){
        $id = htmlentities($id);
        $id = htmlspecialchars($id);
        $isbn = htmlentities($isbn);
        $isbn = htmlspecialchars($isbn);
        $title = htmlentities($title);
        $title = htmlspecialchars($title);
        $year = htmlentities($year);
        $year = htmlspecialchars($year);
        $author = htmlspecialchars($author);
        $author = htmlentities($author);
        $subject = htmlspecialchars($subject);
        $subject = htmlentities($subject);

        return $this->addWithParams('ticket_book (`id_user`, `ISBN`, `title_book`, `synopsis_book`,`date_of_creation`,`author`)','\''.$id.'\',\''.$isbn.'\', \' '.$title.' \' , \' '.$subject.' \' , \' '.$year.' \' , \' '.$author.' \' ', '');
    }

}