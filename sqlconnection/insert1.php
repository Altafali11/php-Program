<?php
include "connection.php";
?>


<?php
$a = $_GET['sno'];
$b = $_GET['name'];
$c = $_GET['address'];

$sql = "insert into student (sno , name , address) values('$a','$b','$c');";
$result = mysqli_query($conn , $sql);

 if(!$result){
    echo "not inserted";
 }
 else{
    echo "succesfully inserted";
 }

?>