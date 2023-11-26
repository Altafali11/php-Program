<!-- <?php

setcookie("mobile","vivo",time()+(86400),"/");
if(($_COOKIE['mobile'])){
    echo "set succesfully";
}
else{
    echo "failed to set";
}

?> -->


<!-- <?php
$cookiename = "altaf";
$cookievalue = "php";
setcookie($cookiename,$cookievalue,time()+(86400),"/");
if(($_COOKIE[$cookiename])){
    echo "set succesfully";
}
else{
    echo "failed to set";
}

?> -->



 <?php

$a = $_GET['name'];
$b = $_GET['value'];
setcookie($a,$b,time()+(86400),"/");
if(($_COOKIE[$a])){
    echo "set succesfully";
}
else{
    echo "failed to set";
}

?>