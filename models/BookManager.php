<?php

class BookManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('book','Book');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('*','book','ORDER BY date_of_publication DESC LIMIT 5;','Book');
    }
    public function getNewBestFiveBooks()
    {
        return $this->getWithParams('*','book','ORDER BY date_of_publication DESC,rate LIMIT 5;','Book');
    }

    public function search() {
        if(isset($_POST['query'])){$query = $_POST['query'];}else{$query='';}
        return $this->getWithParams('*','book', 'WHERE ISBN LIKE '."'".'%'.$query.'%'."'".' OR title_book LIKE '."'".'%'.$query.'%'."'".';','Book');
    }
    public function getBookByISBN($ISBN){
        return $this->getWithParams('*','book', 'WHERE ISBN = '.$ISBN.';', 'Book');
    }

    public function getAuthor($iduser)
    {
        return $this->getWithParams('*','book NATURAL JOIN author', ' WHERE book.id_author = author.id_author AND book.id_author = '.$iduser.';', 'Author');
    }

    public function getBooksByGenre($genre)
    {
        return $this->getWithParams('*','book B', "WHERE B.id_genre='$genre' AND NOT EXISTS (SELECT * FROM like_list L WHERE B.ISBN = L.ISBN);", 'LikeList');
    }

    public function getBooksByAuthor($iduser)
    {
        return $this->getBookByAuteur($iduser, 'isbn');
    }

    public function getAllBooksAuthor($idauthor)
    {
        return $this->getWithParams('*','author', 'WHERE id_author = ' . $idauthor . ';', 'Author');
    }


    public function getBookByWishlist($iduser){
        return $this->getWithParams('*','book', 'natural join wish where book.isbn = wish.isbn AND wish.id_user = '.$iduser.';', 'Book' );
    }

    public function getTop50(){
        return $this->getWithParams('*','book', 'ORDER BY RATE DESC LIMIT 50', 'Book');
    }




    public function getReviewsByISBN($ISBN){
        return $this->getWithParams('*','review', 'WHERE ISBN = '.$ISBN.';', 'Review');
    }

    public function getReviewsByISBNAndIdUser($ISBN, $id_user){
        return $this->getWithParams('*','review', 'WHERE ISBN = '.$ISBN.' AND id_user= '.$id_user.';', 'Review');
    }

    public function addComment($ISBN){
        $score = $_POST["score"];
        $comment = ($_POST["comment"]);
        $comment = htmlentities($comment, ENT_QUOTES, 'UTF-8');
        $user = $_SESSION["id"];
        return $this->addWithParams('review (ISBN, id_user, score, opinion)', '\'' . $ISBN . '\',\'' . $user . '\',\'' . $score . '\',\'' . $comment . '\' ', '');
    }

    public function changeComment($comment, $idReview, $note, $id_user)
    {
        $comment = htmlentities($comment, ENT_QUOTES, 'UTF-8');
        return $this->updateReview($comment, $idReview, $note, $id_user);
    }

    public function getReviewByIdUser($ISBN)
    {
        $results = $this->getWithParams('*','review', 'WHERE ISBN =' . $ISBN . ' AND id_user =' . $_SESSION["id"] . ';', 'Review');
        $result = "";
        if(count($results)>0){
            foreach ($results as $result) {
                $result = '<div class="add-comment"><p>'.$result->getScore().',' . $result->getOpinion() . '</p></div>';
            }
        }
//        echo $result;
    }

    public function getLastReviewsByUser($id_user)
    {
        return $this->getWithParams('*','review' ,'where (id_user ='.$id_user.');', 'Review');
    }


    public function getNewBooks() {
        return $this->getWithParams('*','book', 'ORDER BY date_of_publication DESC', 'Book');
    }

    public function deleteBook($ISBN)
    {
        return $this->removeWithParams('book',"ISBN = '$ISBN' ");
    }
    public function editBook($ISBN,$Title,$Synopsis)
    {
        return $this->editWithParams('book',"title_book = '$Title', synopsis_book = '$Synopsis' ","ISBN = '$ISBN' ");
    }
    public function addNewBook($ISBN,$Title,$Synopsis,$Date,$Author)
    {
        return $this->addWithParams('book'," ");

    }
//    public function getAuthor($iduser)
//    {
//        return $this->getAuteurByAuteur($iduser);
//    }


}