<?php
  session_start();
  
  if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
   
   
   $servername = "localhost";
	  $username = "root";
      $password = "";
      $dbname = "riyadh metro";
	  
	  
	  
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT point FROM user WHERE phone='$_SESSION[login_user]'";
	$result = $conn->query($sql);

		if ($result->num_rows > 0) {
 
	
    while($row = $result->fetch_assoc()) {
       
		
		
		
		$point= $row['point'];
		
    }
		}
	
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
						}
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			$Type=$_POST['point']; 
			if($Type=="ten"){
         $point = $point + 10 ;
		 }
		 if($Type=="t"){
         $point= $point + 20;
		 }
		
			
			$sql = "UPDATE user SET point='$point' WHERE phone='$_SESSION[login_user]'";
						 
			if (mysqli_query($conn, $sql)) {
			header("location: walletA.php");
	 
	
											} 
			header("location: walletA.php");
	 
						 }
			mysqli_close($conn);
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charging
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
  color: #1E1F1E;
}
	</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script> 
$(document).ready(function(){
  $("#step1").click(function(){
    $("#pay").hide();
    $("#wallet").show();
	
  });
});
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
                                <a href="Home_user.php">
                                    <img style="border-radius: 100%;" width="15%" src="img/logo1.jpeg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu  d-none d-lg-block text-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="Home_user.php">home</a></li>
                                        <li><a href="ManageTrip_user.php">Manage Trip</a></li>
                                        
                                        
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
		
		<div id="wallet" class="wallet"><?php echo $point; ?></div>
		
		
		<div id="pay">
			<form class="form-style-7" action="" method="POST">
					<label>How much points</label>
                    <select class="select_c" name="point" style="width: 50%; margin-bottom: 30px; margin-left: auto; margin-right: auto;" required >
                                              <option  name="point" value="ten" selected>10 point</option>
                                              <option  name="point" value="t" >20 points</option>
                                              
                                            </select>
                        

                     <label class="label_c">Owner Name</label>
                     <input class="input_c" autofocus  type="text" name="name" placeholder="Write Name here.." required="required" />

                    <label class="label_c">Card Number</label>
                    <input class="input_c" id="credit-card" type="text" name="number" maxlength="20" placeholder="Ex: 4054 3224 2853 7059 " required="required" />

                            
                               <label class="label_c"	>CVV</label>
                                    <input style="width: 25%;" class="input_c"  name="cvv" placeholder="* * *" required="required" />
                                
                                            <label class="label_c">Expire Date</label>
                                            <select class="input1_c" required name="month">
                                              <option selected>January</option>
                                              <option>February</option>
                                              <option>March</option>
                                              <option>April</option>
                                              <option>May</option>
                                              <option>June</option>
                                              <option>July</option>
                                              <option>August</option>
                                              <option>September</option>
                                              <option>October</option>
                                              <option>November</option>
                                              <option>December</option>
                                            </select>
                                        
                                           
                                        

                               
                                    
                                
                                
                            
							
                            <button id="step1" type="submit" class="button1_c"> pay</button>
                        </form>
			  </div>
			</div>
        <br><br>
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