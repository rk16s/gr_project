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
    <title>riadh</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#metro_map1").click(function(){
    $("#metro_map2").show();
	    $("#metro_map1").hide();

   
	
  });
});
$(document).ready(function(){
		$("#metro_map2").click(function(){
    $("#metro_map1").show();
	    $("#metro_map2").hide();

   
	
  });
});
		</script>

<style>
.content {
border:1px solid #05430E;
  max-width: 500px;
   border-radius: 5px ;
 
  margin-top:100px;
   margin: auto;
     padding: 10px;

 
  }	
  .content1 {

  max-width: 500px;
   border-radius: 5px ;
 
  margin-top:100px;
   margin: auto;
     padding: 10px;

 
  }	
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
	width: 100%;
  border: 1px solid #1E1F1E;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {

  background-color: #dddddd;
}
</style>
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
    <div class="bradcam_area" >
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>ryiadh metro project</h3>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- /bradcam_area  -->

    <div class="portfolio_area">
	<div class="content1">
	<img id="metro_map1" style="" width="100%;" "background-color: red;"  src="img/riyadh-metro-lines.png">
		<img id="metro_map2" style="display:none;" width="100%;" "background-color: red;"  src="img/metroMap.jpg">

	</div>
        <!-- <div class="container-fluid p-0"> -->
            <div class="content">

					
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riyadh metro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM station";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='table'> 
	<thead>
    <tr>
      <th >name of station</th>
      <th >location</th>
	  <th >Informations</th>
      
    </tr>
  </thead>
  <tbody>";
    while($row = $result->fetch_assoc()) {
       
		
		
		echo "<tr> 
		<td>". $row['stationName'] ." </td>
		<td>". $row['location'] ." </td>
		<td></td>
			  </tr>";
    }echo "</table >";
	
	
	
	
} else {
    echo "0 results";
}

$conn->close();
?>
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
        location.href = "ManageTrip.php";
    };
	
	document.getElementById("wallet1").onclick = function () {
        location.href = "ChargingWalletA.php";
    };
	
	

</script>
</body>

</html>