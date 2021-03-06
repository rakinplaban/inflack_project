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
        <table class = "table">
            <thead>
              <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>Father's Name</th>
                  <th>Profile Picture</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody> 
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "inflack";
    
          $conn = mysqli_connect($servername, $username, $password, $dbname);
    
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
    
          $sql = "SELECT * from inflackusers";
          $result = mysqli_query($conn, $sql);
          while($rows = mysqli_fetch_assoc($result)){
        ?>
            <!-- <table class = "table">
              <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Profile Picture</th>
                <th>Action</th>
              </tr> -->
            
              <tr>
                <td><a href="profile.php?id=<?=$rows['id']?>" style="text-decoration:none;"><?php echo $rows['id']; ?></a></td>
                <td><?php echo $rows['uname']; ?></td>
                <td><?php echo $rows['fname']; ?></td>
                <td><img src="image/<?=$rows['img']?>" alt="image not available" height="50px" width="80px"></td>
                <td><a href="delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a></td>
              </tr>
            
        <?php
          }
        ?>
          </tbody> 
        </table>
    </body>
</html>