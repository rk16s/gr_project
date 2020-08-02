<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riyadh metro";   
$error ="";
$db = mysqli_connect($servername, $username, $password, $dbname);
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
 session_start();
 
 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['phone']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      $Type= mysqli_real_escape_string($db,$_POST['type']); 
	  
      $sql = "SELECT phone FROM user WHERE phone = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         if($Type=="user"){
         header("location:Home_user.php");
		 }
		 if($Type=="admin"){
         header("location: Home_admin.php");
		 }
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
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
div.a {
  text-align: center;
  color:red;
  font-size:40px;
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
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="Home.php">
                                    <img style="border-radius: 100%;" width="15%" src="img/logo3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu  d-none d-lg-block text-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="Home.php">home</a></li>
                                        <li><a href="ManageTrip.php">Manage Trip</a></li>
                                        
                                        
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
        
		        
	<div class="content_charging">
				<div class="a">
	
	<div style = "font-size:11px; color:red;">  </div>
	<h1 style="color:#45a29e;font-size:40px;" >Riyadh Metro 	</h1>
	<h1 style="color:#45a29e;font-size:40px;" > Project	</h1>
<img style="border-radius: 100%;" width="25%;" "background-color: red;" src="img/logo3.jpg">
	<hr>
			</div>
		<form  action="" method="POST">
		   
			<label class="label_c" for="name">phone</label>
			<input class="input_c" id="phone"  name="phone" type="text" name="phone" maxlength="40" placeholder="Enter your phone number here">
    
			
			<label class="label_c" for="password">password</label>
			<input class="input_c" id="pass" name="pass" type="password" name="password" maxlength="40" placeholder="Enter a password">
           <br>
			 <select class="input1_c" name="type" style="	height:5%;" required name="month">
             <option  name="type" value="admin" selected>Admin</option>
             <option  name="type" value="user" >User</option></select>

			
			<button class="button1_c"  type="submit">Login</button>
			<a style="color:#45a29e;" href="">Have't account?</a>
			
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