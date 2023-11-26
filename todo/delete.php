<?php
include 'connection.php';
session_start();
$table = $_SESSION['NAME'];
$obj = new crud('todo');

$id=$_REQUEST['id'];

$res = $obj->delete($table, $id);

if($res){
    header("location:view.php");
}
?>