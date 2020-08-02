<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT count(phone) from user" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 

$sql1 = "SELECT startStation as station , count(tripId) from trip group by station =max(tripId) "  ;
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) 


mysqli_close($conn);
?>