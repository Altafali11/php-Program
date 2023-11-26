<!-- <?php
class Altaf{
    public $name;
    public $batch;
    function __construct($n , $b){
        $this->name=$n;
        $this->batch=$b;
    }
    function __invoke(){
        
        echo $this->name;
        echo $this->batch;
    }
}
$ali = new Altaf('altaf' , 'php2');
echo $ali();
?> -->



<?php
class Altaf{
    public $name = "altaf";
    public $age = "22";
    public $sex = "male";

    function __invoke(){
       echo   $this->name;
       echo   $this->age;
       echo   $this->sex;  
    }
}
$obj =  new Altaf();
echo $obj();
?>