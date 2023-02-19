<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
    <link rel="stylesheet" href="bookpage.css">
    <title>Book Your Service</title>
</head>

<body>
    <!----------------------------------------------------- Body ---------------------------------------------------------------------->
    <div class="Main_body">
        <!-------------------------------------- Navigation Bar --------------------------------------------------------------------------->
        <div class="nav">
            <a href="SecurityDB.php" title="Click to view more services" class="top"><img src="img/SecurityLogo.png" alt="" class="logo"> Security</a>
            <a href="CleanerDB.php" title="Click to view more services" class="top"><img src="img/CleanerLogo.png" alt="" class="logo"> Cleaner</a>
            <a href="#Charges" title="Click Here To View Charges"  class="top"><img src="img/charges.png" alt="" class="logo"> Charges</a>
        </div>
        
        

        
        <!--------------------------------------------------------- Logo -------------------------------------------------------------------->
        <div class="select_services">
            <img src="img/ServicePageLineTop.png" alt="" class="designTop"><br> <h1>Services</h1>
            <br><img src="img/ServicePageLineBottom.png" alt="" class="designBottom">
        </div>






        <div class="Content">

                <!--------------------------------------------------------- Maid Body ---------------------------------------------------------------->
                
                <div class="maid" id="Maid">
                    <h2>Maid</h2>
                    <img src="img/HeadLine.png" alt="" class="head_line">
                    
                    <!----------------------------------------------------- Maid Content ------------------------------------------------------------>        
                    <div class="maid_content">


                                                <!------------------------- Image ---------------------------->

                            
                        <img src="img\bookpagemaid.jpg" class="maid_img">
                                                                
                        <div class="maid_select">
                        <!------------------------------------------------ Maid Table --------------------------------------------------->
                            <form>
                                <table> 
                                    <tr>
                                        <td>Enter Your Mail</td>
                                        <td> <input type="email" required="" class="tbl_input" name="Mail"> </td>
                                    </tr>
                                    <tr>
                                        <td class="maid_td">Select Service</td>
                                        <td class="maid_td"><input type="checkbox" name="service[]" value="Cleaning">Cleaning
                                        <input type="checkbox" name="service[]" class="tbl_checkbox" value="Cooking">Cooking</td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Total Number Of Floors</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="floor"></td>
                                    </tr>


                                    <tr>
                                        <td class="maid_td">Number Of Rooms</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="room"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Bedroom</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="bed"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Kitchen</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="kitchen"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Hall</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="hall"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Extra Rooms</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="extra"></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td colspan="2" class="maid_td">
                                            <input type="radio" name="Shift" id="time" value="Full Time">Full Time
                                            <input type="radio" name="Shift" id="time"  class="tbl_checkbox" value="Part Time">Part Time
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="maid_td"><h5 class="tbl_h5">Want Washroom Cleaner?</h5></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="maid_td"><h6 class="tbl_h6">If Yes, Please Fill Data Below:</h6></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Washroom/s</td>
                                        <td class="maid_td"><input type="number" class="tbl_input" name="washroom"></td>
                                    </tr>

                                    
                                    
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="maid_td"><center><input type="Submit" value="Confirm" class="tbl_confirm"></center></td>
                                    </tr>

                                </table>
                            </form>
                        </div>
                    </div>

                </div>
                <!--------------------------------------------------------- End Of Maid Table ----------------------------------------------->




    </div>
    <div class="service" id="Charges">
            <center>
            <a href="charges.php" class="charges"><button class="service">Service Charges</button></a>
            </center>
        </div>
</body>
</html>




<?php

include('connection.php');
$Mail= $_GET['Mail'];
$service = $_GET['service'];
$dbservice = implode(",",$service);
$floor = $_GET['floor'];
$room = $_GET['room'];
$bed = $_GET['bed'];
$kitchen = $_GET['kitchen'];
$hall = $_GET['hall'];
$extra = $_GET['extra'];
$Shift = $_GET['Shift'];
$washroom = $_GET['washroom'];


$query = "insert into maid values ('$Mail','$dbservice','$floor','$room','$bed','$kitchen','$hall','$extra','$Shift','$washroom')";
$data = mysqli_query($conn,$query);

?>