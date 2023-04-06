<?php

include("../new.php");

$ret5 = create_user("username$", "password");
$ret7 = create_user("username", "passwor");
$ret12 = create_user("USERNAME", "password");
$ret15 = create_user("USERNAME", "password!.");

if(($ret1 == 2) && ($ret2 == 3) && ($ret3 == 5) && ($ret4 == 0)){
    printf(true);
}else{
    printf("false");
    printf($ret5);
    printf($ret7);
    printf($ret12);
    printf($ret15);
}
