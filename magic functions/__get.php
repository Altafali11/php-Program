<?php

class Altaf{

    private $num ;

    function __set($name , $value){
        $this->$name=$value;
    }
    function __get($value){
       return $this->$value;
    }
}
$obj= new Altaf();
$obj->num=22;
echo $obj->num;


?>