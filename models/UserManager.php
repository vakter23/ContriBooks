<?php

class UserManager extends Model
{
    public function getUsers()
    {
        return $this->getAll('user','Users');
    }

}