<?php


class AuthorManager extends Model
{
    public function getAuthor($idAuteur){
        $idAuteur = htmlentities($idAuteur);
        $idAuteur = htmlspecialchars($idAuteur);
        return $this->getWithParams('*','author', 'WHERE id_author = '.$idAuteur.';', 'Author');
    }

}