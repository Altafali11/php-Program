<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "altaf";

$conn = mysqli_connect($servername, $username ,$password,$database);

// create database manually 

// $sql = "CREATE DATABASE altaf";
// $result = mysqli_query($conn ,$sql);
// if($result){
//     echo "created";
// }
// else{
//     echo "failed";
// }



//  create table manually 

// $sql = "create table friends(sno int (10)PRIMARY KEY , name varchar (12) , city varchar (20) , placed varchar (20))";
// $result = mysqli_query($conn ,$sql);
// if($result){
//     echo "created";
// }
// else{
//     echo "failed". mysqli_error($conn);
// }



// insert data into table

// $sn = "4";
// $nam = "junaid";
// $cit = "okhla";
// $plac = "zinniz";

// $sql =  "insert into friends (sno, name, city, placed) values( $sn ,'$nam' ,'$cit' , '$plac')";

// $result = mysqli_query($conn ,$sql);
// if($result){
//     echo "inserted";
// }
// else{
//     echo "failed". mysqli_error($conn);
// }



$sql = "select * from friends";
$result = mysqli_query($conn ,$sql);

// $num = mysqli_num_rows($result);
// echo $num;

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }

?>