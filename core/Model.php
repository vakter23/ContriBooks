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
    public function removeWithParams($table, $condition) {
        $req = $this->getBdd()->prepare('DELETE FROM '.$table.' WHERE '.$condition.';');
        $req->execute();
        $req->closeCursor();
    }
    protected function getAll($table,$obj)
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

    protected function addWithParams($table,$params){
        // Les paramètres demandés sont les valeurs qu'il faut ajouter dans la bdd
        // La table, la table ou il faut l'ajouter + les tuples qu'on ajoute
        // l'obj, l'objet qu'on cherche a créer
        $req = $this->getBdd()->prepare('INSERT INTO '.$table.' VALUES (' . $params. ');');
        var_dump($req);
        $req->execute();
        $req->closeCursor();
    }
     protected function updateReview($newOpinion, $idReview, $note, $id_user){
        $var = [];
        $req = $this->getBdd()->prepare('UPDATE review SET opinion=\''.$newOpinion.'\', score=\' '.$note.'\' WHERE review.id_review='.$idReview.' AND id_user ='.$id_user.';');
        $req->execute();
        $req->closeCursor();

    }

    protected function updateUserBio($iduser, $bio){
        $var = [];
        $req = $this->getBdd()->prepare('UPDATE user SET biography_user =\' ' .$bio.' \' WHERE user.id_user ='.$iduser.';');
        $req->execute();
        $req->closeCursor();
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