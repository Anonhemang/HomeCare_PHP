<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <style>
            table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 10px;
                    border: 1px solid black;
                    text-align: center;
                }
                th {
                    background-color: #f2f2f2;
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
    echo "<h1>Registration/Login Information of the client</h1>";
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
    echo "<h1>Information of the client</h1>";
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
    echo "<h1>Information of the Workers</h1>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Age</th><th>Mobile</th><th>ID</th><th>ID Number</th><th>Address</th><th>Job Position</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['Name']."</td><td>".$row['Age']."</td><td>".$row['Mobile']."</td><td>".$row['ID']."</td><td>".$row['IDNum']."</td><td>".$row['Address']."</td><td>".$row['Job']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>


    <input type="submit" value="Add Worker"> 
    <input type="Submit" value="Remove Worker">
    </body>
</html>


