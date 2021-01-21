<?php


class ControllerTemplate {

    protected $_loader;

    public function __construct()
    {
        $this->_loader = new LoaderManager();
        //$this->search();
    }

    public function search() {

        $books = $this->_loader->getBooks();
        $result = "";
        if (count($books) > 0) {
            foreach ($books as $book) {
                $result = $result . '<div class="search-result">'.$book['title_book'].'</div>';
            }
        }
        $result = "lol";
        return json_encode($result);
    }
}