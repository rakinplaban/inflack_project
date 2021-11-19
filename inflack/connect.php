<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "CREATE DATABASE inflack";
    if(mysqli_query($conn, $sql)){
        echo "db created successfully.";
    }
    else{
        echo "Error in creating db ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>