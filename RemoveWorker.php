<?php
include('connection.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Remove Worker</title>
        <link rel="stylesheet" href="RemoveWorker.css">
    </head>
    <body>
        <form action="#">
            <h1>Delete Worker</h1>
            <table>

                <tr>
                    <td colspan="2"> <input type="text" name="Name" id="" placeholder="Enter Name" required=""></td>
                </tr>

                <tr>
                    <td colspan="2"> <input type="text" name="Mobile" id="" placeholder="Mobile" required=""></td>
                </tr>

                <tr>
                    <td> <input type="submit" value="Remove A Worker" class="submit"></td>
                    <td> <input type="reset" value="Reset Form" class="submit"> </td>
                </tr>
                
                
            </table>
            
        </form>
        <a href="AdminPage.php"><button>Go Back To Admin Page</button></a>
        
    </body>
</html>




<?php


$Mobile = $_GET['Mobile'];

$query = "DELETE FROM workers where Mobile=$Mobile";
$data = mysqli_query($conn,$query);

?>