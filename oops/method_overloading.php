<?php

class overload{
    function __call($name , $value){
        if($name='days'){
            switch(count($value)){
               case 1;
               return "sunday"; 
               break;
               case 2;
               return "monday"; 
               break; 
            }
        }
    }
}
$obj= new overload();
echo $obj->days(1);



?>