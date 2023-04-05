<?php
        function create_user($login, $password) {
            if (!empty($login)) &&  (!empty($password)){
                if (!preg_match('/[^A-Za-z0-9]/', $login)) {
                    if (strlen($password) >= 8) && (strlen($password) <= 64){
                        if (strlen($login) <= 25){
                            if (preg_match('/[^A-Za-z0-9]/', $password)) {
                                if (file_exists($login)){
                                    break;
                                }else{
                                    
                                    file_put_contents("/var/www/html/users/".$login, $password);
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }  
        
?>
