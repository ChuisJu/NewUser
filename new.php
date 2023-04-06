<?php
        function create_user($login, $password) {
            if ((!empty($login)) && (!empty($password))){
                if (!preg_match('/[^A-Za-z0-9]/', $login)) {
                    if ((strlen($password) >= 8) && (strlen($password) <= 64)){
                        if (strlen($login) <= 25){
                            if (preg_match('/[^A-Za-z0-9]/', $password)) {
                                if (file_exists($login)){
                                    return 6;
                                }else{
                                    //$salt = openssl_random_pseudo_bytes(32);

                                    

                                    file_put_contents("/var/www/html/users/".$login, $password);
                                    return 0;
                                } 
                            } return 5;
                        } return 4;
                    } return 3;
                } return 2;
            } return 1;
        }  
        create_user("toto", "azertyuiop@"); 