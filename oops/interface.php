<?php

interface Practice{

    function sum($a,$b);
}
class Derived implements Practice{
    function sum($a,$b){
       echo $a+$b;
    }
}
$obj= new Derived();
$obj->sum(10,10);
?>