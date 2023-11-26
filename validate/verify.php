<?php

$em = "altafali6394@gmail.com";
$pa = "altaf@123";
$a = $_POST['mail'];
$b = $_POST['pass'];

if($em == $a and $pa==$b){
    echo "login succesfull";
}
else{
    echo "failed";
}

?>