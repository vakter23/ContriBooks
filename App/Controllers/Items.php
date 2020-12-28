<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Books;

/**
 * Items controller (example)
 *
 * PHP version 7.0
 */
class Items extends \Core\Controller
//class Items extends Authenticated
{

    /**
     * Require the user to be authenticated before giving access to all methods in the controller
     *
     * @return void
     */
    /*
    protected function before()
    {
        $this->requireLogin();
    }
    */

    /**
     * Items index
     *
     * @return void
     */
    public function indexAction()
    {
//        $book = new Books();
        $stmt = Books::getBooks();
        View::renderTemplate('Items/index.html',[
            'book' => $stmt
        ]);
    }

    /**
     * Add a new item
     *
     * @return void
     */
    public function newAction()
    {
        echo "new action";
    }

    /**
     * Show an item
     *
     * @return void
     */
    public function showAction()
    {
//        echo "show action";

        View::renderTemplate('Items/index.html');

    }
}
