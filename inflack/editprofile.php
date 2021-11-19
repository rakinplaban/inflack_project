<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Create a New User.</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="createprofile.php">Create profile.</a>
              </li>
            </ul>
          </div>
        </nav>
        <h1>Update Profile:</h1>
        <?php
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
          $rows = mysqli_fetch_assoc($result);
        ?>
        <div style="margin:10px 10px 10px 10px">        
            <form action="update.php" class= "form-group" method="GET">
                <label>Name:</label>
                <div style="margin: 3px 3px 3px 0px">
                    <input type="text" name = "uname" value="<?=$rows["uname"]?>" placeholder="Name" class="form-control">
                </div>
                <label>Father's Name</label>
                <div style="margin: 3px 3px 3px 0px">
                    <input type="text" name = "fname" value="<?=$rows["fname"]?>" placeholder="Father's name" class="form-control">
                </div>
                <div style="margin: 5px 3px 5px 0px">
                    <label>Profile Image</label>
                    <input type="file" name = "img" value="<?=$rows["img"]?>" placeholder="Upload Image" class="form-control-file" accept="image/">
                </div>
                <div style="margin: 3px 3px 3px 0px">
                    <input type="text" name = "id" value="<?=$rows["id"]?>" class="form-control">
                </div>
                <input type="Submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </body>
</html>