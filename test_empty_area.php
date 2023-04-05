<?php

$ret1 = create_user("", "password!");
$ret2 = create_user("username", "");
$ret3 = create_user("", "");
$ret4 = create_user("username", "Password!");

if(($ret1 != 0) && ($ret2 != 0) && ($ret3 != 0) && ($ret4 != 1){

}else{
    printf ("false");

?>