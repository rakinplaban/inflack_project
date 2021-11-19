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
    
    $sql = "CREATE Table inflackusers(
        id int AUTO_INCREMENT primary key,
        uname Varchar(26) not null,
        fname Varchar(26) not null,
        img blob not null
    )";
    if(mysqli_query($conn, $sql)){
        echo "table created successfully.";
    }
    else{
        echo "Error in creating table ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>