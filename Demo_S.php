<?php

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
    <link rel="stylesheet" href="Demo.css">
    <title>Book Your Service</title>
</head>

<body>
    <!----------------------------------------------------- Body ---------------------------------------------------------------------->
    <div class="Main_body">
        <!-------------------------------------- Navigation Bar --------------------------------------------------------------------------->
        <div class="nav">
            <a href="#Maid" title="Click to view more services"><img src="img/MaidLogo.png" class="logo" alt=""> Maid</a>
            <a href="#Security" title="Click to view more services"><img src="img/SecurityLogo.png" alt="" class="logo"> Security</a>
            <a href="#Cleaner" title="Click to view more services"><img src="img/CleanerLogo.png" alt="" class="logo"> Cleaner</a>
        </div>
        
        

        
        <!--------------------------------------------------------- Logo -------------------------------------------------------------------->
        <div class="select_services">
            <img src="img/ServicePageLineTop.png" alt="" class="designTop"><br> <h1>Services</h1>
            <br><img src="img/ServicePageLineBottom.png" alt="" class="designBottom">
        </div>








        <!--------------------------------------------------------- Maid Body ---------------------------------------------------------------->

        <div class="maid" id="Maid">
            <h2>Maid</h2>
            <img src="img/HeadLine.png" alt="" class="head_line">
            <!----------------------------------------------------- Maid Content ------------------------------------------------------------>        
            <div class="maid_content">
                
                <img src="img\Demo_img.jpg" class="maid_img">
                                                        
                <div class="maid_select">
                  <!------------------------------------------------ Maid Table --------------------------------------------------->
                    <form>
                        <table> 
                            <tr>
                                <td>Select Service</td>
                                <td><input type="checkbox" name="service">Cleaning
                                <input type="checkbox" name="service" class="tbl_checkbox">Cooking</td>
                            </tr>

                            <tr>
                                <td>Total Number Of Floors</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>


                            <tr>
                                <td>Number Of Rooms</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>

                            <tr>
                                <td>Number Of Bedroom</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>

                            <tr>
                                <td>Number Of Kitchen</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>

                            <tr>
                                <td>Number Of Hall</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>

                            <tr>
                                <td>Number Of Extra Rooms</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>

                            <tr>
                                <td colspan="2"><h5 class="tbl_h5">Want Washroom Cleaner?</h5></td>
                            </tr>

                            <tr>
                                <td colspan="2"><h6 class="tbl_h6">If Yes, Please Fill Data Below:</h6></td>
                            </tr>

                            <tr>
                                <td>Number Of Washroom/s</td>
                                <td><input type="number" class="tbl_input"></td>
                            </tr>

                            <tr>
                                <td colspan="2"><input type="radio" value="Time" class="input_radio" name="time"> Part Time
                                <input type="radio" value="Time" class="input_radio" name="time">Full Time
                                <button class="input_button">View Charges</button></td>
                            
                            </tr>

                            <tr>
                                <td colspan="2"><center><input type="Submit" value="Confirm" class="tbl_confirm"></center></td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>

        </div>
        <!--------------------------------------------------------- End Of Maid Table ----------------------------------------------->









        <!------------------------------------------------------------ Security ---------------------------------------------------------->
        <div class="security">
            <h2>Security</h2>
            <img src="img/HeadLine.png" alt="" class="head_line">

            <div class="security_content">
                
            </div>
        </div>
    </div>
</body>
</html>