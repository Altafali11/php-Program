<?php

interface first{

    function sum($a,$b);
}
interface second {

    function sum($a,$b);
}
class derived implements first,second{

    function sum($a,$b){
        echo $a+$b;
    }
}
$obj=new derived();
$obj->sum(10,10);



?>