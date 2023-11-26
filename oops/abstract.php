<?php

abstract class one{

    function sum ($a,$b){
        echo $a+$b;
    }
    abstract function sub($x,$y);
}
class derived extends one{
    function sub($x,$y){
    echo $x-$y."<br>";
    }
}
$obj = new derived();
$obj->sub(10,5);
$obj->sum(10,5);


?>