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
    <title>Security BookPage</title>
</head>
<body>

<div class="nav">
            <a href="BookPage.php" title="Click to view more services" class="top"><img src="img/MaidLogo.png" class="logo" alt=""> Maid</a>
            <a href="CleanerDB.php" title="Click to view more services" class="top"><img src="img/CleanerLogo.png" alt="" class="logo"> Cleaner</a>
            <a href="#Charges" title="Click Here To View Charges"  class="top"><img src="img/charges.png" alt="" class="logo"> Charges</a>
        </div>



<div class="select_services">
            <img src="img/ServicePageLineTop.png" alt="" class="designTop"><br> <h1>Services</h1>
            <br><img src="img/ServicePageLineBottom.png" alt="" class="designBottom">
</div>




    <div style="background-color: aqua;" class="content">
 <!------------------------------------------------------------ Security ---------------------------------------------------------->
        <div class="security" id="Security">
                    <h2>Security</h2>
                    <img src="img/HeadLine.png" alt="" class="headline">


                    <!--------------------------------------------------------- Security Content -------------------------------------------->

                    <div class="security_content">


                                                <!------------------------- Image ---------------------------->


                                                    <img src="img\bookpagesecurity.jpeg" class="security_img">   
                        <form>

                            <table>


                                    <tr>
                                        <td>Enter Your Mail</td>
                                        <td> <input type="email" required="" class="tbl_input" name="email"> </td>
                                    </tr>
                            
                            
                                <tr>

                                    <td class="security_td">
                                        Select Your House Type
                                    </td>


                                    <td>
                                        <select name="type" id="">
                                            <option value=""></option>
                                            <option value="Flat">Flat</option>
                                            <option value="Society">Society</option>
                                            <option value="Bungalow">Bungalow</option>
                                            <option value="Tenament">Tenament</option>
                                        </select>
                                    </td>

                                </tr>


                                <!------------------------------------------------- Contract Period -------------------------------------------------->
                                <tr>

                                    <td class="security_td">
                                        Contract Period
                                    </td>

                                    <td>
                                        <select name="period" id="">
                                            <option value=""></option>
                                            <option value="1 month">1 Month</option>
                                            <option value="3 months">3 Months</option>
                                            <option value="6 months">6 Months</option>
                                            <option value="1 year">1 Year</option>
                                            <option value="self">Until You Cancle</option>
                                        </select>
                                    </td>

                                </tr>

                                <!------------------------------------------------- Shift -------------------------------------------------->
                                <tr>

                                    <td class="security_td">
                                        Shift
                                    </td>

                                    <td>
                                        <Select name="Shift">
                                            <option value=""></option>
                                            <option value="Day">Day Shift</option>
                                            <option value="Night">Night Shift</option>
                                            <option value="Full">Full Time</option>
                                        </Select>
                                        
                                    </td>
                                
                                </tr>

                                <!------------------------------------------------- Select Date -------------------------------------------------->
                                                    
                                
                                
                                
                                                        <!------------- Start Date ----------->
                                <tr>

                                    <td class="security_td">Select Starting Date</td>
                                    <td>
                                        <input type="date" class="date" name="startdate">
                                    </td>

                                </tr>
                                                        <!------------- End Date ----------->

                                <tr>

                                    <td class="security_td">Select Last Date</td>
                                    <td>
                                    <input type="date" class="date" name="enddate">
                                    </td>

                                </tr>
                                
                                <!------------------------------------------------- View Rates -------------------------------------------------->
                                


                                <tr>
                                    
                                    <td colspan="2">
                                        <input type="Submit" value="Confirm" class="submit">
                                    </td>

                                </tr>

                            </table>
                            
                        </form>
                            
                        
                    </div>
        </div>
    </div>
                <!--------------------------------------------------------- End Of Security ---------------------------------------------------->

                <div class="service" id="Charges">
            <center>
            <a href="charges.php" class="charges"><button class="service">Service Charges</button></a>
            </center>
        </div>
</body>
</html>

<?php
$email = $_GET['email'];
$type = $_GET['type'];
$period = $_GET['period'];
$shift = $_GET['Shift'];
$startdate =$_GET['startdate'];
$enddate =$_GET['enddate'];

$q = "insert into security values ('$email','$type','$period','$shift','$startdate','$enddate')";
$data = mysqli_query($conn,$q);
?>