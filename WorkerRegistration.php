<?php
include('connection.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Workers Registration</title>
        <link rel="stylesheet" href="workerRegistration.css">
    </head>
    <body>
      
                <form action="#">
                    <h1>Add Worker</h1>
                    <table>

                        <tr>
                            <td colspan="2"> <input type="text" name="Name" id="" placeholder="Enter Name" required=""></td>
                        </tr>

                        <tr>
                            <td colspan="2"> <input type="text" name="Age" id="" placeholder="Age" required=""></td>
                        </tr>

                        <tr>
                            <td colspan="2"> <input type="text" name="Mobile" id="" placeholder="Mobile" required="" minlength="10" maxlength="10"></td>
                        </tr>

                        <tr>
                            <td colspan="2"> <input type="text" name="IDName" id="" placeholder="ID Name" required=""></td>
                        </tr>

                        <tr>
                            <td colspan="2"> <input type="text" name="IDNum" id="" placeholder="ID Number" required=""></td>
                        </tr>

                        <tr>
                            <td colspan="2"> <textarea type="text" name="Address" id="" placeholder="Address" required=""></textarea></td>
                        </tr>

                        <tr>
                            <td colspan="2"> <input type="text" name="Job" id="" placeholder="Job" required=""></td>
                        </tr>

                        <tr>
                            <td> <input type="submit" value="Add A Worker" class="submit"></td>
                            <td> <input type="reset" value="Reset Form" class="submit"> </td>
                        </tr>

                        
                    </table>
                </form>
                <a href="AdminPage.php"><button>Go Back To Admin Page</button></a>
    </body>
</html>



<?php
$Name = $_GET['Name'];
$Age = $_GET['Age'];
$Mobile = $_GET['Mobile'];
$IDName = $_GET['IDName'];
$IDNum = $_GET['IDNum'];
$Address = $_GET['Address'];
$Job = $_GET['Job'];

$query = "INSERT INTO workers values('$Name','$Age','$Mobile','$IDName','$IDNum','$Address','$Job')";
$data = mysqli_query($conn,$query);
?>