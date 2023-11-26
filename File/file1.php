

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="result">
    </form>
</body>
</html>

<?php
 if(isset($_FILES['img'])){
    echo "<pre>";
    print_r($_FILES);
    echo "<pre>";

     $filename =$_FILES['img'] ['name'];
     $filesize =$_FILES ['img']['size'];
     $filelocation =$_FILES['img']['tmp_name'];
     $filetype =$_FILES['img']['type'];

     $move = move_uploaded_file($filelocation,"images" .$filename);

     if(!$move){
        echo "failed";
     }
     else{
        echo "succesfull uploaded";
     }


 }
?>