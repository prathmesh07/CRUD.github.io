
<?php


$a = (isset($_POST['send']) ? $_POST['sid'] :'');
$b = (isset($_POST['send']) ? $_POST['name'] :'');
$c = (isset($_POST['send']) ? $_POST['roll'] :'');
$d = (isset($_POST['send']) ? $_POST['class'] :'');
$e = (isset($_POST['send']) ? $_POST['city'] :'');

//isset give value either true or false
//facing error if i write seperate variable without isset function
//isset show we getting data from name in previous page

$con=mysqli_connect('localhost:3307','root','root','curd') or die("Connnection Failed");

$q="INSERT INTO student (sid,name,roll,class,city) values('$a','$b',$c,$d,'$e')";
$status=mysqli_query($con,$q);

mysqli_close($con);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Insertion</title>
    </head>
    <body>
        <h1>Insert the Student Detail</h1>
    </br>
    <p><?php 
            if($status==1) 
                echo "Record inserted";
            else
                 echo "Insertion Failed"; 
                 ?></p>
    </body>
    </html>   

         