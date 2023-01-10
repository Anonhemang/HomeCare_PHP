<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="HomePage.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<!---------------------------------------------- Navigation Bar ------------------------------------------------------------------>
    <div class="bg">
                <div class="topnav" id="home">
                    <a href="#home">Home</a>
                    <a href="#WWO">What We Offer</a>
                    <a href="#HIW">How It Works</a>
                    <a href="#difference">Why Us</a>
                    <a href="#trust">Trust Factor</a>
                    <a href="#contact">Contact Us</a>
                    <a href="Login.php" id="right">Login</a>
                </div>

<!------------------------------------------------------ Image Change ----------------------------------------------------------------->
                 <img src="img/Home1.jpg" id="image" >

                <script type="text/javascript" id="home">

                    let image = document.getElementById('image');
                    let images = ['img/Home2.jpg', 'img/Home3.jpg', 'img/Home4.jpg']
                    setInterval(function(){
                        let random = Math.floor(Math.random() * 3);
                        image.src = images[random];
                    }, 3000);
                </script>

    </div>




<!----------------------------------------------------------------- What we Offer ------------------------------------------------------------>
    <div class="offer">
                <div class="global">
                         <h3 id="WWO" class="heading_font">What We Offer?</h3>
                            <div class="hiw">
                                    <i>
                                        <img src="img/maid.png" title="Book Me!" style="width: auto; height: 300px;">
                                    </i>
                                    <h3>Maid</h3>
                                    <a href="BookPage.php"><button class="wwo">Book Now</button></a>
                            </div>

                            <div class="hiw">
                                    <i>
                                        <img src="img/security.png" title="Book Me!" style="width: auto; height: 400px;">
                                    </i>
                                    <h3>Security</h3>
                                    <a href="BookPage.php"><button class="wwo">Book Now</button></a>
                            </div>


                            <div class="hiw">
                                    <i>
                                        <img src="img/cleaner.png" title="Book Me!" style="width: auto; height: 270px;">
                                    </i>
                                    <h3>One Time Cleaner</h3>
                                    <a href="BookPage.php"><button class="wwo">Book Now</button></a>
                            </div>

                </div>
    </div>


<!------------------------------------------------------------------ How it Works -------------------------------------------------------------->


   <div class="hiw0">
        <div class="global">
             <h3 id="HIW" class="heading_font">How It Works?</h3>
                <div class="hiw" style="padding-left: 100px;">
                        <i>
                            <img src="img/search.png" title="(1) Search" style="width:100px;height: 80px; display:inline-block;">
                        </i>
                        <big>Search</big>
                        <p>
                            Use our simple search and tell us what you require
                        </p>
                </div>
            

                <div class="hiw" style="padding-left: 275px;">
                        <i>
                            <img src="img/shortlist.png" title="(2) Shortlist" style="width: 80px;height: 80px; display:inline-block;">
                        </i>
                        <big>Shortlist</big>
                        <p>
                            View the complete profile of the hundreds of available and shortlist as per your preference 
                        </p>
                </div><br>

                
                <div class="hiw" style="padding-left: 500px;">
                        <i>
                            <img src="img/meet.jpg" title="(3) Meet" style="width: 80px;height: 80px; display:inline-block;">
                        </i>
                        <big>Meet & Final</big>
                        <p>
                            Talk to them on the phone or meet personally. Select and pay only after the joining 
                        </p>
                </div>
        </div>
    </div> 
    

<!---------------------------------------------------------------- Difference ----------------------------------------------------------->


    <div style="background-color: #246588; height: 830px;">
        <h3 class="diff" id="difference"><div class="heading_font">Difference Between Other Agency And HomeCare</div></h3>
            <table>
                    <tr>
                        <th>Other's</th>
                        <th>HomeCare</th>
                    </tr>

                    <tr>
                        <td>Most of them are not registered companies with no way to track them</td>
                        <td>A professional corporate company with reliability</td>
                    </tr>
                    <tr>
                        <td>Will charge an advance payment - Will not answer phone calls</td>
                        <td>No advance payment. Pay only after joining </td>
                    </tr>
                    <tr>
                        <td>Have a small database of 20-30 workers. </td>
                        <td>Have a database of over 50000 workers and growing </td>
                    </tr>
                    <tr>
                        <td>Charge renewal fees after 1 year </td>
                        <td>No renewal fees </td>
                    </tr>
                    <tr>
                        <td>Place the same maid somewhere else after you pay them </td>
                        <td>We are ethical. Client satisfaction is most important </td>
                    </tr>
            </table>
    </div>



<!--------------------------------------------------- Trust ---------------------------------------------------------------------------->
    
    <div id="trustbg">
        <h3 id="trust" class="heading_font">We Are Big On Trust & Safety</h3>
        
            <div class="line">
                <big><img src="img/id.png" alt="id" style="width: auto; height: 200px;" title="(1) Check"></big>
                <h3>Identity Check</h3>
            </div>

            <div class="line" style="padding-left: 300px;">
                <big><img src="img/verify.png" style="width: auto; height: 200px;" title="(2) Verify"></big>
                <h3>Document Verification</h3>
            </div><br>

            <div class="line" style="padding-left: 400px;">
                <big><img src="img/talk.png" style="width: auto; height: 200px;" title="(3) Interview"></big>
                <h3>In-Person Interview</h3>
            </div>

            <div class="line"style="padding-left: 300px;">
                <big><img src="img/training.png" style="width: auto; height: 200px;" title="(4) Training"></big>
                <h3>Training Sessions</h3>
            </div>
        

    </div>
    


<!------------------------------------------------------------ Contact ------------------------------------------------------------------------>


    <div class="contact" id="contact">
        <center>
           <a href="contact.php"> <button class="c">Contact Us</button></a>
        </center>  
    </div>
    
</body>
</html>