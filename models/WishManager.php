<?php

class WishManager extends Model
{
    public function getWishlist($iduser)
    {
        return $this->getWithParams('wish','WHERE id_user = '.$iduser.';', 'Wish');
    }


}