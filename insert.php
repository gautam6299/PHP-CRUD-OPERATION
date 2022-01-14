<?php
  include("connection.php");
  error_reporting(0);
  ?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <title>Insert data into database</title>
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
                  <!-- <li><a href="delete.php">Delete</a></li> -->
              </ul>
          </nav>
      </div>

     <div class="FORM">
         <form action=" " method="GET" class="form">
             <div>
                 <label for="rollno">RollNO:</label>
                 <input type="text" class="form-input" name="rollno" id="">

             </div>
             <div>
                 <label for="rollno">Name:</label>
                 <input type="text"class="form-input" name="name" id="">
             </div>
             <div>
                 <label for="rollno">Class:</label>
                 <input type="text" class="form-input" name="class" id="">
             </div>
             <input class="btn" type="submit"  name="submit" value="submit">
         </form>
     

     <?php
//1.connection to the database
     if($_GET['submit']){
        $Rn= $_GET['rollno'];
        $sn= $_GET['name'];
        $cl = $_GET['class'];
        if($Rn!='' && $sn!='' && $cl!=''){
            $query="INSERT INTO STUDENT VALUES ('$Rn','$sn','$cl')";
            $data=mysqli_query($conn,$query);
            
            if($data){
                 echo " <h1>Data inserted into databases</h1>";
            }
        }
     else{
         echo "<h1>All the fild equired to fillup</h1>";
     }
     }
     ?>
     </div>
</body>
</html>