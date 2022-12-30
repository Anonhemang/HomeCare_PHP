<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="img/jpg" href="img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <title>Login</title>
</head>
<body>
    
    <div class="p">
    <img src="img/MyHomecareLogo.png" alt="HomeCare.in" class="l">
    </div>

    <form>
        <h1 style="text-align: center;">Login</h1>
        
        <section>
            <div class="padd">
            <input type="email" name="email" autocomplete="off" required="" placeholder="E-mail" class="w">
            </div>
        </section>

        <section>
            <div class="padd">
            <input type="password" name="pswd" autocomplete="off" required="" placeholder="Password" class="w">
            </div>
        </section>
        <section>
           <a href="HomePage.php"><button type="submit" value="Continue" style="width: 100%;" class="c"> <strong>Continue</strong></button></a>
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