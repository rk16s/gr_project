<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riyadh metro";


$id=$_POST['id'];
$location=$_POST['location'];
$name=$_POST['name'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
 
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO station (`stationId`, `location`, `stationName`, `latitude`, `longitude`) 
VALUES ('$id', '$location','$name','$latitude','$longitude')";

if (mysqli_query($conn, $sql)) {
    
	
	$s = "Insert succes";
	 
	
} 

mysqli_close($conn);




?>