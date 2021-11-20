<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Index</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="createprofile.php">Create profile</a>
              </li>
            </ul>
          </div>
        </nav>
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
          $sql = "SELECT uname,fname,img from inflackusers Where id = $id";
          $result = mysqli_query($conn, $sql);
          $rows = mysqli_fetch_assoc($result);
        ?>

          <div style="margin:30px 20px 0px 600px;">
              <img src="image/<?=$rows['img']?>" alt="image not available" style="border-radius:50%" height="250px" width="250px"><br>
              <div class="m-2">
                <label>Name:  </label>
                <label><?php echo $rows['uname']; ?></label>
              </div>
              <div class="m-2">
                <label>Father's Name:  </label>
                <label><?php echo $rows['fname']; ?></label>
              </div>
              <a href="editprofile.php?id=<?=$_GET["id"]?>" class="btn btn-success m-2">Edit</a>

          </div>
            
    </body>
</html>