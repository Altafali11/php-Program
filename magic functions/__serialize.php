<!-- <?php

class Altaf{
    public $name ;
    public $age ;
    public $sex ;

    function __construct($n , $a, $s){
        $this->name=$n;
        $this->age=$a;
        $this->sex=$s;
    }
    function __sleep(){
     return array('name');
    }
}
$ali = new Altaf("altaf" , 22 , "male");
$fazal=serialize($ali);
print_r($fazal);
?> -->




<?php
class Seri{
    public $name ="altaf";
    public $age =22;

    function __sleep(){
        return array('name' , 'age');
    }
}
$obj = new Seri();
$al= serialize($obj);
print_r($al);
?>