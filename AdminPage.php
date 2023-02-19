<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <style>
            body{
                background-color: red;
            }
            table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    border: 1px solid black;
                    text-align: center;
                    background-color: aliceblue;
                }
                th {
                    background-color:antiquewhite;
                }
                .button{
                    margin-left: 45%;
                    margin-right: auto;
                }
                h1{
                    font-family: Castellar;
                    text-align: center;
                    color: aliceblue;
                    font-size:xxx-large;
                    margin-top: 100px;
                }
                input{
                    height: 50px;
                    text-align: center;
                    cursor: pointer;
                    border-radius: 20px;
                    background-color: antiquewhite;
                }

                input:hover{
                    background-color: aqua;
                }
        </style>
    </head>
    <body>
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homecare";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the table
$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql);

// Display the data in a table
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Registration/Login Information of the client:</h1>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Mobile</th><th>Email</th><th>Password</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['Name']."</td><td>".$row['Mobile']."</td><td>".$row['Mail']."</td><td>".$row['Password']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$sql = "SELECT * FROM contactpage";
$result = mysqli_query($conn, $sql);

// Display the data in a table
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Information of the client:</h1>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Issue</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile']."</td><td>".$row['Issue']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$sql = "SELECT * FROM workers";
$result = mysqli_query($conn, $sql);

// Display the data in a table
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Information of the Workers:</h1>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Age</th><th>Mobile</th><th>ID</th><th>ID Number</th><th>Address</th><th>Job Position</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['Name']."</td><td>".$row['Age']."</td><td>".$row['Mobile']."</td><td>".$row['ID']."</td><td>".$row['IDNum']."</td><td>".$row['Address']."</td><td>".$row['Job']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}





?>

    <div class="button">
        <a href="WorkerRegistration.php"><input type="submit" value="Add Worker"></a> 
        <a href="RemoveWorker.php"><input type="Submit" value="Remove Worker"></a>
        
    </div>

    <?php
    $sql = "SELECT * FROM maid";
    $result = mysqli_query($conn, $sql);
    
    // Display the data in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Booking Information Of Maid:</h1>";
        echo "<table>";
        echo "<tr><th>Email</th><th>Service</th><th>Floors</th><th>Rooms</th><th>Bedrooms</th><th>Kitchen</th><th>Hall</th> <th>Extra Room</th><th>Time</th><th>Washrooms</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['Email']."</td><td>".$row['Service']."</td><td>".$row['Floor']."</td><td>".$row['Rooms']."</td><td>".$row['Bedroom']."</td><td>".$row['Kitchen']."</td><td>".$row['Hall']."</td><td>".$row['ExtraRoom']."</td><td>".$row['Time']."</td><td>".$row['Washroom']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    




    $sql = "SELECT * FROM cleaner";
    $result = mysqli_query($conn, $sql);
    
    // Display the data in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Booking Information Of Cleaner:</h1>";
        echo "<table>";
        echo "<tr><th>Email</th><th>Floors</th><th>Rooms</th><th>Bedrooms</th><th>Kitchen</th><th>Hall</th> <th>Extra Room</th><th>Washrooms</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['Email']."</td><td>".$row['Floor']."</td><td>".$row['Room']."</td><td>".$row['Bedroom']."</td><td>".$row['Kitchen']."</td><td>".$row['Hall']."</td><td>".$row['ExtraRoom']."</td><td>".$row['Bathroom']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }




    $sql = "SELECT * FROM security";
    $result = mysqli_query($conn, $sql);
    
    // Display the data in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Booking Information Of Security:</h1>";
        echo "<table>";
        echo "<tr><th>Email</th><th>Type Of House</th><th>Contract Period</th><th>Shift</th><th>Start Date</th><th>End Date</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row['Email']."</td><td>".$row['HouseType']."</td><td>".$row['Contact']."</td><td>".$row['Shift']."</td><td>".$row['StartDate']."</td><td>".$row['EndDate']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the database connection
    mysqli_close($conn);

    ?>
    </body>
</html>


