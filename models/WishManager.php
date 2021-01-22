<?php

class WishManager extends Model
{
    public function getWishlist($iduser)
    {
        $s = $this->getWithParams('*','wish','WHERE id_user = '.$iduser.';', 'Wish');
        return $s;
    }
    public function addWithParams($table, $params)
    {
       parent::addWithParams($table, '\''.$params.'\','.$_SESSION["id"].'');
    }
    public function removeWish($table, $isbn){
        $this->removeWithParams($table, 'id_user = '.$_SESSION["id"].' and ISBN = '.$isbn.'');
    }



}