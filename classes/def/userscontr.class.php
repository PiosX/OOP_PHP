<?php
namespace Classes\controller;
    class UsersContr extends \Classes\User\Users
    {
        public function createUser($login, $email, $pwd)
        {
            $this->setUser($login, $email, $pwd);
        }
    }