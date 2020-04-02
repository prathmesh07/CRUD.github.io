

<?php
//use view.php and put coloum of checkbox


$con=mysqli_connect('localhost:3307','root','root','curd') or die("Connnection Failed");

$q="SELECT * from student";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Deleteform</title>

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
        <h1>Remove Student Data</h1>
        <form action="deletion.php" method="post">
        <table>
        <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>Roll.no</th>
        <th>Class</th>
        <th>City</th>
        <th>Select to Delete</th>
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
     <td><input type="checkbox" value="<?php echo $row['sid'] ?>" name="b<?php echo $i;  //we catenating an element so that it get different name in loop ?>" /></td>   
     </tr>
    
     <?php
 }       
    ?>
     <tr><td><input type="submit" value="Delete"/></td></tr>
    </table>
    </form>
    </div>
    </body>
   
</html>