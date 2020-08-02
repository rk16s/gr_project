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
  $("#trip").click(function(){
    $("#map2").show();
   
	
  });
});
		
		</script>
 <style>
   .button_start_trip {
	
  background-color: #0b0c10;
  color: #45a29e;
  border: 1px solid #45a29e;
   height: 40px;
width:150px;   
 border-radius: 10px;

	outline: none;
	border: none;
	display: block;
	outline: none;
	border: none;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
	border-radius: 5px ;
	argin-top:100px;
   margin: auto;
     padding: 10px;
}


.button_start_trip:hover{


  border-radius: 4px;
  padding: 10px 24px;
   height: 40px;
width:150px;   
  background-color: #45a29e;
  color: #0b0c10;
  border: 1px solid black;  
  

}
   select{
	   background-color: #0b0c10;
   	line-height: 25px;
   box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 25%;
	height:10%;
	display: block;
	outline: none;
	border: none;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
	border-radius: 5px ;
	argin-top:100px;
   margin: auto;
     padding: 10px;
	 color:#45a29e;

	}
	label{

	text-align:center;
	display: block;
	border-radius: 2px;
	margin-top: -19px;
	height: 14px;
	padding: 2px 5px 2px 5px;
color:black;
	font-size: 14px;
	overflow: display;
	font-family: Arial, Helvetica, sans-serif;
}
   .content {
	   
border:1px solid #0b0c10;

  max-width: 500px;
 
  border-radius: 5px ;
  
  margin-top:100px;
   margin: auto;
     padding: 10px;

 
  }	
  .content1 {
border:1px solid #05430E;

  max-width: 500px;
 
 
  border-radius: 5px ;
  
  margin-top:100px;
   margin: auto;
     padding: 10px;
display:none;
 
  }	
  }
  #sample{
  margin: auto;
  padding: 10px;
  width:380px; 
  height:200px;
  }
  form{margin: auto;
  padding: 10px;
  width:380px; 
  height:200px;}
  input{max-width:250px;}
   </style>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 300px;
		width:70%
		height: 500px;
		 margin-top:100px;
   margin: auto;
     padding: 10px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
		 
      }
      #floating-panel {
        
        background-color: #fff;
        
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
       
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
		 width: 10%
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 10%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
		  background-color:white;
border:1px solid #05430E;
        height: 100%;
        width: 80%;
        overflow: auto;
		margin-top:100px;
   margin: auto;
     padding: 10px;
	 border-radius:4px;
	 
      }
      #map {
       
      }
      #floating-panel {
        background: #fff;
background-color:red;
color:red;
           font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
      @media print {
        #map {
          
          
        }
        #right-panel {
			background-color:red;	
          width: 100px;
		   margin-top:100px;
   margin: auto;
        }
      }
	 .button5 {
	color:#5F9C68;
  background-color: red;
    border-radius: 4px;	
  width: 5px;
  height: 5px;

}

.button5:hover {
	
  background-color: #5F9C68;
  color: white;
  border: 1px solid white;
}
    </style>
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
                        <h3 >ryiadh metro<br> project</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

<br><br>
    <div class="portfolio_area">
        
		        <div id="map1" class="content">

					<div id="map"></div>
					<br><br>
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
	echo "<label>Select station </label>
	<select id='end'>";
    while($row = $result->fetch_assoc()) {
       
		
		
		echo "<option value=". $row['location'] .">". $row['stationName'] ." </option>";
    }echo "</select>";
	
	
	
	
} else {
    echo "0 results";
}

$conn->close();
?>
      
	  
      
	  <br>
	  <button id="trip" class="button_start_trip">Start Trip</button><br><br>
				</div>
				<br><br>

				
  <div id ="map2" class="content1">
					<div id="floating-panel"></div>	

			<div id="right-panel"></div>
		
		</div>
        
    </div>














    <!-- footer start -->
    <footer class="footer">
           
        </footer>
    <!--/ footer end  -->

    <!-- JS here -->
	
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      
      
        
var lat;
var lng;
       
   
var  infoWindow;
	  function initMap() {
        var directionsRenderer = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
         map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 24.721472, lng: 46.622500}
        });
		  directionsRenderer.setMap(map);
        directionsRenderer.setPanel(document.getElementById('right-panel'));
        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
	
       	
		
		// Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function getlocation(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };


               lat = position.coords.latitude;
               lng = position.coords.longitude;
           


            
			
			return [position.coords.latitude, position.coords.longitude];
          }, function() {
            
          });
        } else {
          
        }
      

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
       
      
       
      }
		
		
		
		
		
		
        

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsRenderer);
        };
		
        
        document.getElementById('end').addEventListener('change', onChangeHandler);
      
	  }
	  
        
		
      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
		  
		  
		  
		
		var start_lat2 =document.getElementById('end').value;
			function splitNum(num, pos){
				num = num.toString();
				return [num.substring(0, pos), num.substring(pos)];
			}
					
			console.log("spiltS")
			
			var spiltS2= splitNum(start_lat2,9);
			var start_first_part=lat;
			var start_second_part=lng;
			
			var end_first_part  =  spiltS2[0];
			var end_second_part  =  spiltS2[1];
		
console.log(start_first_part)
console.log(start_second_part)



				
        var start = new google.maps.LatLng(start_first_part,start_second_part);
		
        var end = new google.maps.LatLng(end_first_part,end_second_part);
		
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsRenderer.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
	  
    </script>
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