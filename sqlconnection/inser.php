<?php
 include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert1.php" method="get">
        <input type="number" placeholder="sno" name = "sno"><br>
        <input type="text" placeholder="name" name = "name"><br>
        <input type="text" placeholder="addr" name = "address"><br>
        <input type="submit" value="sumitted">

    </form>
</body>
</html>