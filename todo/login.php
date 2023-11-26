<?php

session_start();
if (isset($_SESSION['ID'])) {
    header("Location:view.php");
    exit();
}

include "connection.php";
$obj = new crud('db');

if(isset($_REQUEST['sbt'])){
    $obj->login($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="e" placeholder="Email/Mobile"><br>
        <input type="password" name="p" placeholder="Password"><br>
        <input type="submit" name="sbt" value="Login">
    </form>

    <a href="registration.php">Register</a>
</body>
</html>

