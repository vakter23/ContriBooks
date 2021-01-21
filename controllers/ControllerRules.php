<?php


class ControllerRules
{
    private $_ticketBookManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count(array($url)) > 1)
            throw new Exception('Page Introuvable');
        else {
            $this->_ticketBookManager = new TicketBookManager();
            $this->_view = new View('Rules');
            $this->_view->generate(array());
        }
    }

}