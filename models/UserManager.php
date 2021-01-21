<?php

class UserManager extends Model
{
    private $users;

    public function getUsers()
    {
        $this->users = $this->getAll('user', 'User');
        return $this->users;
    }

    public function checkIfExists()
    {

        $usernameExists = self::$_bdd->prepare("SELECT * FROM user WHERE username = :login");
        $usernameExists->execute(array(':login' => $_POST['login']));

        if ($usernameExists->rowCount() >= 1) {
            return 1;
        } else {
            $emailExists = self::$_bdd->prepare("SELECT * FROM user WHERE email = :email");
            $emailExists->execute(array(':email' => $_POST['email']));
            $emailExists->fetch();
            if ($emailExists->rowCount() >= 1) {
                return 2;
            }
        }
        return 0;
    }

    public function addUser()
    {

        $login = $_POST['login'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];

        $emailExists = self::$_bdd->prepare("INSERT INTO user (username, password, email) VALUES (:login, :password, :email);");
        $emailExists->execute(array(':login' => $login, ':password' => $password, ':email' => $email));
    }

    public function connect()
    {

        $login = $_POST['login'];
        $password = $_POST['password'];

        foreach ($this->users as $user) {
            if ($user->getUsername() == $login) {
                if (password_verify($password, $user->getPassword())) {
                    $id = $user->getId_user();
                    $_SESSION['id'] = $id;
                    $_SESSION['login'] = $login;
                    //var_dump($_SESSION);
                    echo 'Vous êtes connecté !';
                    return true;
                }
            }

        }
        echo 'Mauvais identifiant ou mot de passe !';
        return false;
    }

    public function disconnect()
    {
        session_destroy();
    }

    public function getStatsUser($id_user)
    {
        return $this->getWithParams('user', 'WHERE id_user = ' . $id_user . ';', 'user');
    }
}