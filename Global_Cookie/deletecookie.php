<?php
setcookie("mobile","vivo",time()-3600,"/");
if(count($_COOKIE)>0){
    echo "set succesfully";
}
else{
    echo "failed to set";
}

?>