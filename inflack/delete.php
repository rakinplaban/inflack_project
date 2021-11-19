<?php

    if(isset($_GET["id"])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inflack";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $id = $_GET["id"];
        $sql = "DELETE from inflackusers Where id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: ../inflack/index.php");
        }
       
    }
    else{
        header("Location: ../inflack/index.php");
    }