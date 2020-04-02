<!DOCTYPE html>
<html>
    <head>
        <title>Insertform</title>

    <style type="text/css">
     .box1{
         width:800px;
        margin-left: 18%;
    margin-top: 100px;
    background-color:#EA7773;
    color:white;
    font-size:24px;
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
        <h1>Insert the Student Detail</h1>
    </br>
    <form action="insertion.php" method="post">

        <table>
            <tr>
                <th>Student ID </th>
                <td><input type="text" name="sid" required/></td>
            </tr>
            <tr>
                <th>Student Name</th>
                <td><input type="text" name="name" required/></td>
            </tr>
            <tr>
                <th>Roll No.</th>
                <td><input type="number" name="roll" required/></td>
            </tr>
            <tr>
                <th>Class</th>
                <td><input type="number" name="class" required/></td>
            </tr>
            <tr>
                <th>City</th>
                <td><input type="text" name="city" required/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="send" value="Insert"/></td>
                <td><input type="reset" value="Reset"/></td>
            </tr>
        </table>




    </form>
    </div>
    </body>
</html>