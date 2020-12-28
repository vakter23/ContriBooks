<?php

namespace App\Models;

use PDO;
use \App\Token;
use \App\Mail;
use \Core\View;


class Books extends \Core\Model
{
    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        };
    }

    public static function getBooks()
    {
        $sql = 'SELECT * FROM book LIMIT 0,6';

        $db = static::getDB();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $donne = $stmt->fetchAll();
        return $donne;
    }

}