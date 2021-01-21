<?php


class ControllerTemplate {

    protected $_loader;

    public function __construct()
    {
        $this->_loader = new LoaderManager();
        $this->search();
    }

    public function search() {

        echo $this->_loader->getBooks();
    }
}