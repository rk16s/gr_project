<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riyadh metro";



 $Message="";
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
$id=$_POST['id'];
$location=$_POST['location'];
$name=$_POST['name'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$sql = "INSERT INTO station (`stationId`, `location`, `stationName`, `latitude`, `longitude`) 
VALUES ('$id', '$location','$name','$latitude','$longitude')";
}
if (mysqli_query($conn, $sql)) {
    
	
	$Message = "Insert Succeed";
	
	 
	
} 
$Message = "Insert Failded";
	
mysqli_close($conn);




?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manage Stations
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	<style>
	::placeholder {
  color: #45a29e;
}
	</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script> 

</script>
 
<body style="background-color: white;">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
     <header>
         <div  style="background-color:black;" class="header-area ">
            <div  id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="Home_admin.php">
                                    <img style="border-radius: 100%;" width="15%" src="img/logo3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu  d-none d-lg-block text-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="Home_admin.php">home</a></li>
                                        <li><a href="ManageTrip_admin.php">Manage Trip</a></li>
                                        
                                        
                                        <li><a href="logout.php">logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>ryiadh metro project</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

<br><br>
    <div class="portfolio_area">
        
		        
	<div  class="content_charging" >
		<div style="text-align:center;color:	red;"><?php  echo $Message ?> </div>
			
			
				<form action="ManageStations.php" method="POST">
				
						<label class="label_c" name="id"  >Id</label>
						<input class="input_c" id="id" for="id"  name="id" maxlength="40" placeholder="Enter ID of the stations">
    <br>
					
						<label class="label_c" for="location">location</label>
						<input class="input_c" name="location"  id="location"   maxlength="40" placeholder="Enter a location number like 24.83014346.616053">
    <br>
					
						<label class="label_c" for="name">Station Name</label>
						<input class="input_c" name="name" id="name" maxlength="40" placeholder="Enter Name of station">
        <br>
						<label class="label_c" for="latitude">latitude</label>
						<input class="input_c" name="latitude" id="latitude" maxlength="40" placeholder="Enter latitude">
        <br>
						<label class="label_c" for="longitude">longitude</label>
						<input class="input_c" name="longitude" id="longitude" maxlength="40" placeholder="Enter longitude">
        <br>
	<div class="a">				
   <button class="button1_c"  type="submit" >Save</button>
     </div>
  
		</form>
	</div>
		</div>
    
<br><br>













    <!-- footer start -->
    <footer class="footer">
           
        </footer>
    <!--/ footer end  -->

    <!-- JS here -->
	
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ8OCC8En5vNHod25Ov3Qs5E1v7NPRSsg&callback=initMap">
    </script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>