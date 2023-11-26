<?php
include "connection.php";
$obj = new crud('db');

if(isset($_REQUEST['sbt'])){
    $n=$_REQUEST['n'];
    $e=$_REQUEST['e'];
    $m=$_REQUEST['m'];
    $p=$_REQUEST['p'];
    $data = [$n, $e, $m, $p];
    $obj->register($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="n" placeholder="name" required><br>
        <input type="email" name="e" placeholder="Email"><br>
        <input type="number" name="m" placeholder="Mobile Number"><br>
        <input type="password" name="p" placeholder="Password"><br>
        <input type="submit" value="Submit" name='sbt'>
    </form>
</body>
</html>