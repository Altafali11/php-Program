<?php
include 'connection.php';
session_start();
$table = $_SESSION['NAME'];
$obj = new crud('todo');

$id=$_REQUEST['id'];
$query = "select * from $table where id = '$id'";
$res = mysqli_query($obj->conn, $query);

if(isset($_REQUEST['sbt'])){
    $data = [$id, $_REQUEST['name'], $_REQUEST['des']];
    $re = $obj->edit($table, $data);
    if($re){
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
        <?php while($row = mysqli_fetch_assoc($res)){ ?>
            <input type="text" name='name' value="<?php echo $row['name'] ?>">
            <input type="text" name='des' value="<?php echo $row['des'] ?>">
            <input type="submit" name= 'sbt' value='Submit'>
        <?php } ?>
    </form>
</body>
</html>