<?php
abstract class Model
{
    protected static $_bdd;

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

    public function getAll($table,$obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM '.$table.';');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }
    protected function getWithParams($tuple, $table,$params,$obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT '.$tuple.' FROM '.$table. ' ' . $params);
        $req->execute();

        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }
    public function editWithParams($table,$set, $condition) {
        $req = $this->getBdd()->prepare('UPDATE '.$table.' SET '.$set.' WHERE '. $condition.' ;');
        $req->execute();
        $req->closeCursor();
    }
    public function removeWithParams($table, $condition) {
        $req = $this->getBdd()->prepare('DELETE FROM '.$table.' WHERE '.$condition.' ;');
        $req->execute();
        $req->closeCursor();
    }

    public function addWithParams($table,$params){
        // Les paramètres demandés sont les valeurs qu'il faut ajouter dans la bdd
        // La table, la table ou il faut l'ajouter + les tuples qu'on ajoute
        // l'obj, l'objet qu'on cherche a créer
        $req = $this->getBdd()->prepare('INSERT INTO '.$table.' VALUES (' . $params. ');');
        $req->execute();
        $req->closeCursor();
    }

    public function updateWithParams($table, $params) {
        $req = $this->getBdd()->prepare('UPDATE '.$table.' SET '.$params.';');
        $req->execute();
        $req->closeCursor();
    }



    protected function getLastReviews($user, $obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT opinion, id_user  FROM review where (id_user ='.$user.');');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }
    protected function updateReview($newOpinion, $idReview){
        $var = [];
        $req = $this->getBdd()->prepare('UPDATE review SET opinion = \' ' .$newOpinion.' \' WHERE review.id_review ='.$idReview.';');
        $req->execute();
        $req->closeCursor();
        return $var;
    }

    protected function getAuteurByAuteur($iduser){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM `book` NATURAL JOIN author WHERE book.id_author = author.id_author AND book.id_author = '.$iduser.';');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Author($data);
        }
        $req->closeCursor();
        return $var;
    }

    protected function getBookByAuteur($iduser){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT isbn FROM `book` NATURAL JOIN author WHERE book.id_author = author.id_author AND book.id_author = '.$iduser.';');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Book($data);
        }
        $req->closeCursor();
        return $var;
    }


}