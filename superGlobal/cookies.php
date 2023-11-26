<?php

 $check =setcookie("altaf" ,"12" ,time() + (86400 * 30) , "/");
if($check){
    echo $_COOKIE['altaf'];
}
else{
    echo "failed to set";
}

?>