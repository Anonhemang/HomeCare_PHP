<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homecare";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
   // echo "connected";
}
else{
    echo "Failed".mysqli_connect_error();
}

?>