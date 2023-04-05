<?php

    $ret1 = create_user("", "password!");
    $ret2 = create_user("username", "");
    $ret3 = create_user("", "");
    $ret4 = create_user("username", "Password!");

    if(($ret1 == 1) && ($ret2 == 1) && ($ret3 == 1) && ($ret4 == 0)){

    }else{
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
        printf($ret4);
    }
?>