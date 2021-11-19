<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inflack";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $uname = $_REQUEST["uname"];
    $fname = $_REQUEST["fname"];
    $img = $_REQUEST["img"];

    $sql = "INSERT INTO inflackusers(uname, fname , img)
    VALUES('$uname', '$fname', '$img')";

    if(mysqli_query($conn, $sql)){
        header("Location: ../inflack/index.php");
    }
    else{
        echo "Error in inserting data ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>