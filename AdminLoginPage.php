<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="login-style.css">
	<title>Login Page</title>

    <style>
        body{
	margin: 0;
	padding: 0;
	
}

.center{
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	background-color: white;
	border-radius: 5px;
}



.center h1{
	text-align: center;
	padding-bottom: 20px;
	border-bottom: 1px solid silver; 
}



.form{
	padding-bottom: 15px;
	margin:0 20px;
	text-align: center; 
}



.textfile{
	width: 100%;
	height: 50px;
	font-size: 18px;
	border-color: 2px solid #D071f9;
	border-radius: 5px;
	box-sizing: border-box;
	padding-left: 10px;
	margin: 7px 0;
}


.btn{
	width: 100px;
	height: 50px;
	background-color:brown;
	border-radius: 50px;
	font-size: 20px;
	margin: 7px 0;
	color: white;
	border:0;
	cursor: pointer;
}

.btn:hover
{
	background-color: #0a63d8;
}

.forgetpass
{
	font-size: 16px;
	padding: 4px 0;
	margin: 3px;
	text-align: center;
}

.link
{
	text-decoration: none;
	color:#0a63d8; 
}

@media (max-width: 470px)
{
	.center
	{
		width: 100%;
		height: 50%;
	}
}



    </style>


</head>
<body style="background-image:url(img/img1.jpg); background-size:cover;background-repeat:no-repeat;background-size:95;">


	<form action="#" method="POST" autocomplete="off">

     <div class="center">
     	<h1>Login</h1>

     	<div class="form">
     		<input type="textbox" name="Name" class="textfile" placeholder="Username" required=""><br>
     		<input type="password" name="password" class="textfile" placeholder="Password" required=""><br>
     		
     		<input type="submit" name="login" value="Login" class="btn">


     	</div>
     </div>
 </form>

</body>
</html>




<?php
    include("connection.php");

    if (isset($_POST['login'])) {

    	$Name=$_POST['Name'];
    	$pwd=$_POST['password'];
    	
    	$query = "SELECT * FROM AdminLogin WHERE Name = '$Name' && password = '$pwd'";
    	$data=mysqli_query($conn,$query);

    	$total=mysqli_num_rows($data);
    	//echo $total;

    	if ($total == 1) 
    	{
    		//echo "Login Ok";
    		header('location:AdminPage.php');
    	}

    	else
    	{
    		echo '<script>alert("Login Failed")</script>';
    	}
    
        


    }



   
  

?>