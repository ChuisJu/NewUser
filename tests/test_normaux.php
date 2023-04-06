<?php
    include("../new.php");
    $ret5 = create_user("username$", "password");
    $ret7 = create_user("username", "passwor");
    $ret12 = create_user("USERNAME", "password");
    $ret15 = create_user("USERNAME", "password!.");
    if(($ret5 == 2) && ($ret7 == 3) && ($ret12 == 5) && ($ret15 == 0)){
        printf("true");
    }else{
        printf("false");
        printf($ret5);
        printf($ret7);
        printf($ret12);
        printf($ret15);
    }
?>
