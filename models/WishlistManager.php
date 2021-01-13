<?php

class WishlistManager extends Model
{
    public function getWishlist()
    {
        return $this->getAll('wishlist','Wishlist');
    }

}