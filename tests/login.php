<?php
    include ("../connect.php");
    $ret1 = connect("admin", "Password1234!");
    $ret2 = connect("@//:User", "Motdepasse!");
    $ret3 = connect("", "Motdepasse!");
    $ret4 = connect("admin", "Azertyuiop!");
    if(($ret2 == 2) && ($ret3 == 1) && ($ret4 == 4)){
        printf("true");
    }else{
        printf("false");
        printf($ret1);
        printf($ret2);
        printf($ret3);
        printf($ret4);
    }
?>


