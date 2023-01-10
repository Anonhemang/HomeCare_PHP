<?php

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
    <link rel="stylesheet" href="BookPage.css">
    <title>Book Your Service</title>
</head>

<body>
    <!----------------------------------------------------- Body ---------------------------------------------------------------------->
    <div class="Main_body">
        <!-------------------------------------- Navigation Bar --------------------------------------------------------------------------->
        <div class="nav">
            <a href="#Maid" title="Click to view more services" class="top"><img src="img/MaidLogo.png" class="logo" alt=""> Maid</a>
            <a href="#Security" title="Click to view more services" class="top"><img src="img/SecurityLogo.png" alt="" class="logo"> Security</a>
            <a href="#Cleaner" title="Click to view more services" class="top"><img src="img/CleanerLogo.png" alt="" class="logo"> Cleaner</a>
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

                            
                        <img src="img\Demo_img.jpg" class="maid_img">
                                                                
                        <div class="maid_select">
                        <!------------------------------------------------ Maid Table --------------------------------------------------->
                            <form>
                                <table> 
                                    <tr>
                                        <td class="maid_td">Select Service</td>
                                        <td class="maid_td"><input type="checkbox" name="service">Cleaning
                                        <input type="checkbox" name="service" class="tbl_checkbox">Cooking</td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Total Number Of Floors</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
                                    </tr>


                                    <tr>
                                        <td class="maid_td">Number Of Rooms</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Bedroom</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Kitchen</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Hall</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Extra Rooms</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="maid_td"><h5 class="tbl_h5">Want Washroom Cleaner?</h5></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="maid_td"><h6 class="tbl_h6">If Yes, Please Fill Data Below:</h6></td>
                                    </tr>

                                    <tr>
                                        <td class="maid_td">Number Of Washroom/s</td>
                                        <td class="maid_td"><input type="number" class="tbl_input"></td>
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









                <!------------------------------------------------------------ Security ---------------------------------------------------------->
                <div class="security" id="Security">
                    <h2>Security</h2>
                    <img src="img/HeadLine.png" alt="" class="headline">


                    <!--------------------------------------------------------- Security Content -------------------------------------------->

                    <div class="security_content">


                                                <!------------------------- Image ---------------------------->


                                                    <img src="img\Demo_img.jpg" class="security_img">   
                        <form>

                            <table>
                            
                            
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
                                            <option value="month">1 Month</option>
                                            <option value="3_months">3 Months</option>
                                            <option value="6_months">6 Months</option>
                                            <option value="1_year">1 Year</option>
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
                                        <Select>
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
                                        <input type="date" class="date">
                                    </td>

                                </tr>
                                                        <!------------- End Date ----------->

                                <tr>

                                    <td class="security_td">Select Last Date</td>
                                    <td>
                                    <input type="date" class="date">
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

                <!--------------------------------------------------------- End Of Security ---------------------------------------------------->








                <!------------------------------------------------------------- Cleaner -------------------------------------------------------->

            
                <div class="cleaner" id="Cleaner">
                    <h2>Cleaner</h2>
                    <img src="img/HeadLine.png" alt="" class="head_line">
                    <!----------------------------------------------------- Cleaner Content ------------------------------------------------------------>        
                    <div class="cleaner_content">


                                                <!------------------------- Image ---------------------------->


                        <img src="img\Demo_img.jpg" class="cleaner_img">
                                                                
                        <div class="cleaner_select">
                        <!------------------------------------------------ Cleaner Table --------------------------------------------------->
                            <form>
                                <table> 
                                
                                    <tr>
                                        <td class="cleaner_td">Total Number Of Floors</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input"></td>
                                    </tr>


                                    <tr>
                                        <td class="cleaner_td">Number Of Rooms</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Bedroom</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Kitchen</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Hall</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Extra Rooms</td>
                                        <td class="cleaner_td"><input type="number" class="cleaner_tbl_input"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="cleaner_td"><h5 class="cleaner_tbl_h5">Want Washroom Cleaner?</h5></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="cleaner_td"><h6 class="cleaner_tbl_h6">If Yes, Please Fill Data Below:</h6></td>
                                    </tr>

                                    <tr>
                                        <td class="cleaner_td">Number Of Washroom/s</td>
                                        <td class="cleaner_td"><input type="number" class="tbl_input"></td>
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
            <a href="#" class="charges"><button class="service">Service Charges</button></a>
        </div>
    </div>
</body>
</html>