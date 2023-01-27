<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    
    <div class="p">
    <img src="img/MyHomecareLogo.png" alt="HomeCare.in" class="l">
    </div>

    <form method="post" action="#">
        <h1 style="text-align: center;">Login</h1>
        
        <section>
            <div class="padd">
            <input type="email" name="mail" autocomplete="off" required="" placeholder="E-mail" class="w">
            </div>
        </section>

        <section>
            <div class="padd">
            <input type="password" name="pswd" autocomplete="off" required="" placeholder="Password" class="w">
            </div>
        </section>
        <section>
           <input type="submit" value="Continue" name="Continue" style="width: 100%;" class="c"> 
        </section>
    </form>

    <section>
        <img src="img/loginlinee.png" alt="line" class="ll">
    </section>

    <section>
        <a href="Registration.php"> <button type="submit" class="link">Create Your Account</button></a>
    </section>
</body>
</html>



<?php
    include("connection.php");

    if (isset($_POST['Continue'])) {

    	$mail=$_POST['mail'];
    	$pswd=$_POST['pswd'];
        
    	
    	$query = "SELECT * FROM login WHERE mail = '$mail' && password = '$pswd'";
    	$data=mysqli_query($conn,$query);

    	$total=mysqli_num_rows($data);
    	//echo $total;

    	if ($total == 1) 
    	{
    		//echo "Login Ok";
    		header('location:HomePageAfterLogin.php');
    	}

    	else
    	{
    		echo '<script>alert("Login Failed")</script>';
    	}
    
        


    }



   
  

?>