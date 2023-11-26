<!-- <?php
 class Altaf{
    private $name = "altaf";
     function __isset($property){
        if(isset($this->$property)){
            echo "set";
        }
        else{
            echo "not set";
        }
     }
     function __unset($n){
        unset($this->$n);
     }
 }
$ali = new Altaf();
unset($ali->name);
isset($ali->name);
?> -->




<!-- <?php

class All{
    private $name;

    function __set($num ,$value){
       $this->name=$value;
    }

    function __isset($value){
        if(isset($this->$value)){
            echo "set<br>";
        }
        else{
            echo "not set";
        }
    }
    function __unset($value){
        unset($this->$value);
    }

}
$obj= new All();
$obj->name="altaf"; 
isset($obj->name);
unset($obj->name);
isset($obj->name);

?> -->