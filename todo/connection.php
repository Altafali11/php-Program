<?php

class crud{
    public $conn;
    function __construct($db){
        $this->conn = mysqli_connect('localhost', 'root', '', $db);
    }
    
    function insert($table, $data){
        $sql = "insert into $table(name, des) values('$data[0]', '$data[1]')";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function view($table){
        $sql = "select * from $table";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function edit($table, $data){
        $sql = "UPDATE $table SET name='$data[1]', des='$data[2]' WHERE id='$data[0]';";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function delete($table, $del){
        $sql = "DELETE FROM $table WHERE id='$del' ";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function register($data){
        $sql = "INSERT INTO details(name, email, mobile, password) VALUES('$data[0]','$data[1]','$data[2]','$data[3]');";
        $ins = mysqli_query($this->conn, $sql);
        if($ins){
            $query = "create table $data[0](id int(20) auto_increment, name varchar(50), des varchar(100), PRIMARY KEY (id));";
            $res = mysqli_query((mysqli_connect('localhost', 'root','','todo')), $query);
            header("location:login.php");
        }
    }

    function login($data){
        $e=$_REQUEST['e'];
        $p=$_REQUEST['p'];
        $pd = "Select * from DETAILS where password = '$p' AND (email = '$e' OR mobile = '$e');";
        $password = mysqli_query($this->conn, $pd);
        
        $row = mysqli_fetch_assoc($password);
            
        if(($e == $row['email'] || $e == $row['mobile']) AND $p == $row['password']){
            $_SESSION['ID'] = $row['id'];
            $_SESSION['NAME'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            header("location:view.php");
            die();    
        }
        else{
            header("location:login.php");
        }
    }
}

?>