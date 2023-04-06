<?php
    include("../new.php");
    $ret8 = create_user("' OR '1'='1", "password##");
    $ret11 = create_user(";ls -la;", "password##");
    $ret14 = create_user("AZLdjAHfoaj", "MotDePasse@99");
    if(($ret8 == 2) && ($ret11 == 2) && ($ret14 == 0)){
        printf("true"); 
    }else{
        printf("false");
        printf($ret9);
        printf($ret11);
        printf($ret14);
    }
?>