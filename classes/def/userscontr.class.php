<?php
namespace Classes\def;
    class UsersContr extends Users
    {
        public function createUser($login, $email, $pwd)
        {
            $this->setUser($login, $email, $pwd);
        }
    }