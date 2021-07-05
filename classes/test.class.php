<?php

    class Test extends Dbh
    {
        public function getUsers()
        {
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch())
            {
                echo $row['login'].'<br />';
            }
        }

        public function getUsersStmt($login, $email)
        {
            $sql = "SELECT * FROM users WHERE login = ? AND email = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$login,$email]);
            $names = $stmt->fetchAll();

            foreach($names as $name)
            {
                echo $name['login'].'<br />';
            }
        }

        public function setUsersStmt($login, $email, $pwd)
        {
            $sql = "INSERT INTO users(login,email,password) VALUES(?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$login,$email,$pwd]);
        }
    }