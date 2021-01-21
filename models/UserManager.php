<?php

class UserManager extends Model
{
    private $users;

    public function getUsers()
    {
        $this->users = $this->getAll('user','User');
        return $this->users;
    }

    public function checkIfExists() {

        $this->users = $this->getWithParams('user', 'WHERE username = \''.$_POST['login'].'\' OR email = \''.$_POST['email'].'\';', 'User');
        return $this->users;
    }

    public function addUser() {

        $login = $_POST['login'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $this->addWithParams('user(username, password, email)', '\''.$login.'\', \''.$password.'\', \''.$email.'\'');
    }

    public function connect() {

        foreach($this->users as $user) {
            if($user->getUsername() == $_POST['login']) {
                if (password_verify($_POST['password'], $user->getPassword())) {
                    var_dump("test");
                    $_SESSION['id'] = $user->getId_user();
                    $_SESSION['login'] = $_POST['login'];
                    $_POST['submit'] = 'connected';
                }
            }
        }
    }

    public function disconnect() {

        session_destroy();
    }

}