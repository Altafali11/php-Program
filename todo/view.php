<?php
include 'connection.php';
session_start();
$table = $_SESSION['NAME'];
$obj = new crud('todo');

$result = $obj->view($table);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch</title>
    
<style>
    body{
        font-family: Arial, sans-serif; 
        background-color: lightblue; 
    }
    h1{ 
        color: rgb(1, 34, 61); 
        text-align: center; 
    } 
    table { 
        width: 80%; 
        margin: 20px auto; 
        background-color: white; 
        color: black; 
    } 
    th { 
        background-color: rgb(1, 34, 61); 
        color: white; 
    } 
    tr:nth-child(even) { 
        background-color: #f2f2f2; 
    } 
    tr:hover { 
        background-color: #ddd; 
    } 
    td { 
        padding: 8px;
        text-align: center; 
    } 
    button { 
        background-color: rgb(1, 34, 61);
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer; 
        margin: 10px;
    } 
    button:hover { 
        background-color: darkblue; 
    } 
    a {
        color: rgb(1, 34, 61);
        font-weight: bold;
        text-decoration: none; 
    }
    a:hover { 
        color: rgb(132, 187, 232); 
    } 
</style>
</head>
<body>
    <h1>TO DO LIST</h1>
    <div style="display:flex; align-items:center; justify-content:space-between">
    <a href="insert.php"><button name='add'>ADD ITEM</button></a><a href="logout.php"><button>LOGOUT</button></a>
    </div>

    <table border = 1>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php
        while($res = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $res['name']; ?> </td>
            <td><?php echo $res['des']; ?> </td>
            <td><a href='edit.php?id=<?php echo $res['id'];?>'>Edit</a> / <a href='delete.php?id=<?php echo $res['id'];?>'>Delete</a>
        </tr>
    <?php } ?>
    </table>


</body>
</html>



