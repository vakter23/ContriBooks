<?php


class ControllerTemplate {

    private $_bookManager;

    public function __construct()
    {
        $this->_bookManager = new BookManager;
        $books = $this->_bookManager->search();
        $result = "";
        if (count($books) > 0) {
            foreach ($books as $book) {
                $result = $result . '<div class="search-result">' . $book->getTitle_book() . '</div>';
            }
        }
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}