<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        .text{
            font-size: 15px;
        }
    </style>
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
</body>
</html>


<?php
    include("connection.php");
    error_reporting(0);
    $query="SELECT * FROM STUDENT";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);

    if($total!=0){
       ?>
       <div class="tables">
         <table border="1" cellspacing="0" width="600px">
         <tr>
         <th>RollNO</th>
         <th>Name</th>
         <th>Class</th>
         <th colspan="2">Operation</th>
         </tr>
         
       <?php

      while($result=mysqli_fetch_assoc($data)){
          echo "<tr>
          <td>".$result['rollno']."</td>
          <td>".$result['name']."</td>
          <td>".$result['class']."</td>
          <td> <a href='update.php?rn=$result[rollno]&& sn=$result[name]&& cl= $result[class]' </a> Edit </td>
          <td> <a href='delete.php? rn=$result[rollno]' onclick='return show()'> detate</a> </td>
           </tr>";
      }
    }
    else{
        echo "<h1>Not found</h1>";
    }
?>
 </table>
 </div>
 <script>
    
   function show(){
     var a;
     a=confirm('Are you sure want to delete this data??');
       return a;

   }
 </script>