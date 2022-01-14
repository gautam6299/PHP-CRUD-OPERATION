<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="style.css"/>
</head>

<body> 
     <div class="header">
         <h1>CERD OPERATION</h1>
     </div>
      <div class="container">
          <nav class="Navigation">
              <ul>
                  <li><a href='insert.php'>Insert</a></li>
                  <li><a href="display.php">Display</a></li>
                  <li><a href="update.php">Update</a></li>
                  <li><a href="delete.php">Delete</a></li>
              </ul>
          </nav>
      </div>
</body>
</html> -->

<?php
  include("connection.php");
  error_reporting(0);
  $rollno=$_GET['rn'];
  $query="DELETE FROM STUDENT WHERE ROLLNO='$rollno'";
  $data=mysqli_query($conn,$query);
  if($data){
      echo "<script>alert('deleted')</script>";
      ?>
      <meta HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost/CRUB%20PHP%20OPERATION/display.php">
      <?php
  }
  else{
      echo "Delete process fail";
  }
?>