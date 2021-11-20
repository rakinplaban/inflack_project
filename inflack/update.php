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
        $image = $_FILES["img"]["name"];
        $image_temp = $_FILES["img"]["tmp_name"];
        if($image_temp != ""){
            move_uploaded_file($_FILES["img"]["tmp_name"],"image/".$_FILES["img"]["name"]);

            $sql = "UPDATE inflackusers
                    SET uname = '$uname', fname = '$fname', img = '$image'
                    Where id = $id";
        }
        else{
            $sql = "UPDATE inflackusers
                    SET uname = '$uname', fname = '$fname', img = '$image'
                    Where id = $id";
        }
        
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: ../inflack/index.php");
        }
       
    }
    else{
        header("Location: ../inflack/index.php");
    }