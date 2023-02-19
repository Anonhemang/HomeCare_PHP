<?php
include('connection.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookpage.css">
    <title>cleaner BookPage</title>
</head>
<body>

<div class="nav">
            <a href="BookPage.php" title="Click to view more services" class="top"><img src="img/MaidLogo.png" class="logo" alt=""> Maid</a>
            <a href="SecurityDB.php" title="Click to view more services" class="top"><img src="img/SecurityLogo.png" alt="" class="logo"> Security</a>
            <a href="#Charges" title="Click Here To View Charges"  class="top"><img src="img/charges.png" alt="" class="logo"> Charges</a>
        </div>



<div class="select_services">
            <img src="img/ServicePageLineTop.png" alt="" class="designTop"><br> <h1>Services</h1>
            <br><img src="img/ServicePageLineBottom.png" alt="" class="designBottom">
</div>
    
    <div class="Main_body">
        <div class="Content">
                <!------------------------------------------------------------- Cleaner -------------------------------------------------------->

            
                <div class="cleaner" id="Cleaner">
                    <h2>Cleaner</h2>
                    <img src="img/HeadLine.png" alt="" class="head_line">
                    <!----------------------------------------------------- Cleaner Content ------------------------------------------------------------>        
                    <div class="cleaner_content">


                                                <!------------------------- Image ---------------------------->


                        <img src="img\bookpagecleaner.jpeg" class="cleaner_img">
                                                                
                        <div class="cleaner_select">
                        <!------------------------------------------------ Cleaner Table --------------------------------------------------->
                            <form>
                                <table> 
                                
                                    <tr>
                                        <td>Enter Your Mail</td>
                                        <td> <input type="email" required="" class="tbl_input" name="M"> </td>
                                    </tr>


                                    <tr>
                                        <td class="cleaner_td">Total Number Of Floors</td>
                                        <td class="cleaner_td"><input type="number" name="f" class="cleaner_tbl_input"></td>
                                    </tr>


                                    <tr>
                                        <td class="cleaner_td">Number Of Rooms</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input" name="r"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Bedroom</td>
                                        <td class="cleaner_td"><input type="number" name="b" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Kitchen</td>
                                        <td class="cleaner_td"><input type="number" name="k" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Hall</td>
                                        <td class="cleaner_td"><input type="number" name="h" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Extra Rooms</td>
                                        <td class="cleaner_td"><input type="number" name="e" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="cleaner_td"><h5 class="cleaner_tbl_h5">Want Washroom Cleaner?</h5></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="cleaner_td"><h6 class="cleaner_tbl_h6">If Yes, Please Fill Data Below:</h6></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Washroom/s</td>
                                        <td class="cleaner_td"><input type="number" name="w" class="tbl_input"></td>
                                    </tr>

                                

                                    <tr>
                                        <td colspan="2" class="cleaner_td"><center><input type="Submit" value="Confirm" class="cleaner_tbl_confirm"></center></td>
                                    </tr>

                                </table>
                            </form>
                        </div>
                    </div>

                </div>


                <!-------------------------------------------------- End Of Cleaner ---------------------------------------------------------->
            </div>
        <div class="service" id="Charges">
            <center>
            <a href="charges.php" class="charges"><button class="service">Service Charges</button></a>
            </center>
        </div>
    </div>
    </div>
</body>
</html>

<?php
$Mail= $_GET['M'];
$floor = $_GET['f'];
$room = $_GET['r'];
$bed = $_GET['b'];
$kitchen = $_GET['k'];
$hall = $_GET['h'];
$extra = $_GET['e'];
$washroom = $_GET['w'];


$qu = "insert into cleaner values ('$Mail','$floor','$room','$bed','$kitchen','$hall','$extra','$washroom')";
$data = mysqli_query($conn,$qu);
?>