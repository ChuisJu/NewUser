<?php

include("new.php");


$ret5 = create_user("username$", "password");

$ret7 = create_user("username", "passwor");
$ret8 = create_user("' OR '1'='1", "password");

$ret11 = create_user(";ls -la;", "password");
$ret12 = create_user("USERNAME", "password");

if(($ret1 != 0) && ($ret2 != 0) && ($ret3 != 0) && ($ret4 != 0) && ($ret5 != 0) && ($ret6 != 0) && ($ret7 != 0) && ($ret8 != 0) && ($ret9 != 0) && ($ret10 != 0) && ($ret11 != 0) && ($ret12 != 0) && ($ret13 != 0)) printf ("true"){
  
}else{
    printf ("false");
    printf($ret1);
    printf($ret2);
    printf($ret3);
    printf($ret4);
    printf($ret5);
    printf($ret6);
    printf($ret7);
    printf($ret8);
    printf($ret9);
    printf($ret10);
    printf($ret11);
    printf($ret12);
    printf($ret13);
} 


?>



