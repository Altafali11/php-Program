<?php
session_start();
$table = $_SESSION['NAME'];
include 'connection.php';
$obj = new crud('todo');


if(isset($_REQUEST['sbt'])){
    $name = $_REQUEST['name'];
    $des = $_REQUEST["des"]; 
    $data = [$name, $des];              
    $res = $obj->insert($table, $data);
    if($res){
        header("location:view.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name='name' placeholder='Name'><br>
        <input type="text" name='des' placeholder='Description'><br>
        <input type="submit" name='sbt' value='Submit'>
    </form>
</body>
</html>