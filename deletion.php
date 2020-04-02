
<?php
$size=sizeof($_POST); //here size of only have that number of index which are check in checkbox
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
    $index="b".$j;
    if(isset($_POST[$index]))
    $b_id[$i]=$_POST[$index];
   else
   $i--; 
}
$con=mysqli_connect('localhost:3307','root','root','curd') or die("Connnection Failed");


for($k=1;$k<=$size;$k++)
{
    $q="delete from student where sid=".$b_id[$k];
    mysqli_query($con,$q);
}
mysqli_close($con);
?>
<html>
<head>
<title>deletion</title>
</head>
<body>
<h1>Data successfully remove from Database</h1>
</body>
</html>