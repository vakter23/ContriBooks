<?php


class AuthorManager extends Model
{
    public function getAuthor($idAuteur){
        return $this->getWithParams('author', 'WHERE id_author = '.$idAuteur.';', 'Author');
    }

}