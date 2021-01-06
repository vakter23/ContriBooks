<?php
abstract class Model
{
    private static $_bdd;

    private static function setBdd()
    {
        try {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=contribooks;charset=utf8','dvwadmin','ZcLyF5RfJ9mLJMjQ');
          // set the PDO error mode to exception
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getBdd()
    {
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    protected function getAll($table,$obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM '.$table .';');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }
    protected function getWithParams($table,$params,$obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM '.$table. ' ' . $params);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }

}