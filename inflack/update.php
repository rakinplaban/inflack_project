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

        $sql = "SELECT * from inflackusers Where id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: ../inflack/index.php");
        }
       
    }
    else if(isset($_POST["Submit"])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inflack";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $id = $_REQUEST["id"];
        $uname = $_REQUEST["uname"];
        $fname = $_REQUEST["fname"];
        $img = $_REQUEST["img"];

        $sql = "UPDATE inflackusers
                SET uname = '$uname', fname = '$fname', img = '$img'
                Where id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: ../inflack/index.php");
        }
       
    }
    else{
        header("Location: ../inflack/index.php");
    }