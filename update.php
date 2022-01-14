<?php
  include("connection.php");
  error_reporting(0);
  $_GET['rn'];
  $_GET['sn'];
  $_GET['cl'];
  
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="header">
         <h1>CRUD OPERATION</h1>
     </div>
      <div class="container">
          <nav class="Navigation">
              <ul>
                  <li><a href='insert.php'>Insert</a></li>
                  <li><a href="display.php">Display</a></li>
                  <!-- <li><a href="update.php">Update</a></li> -->
                  <!-- <li><a href="delete.php">Delate</a></li> -->
              </ul>
          </nav>
      </div>

     <div class="FORM">
         <form action=" " method="GET">
             <div>
                 <label for="rollno">RollNO:</label>
                 <input type="text" value="<?php echo  $_GET['rn']; ?>" name="rollno" id="" class="form-input">

             </div>
             <div>
                 <label for="rollno">Name:</label>
                 <input type="text"value="<?php  echo $_GET['sn']; ?>"  name="name" id="" class="form-input">
             </div>
             <div>
                 <label for="rollno">Class:</label>
                 <input type="text" value="<?php echo  $_GET['cl']; ?>" name="class" id="" class="form-input">
             </div>
             <input class="btn" type="submit"  name="submit" value="update">
         </form>
     
     <?php
        if($_GET['submit']){
            $rollno=$_GET['rollno'];
            $name=$_GET['name'];
            $class=$_GET['class'];
        $query="UPDATE STUDENT SET NAME=' $name ',CLASS=' $class' WHERE ROLLNO='$rollno'";
       $data=mysqli_query($conn,$query);

           if($data){
               echo "<h1>Updated sucessfully</h1>";
           }
           else{
               echo "<h1>Not run sucessfully</h1>";
           }
        }
        else{
        echo "<h1>click update button to update</h1>";
        }
        
     ?>
     </div>
</body>
</html>