<?php
 
 class Altaf {

    public $name;
    public $age;

    function __construct($n, $a ){
        $this->name=$n;
        $this->age=$a;
    }
 }
 $obj = new Altaf("altaf",22);
 $obj1= clone $obj;
$obj1->name="fazal";

 echo "<pre>";
 print_r($obj);
 echo "</pre>";

 echo "<pre>";
 print_r($obj1);
 echo "</pre>";
?>