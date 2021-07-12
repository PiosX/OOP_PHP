<?php
namespace Classes\View;

    class UsersView extends \classes\User\Users
    {
        public function showUser($login)
        {
            $results = $this->getUser($login);
            echo "Login: ".$results[0]['login'].", Email: ".$results[0]['email'];
        }
    }