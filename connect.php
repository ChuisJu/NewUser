<?php
    function connect($login, $password){
        $userfile = "users/" . $login;
        if ((empty($login)) || (empty($password))){
            return 1;
        }
        if (preg_match('/[^A-Za-z0-9]/', $login)) {
            return 2;
        }
        if(!file_exists($userfile)){
            return 3;
        }
        $userData = file($userfile, FILE_IGNORE_NEW_LINES);
        if ($userData[1] !== $password) {
            return 4;
        }
        return array('login' => $login, 'name' => $userData[0]);
    }
?>
