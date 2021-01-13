<?php

class WishlistManager extends Model
{
    public function getBooks()
    {
        return $this->getAll('wishlist','Wishlist');
    }
    public function getNewFiveBooks()
    {
        return $this->getWithParams('wishlist','ORDER BY date_of_publication DESC LIMIT 5;','Wishlist');
    }

}