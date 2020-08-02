<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
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
</head>

<body>
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
                                <a href="Home_user.php">
                                    <img style="border-radius: 100%;" width="15%" src="img/logo3.jpg" alt="">
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
    <div class="bradcam_area" >
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>ryiadh metro</h3>
						<h3>project</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->


    <div class="portfolio_area">
        <!-- <div class="container-fluid p-0"> -->
            <div class="portfolio_wrap">
                <div class=" single_gallery">
                    <div class="thumb">
                       <button id ="map1" class="button1"> <img src="img/icons8-subway-100.png"></button>
              				<div>
							
			  </div>
			  </button>
                    </div>
                    <div class="gallery_hover">
                        <div class="hover_inner">
                                <span>  Manage Trip </span>
                                <a href"> <h3>Choose your distnaition</h3></a>
                                
                        </div>
                    </div>
                </div>
				
				
                <div class="single_gallery small_width">
                    <div class="thumb">
                         <button id ="wallet" class="button1"> <img src="img/wallet.png"></button>
                    </div>
                    <div class="gallery_hover">
                            <div class="hover_inner">
                                    <span>  Charging Wallet </span>
                                    <a href="Charging.php"> <h3></h3></a>
                            </div>
                        </div>
                </div>
                <div class="single_gallery">
                    <div class="thumb">
                         <button id ="ViewS" class="button1"> <img src="img/train-station.png"></button>
                    </div>
                    <div class="gallery_hover">
                            <div class="hover_inner">
                                    <span></span>
                                    <a href=""> <h3>View Stations</h3></a>
                            </div>
                        </div>
                </div>
                <div class=" single_gallery">
                    <div class="thumb">
                        <button id ="map" class="button1"> <img src="img/icons8-qr-code-100.png"></button>
                    </div>
                    <div class="gallery_hover">
                            <div class="hover_inner">
                                    <span></span>
                                    <a href=""> <h3>your QR</h3></a>
                            </div>
                        </div>
                </div>
                <div class="single_gallery">
                    <div class="thumb">
                         <button id ="managS" class="button1"> <img src="img/icons8-services-500.png"></button>
                    </div>
                    <div class="gallery_hover">
                            <div class="hover_inner">
                                    <span>Manage Stations</span>
                                    <a href="work_details.html"> <h3>(add,delete...)</h3></a>
                            </div>
                        </div>
                </div>
                <div class=" single_gallery small_width">
                    <div class="thumb">
                         <button id ="map" class="button1"> <img src="img/logout1.png"></button>
                    </div>
                    <div class="gallery_hover">
                            <div class="hover_inner">
                                    <span></span>
                                    <a href=""> <h3></h3></a>
                            </div>
                        </div>
               
        <!-- </div> -->
        
    </div>














    <!-- footer start -->
    <footer class="footer">
           
        </footer>
    <!--/ footer end  -->

    <!-- JS here -->
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
	<script type="text/javascript">
    document.getElementById("map1").onclick = function () {
        location.href = "ManageTrip_user.php";
    };
	
	document.getElementById("wallet").onclick = function () {
        location.href = "Charging_user.php";
    };
	document.getElementById("ViewS").onclick = function () {
        location.href = "Station_user.php";
    };

	
	

</script>
</body>

</html>