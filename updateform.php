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
        <title>Updateform</title>

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
        <h1>Update Registered Student</h1>
        <form action="updation.php" method="post">
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
     <td><?php echo $row['sid']; ?>
            <input type="hidden" name="sid<?php echo $i;?>" value="<?php echo $row['sid']; ?>"/></td>
     <td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['name']; ?>"/></td>
     <td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['roll']; ?>"/></td>
     <td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['class']; ?>"/></td>
     <td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['city']; ?>"/></td>
     </tr>
     <?php
 }       
    ?>
    </table>
    <input type="submit" value="Update" />
    </form>
    </div>
    </body>
</html>