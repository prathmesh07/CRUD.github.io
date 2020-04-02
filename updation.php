<?php
$size=sizeof($_POST);
$records=$size/4;

for($i=1;$i<=$records;$i++)          
{
     $index1="sid".$i;
    $sid[$i]=$_POST[$index1];
    $index2="name".$i;
    $name[$i]=$_POST[$index2];
    $index3="roll".$i;
    $roll[$i]=$_POST[$index3];
    $index4="class".$i;
    $class[$i]=$_POST[$index4];
    $index5="city".$i;
    $city[$i]=$_POST[$index5];
}


$con=mysqli_connect('localhost:3307','root','root','curd') or die("Connnection Failed");
for($i=1;$i<=$records;$i++)
{
    $q="update student SET name='$name[$i]',roll='$roll[$i]',name='$class[$i]'city='$city[$i]' where sid=$[$i]";
    $result=mysqli_query($con,$q);
}

mysqli_close($con);
?>
<html>
<head>
<title>updation</title>
</head>
<body>
<h1>Data successfully Updated</h1>
</body>
</html>