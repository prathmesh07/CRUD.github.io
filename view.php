<?php

$con=mysqli_connect('localhost:3307','root','root','curd') or die("Connnection Failed");

$q="SELECT * from student";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View</title>

        <style type="text/css">
     .box1{
         width:800px;
        margin-left: 18%;
    margin-top: 100px;
    background-color:#EA7773;
    color:white;
    font-size:24px;
    border-color:black;
         border-style:solid;
     }
     body{
         background-color:#E74292;
     }
     .box1 h1{
        text-align: center;
        color:#2B2B52;
      
     }
    

     </style>
    </head>
    <body>
    <div class="box1">
        <h1>Total Registered Student</h1>
        <table>
        <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>Roll.no</th>
        <th>Class</th>
        <th>City</th>
        </tr>
 <?php
 for($i=1;$i<=$num;$i++)
 {
     $row=mysqli_fetch_array($result);
     ?>
     <tr>
     <td><?php echo $row['sid']; ?></td>
     <td><?php echo $row['name']; ?></td>
     <td><?php echo $row['roll']; ?></td>
     <td><?php echo $row['class']; ?></td>
     <td><?php echo $row['city']; ?></td>
     </tr>
     <?php
 }       
    ?>
    </table>
    </div>
    </body>
</html>