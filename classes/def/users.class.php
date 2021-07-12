<?php
namespace Classes\User;

use PDO;
    class Users extends \Classes\def\Dbh
    {
        protected function getUser($login)
        {
            $sql = "SELECT * FROM users WHERE login = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$login]);

            $results = $stmt->fetchAll();
            return $results;
        }
        protected function setUser($login, $email, $pwd)
        {
            $sql = "INSERT INTO users(login,email,password) VALUES(?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$login,$email,$pwd]);
        }
    }