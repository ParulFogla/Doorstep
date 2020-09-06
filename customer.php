<?php
   include('session.php');
   
?>
<!DOCTYPE HTML>
<html>
<head>

<title>DoorStep:Make Your Life Comfort</title>
<link rel = "icon" href = "logo1.png" type = "image/x-icon"> 
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>

              <style> 
            table, td { 
                border: 2px; 
                text-align:center; 
            } 
             td { 
                padding: 20px; 
                background-color:none; 
            } 
            input, textarea{
            	border-radius: 5px;
            	box-shadow: 5px 5px 5px 5px grey;

            }
            #mytype{

  				height: 200px;
  				width: 100%
  				padding: 15px;
 				background-color:  #e6b3ff;
  				box-shadow: 10px 10px 10px 10px grey;
            }
              
             
        </style> 	
</head>
<body>
	<div class="men_banner">
   	  <div class="container">
   		<div class="logo">
			<a href="index.html"><img src="logo.jpg" style="height:120px;width:300px; alt=""/></a>
		</div>
	   <div class="menu">
	   	<h4 style="color:white">Welcome <?php echo $login_session; ?></h4>
	     <ul class="megamenu skyblue">
	     	<li class="active grid" style="color: white"><a href = "prev.php">Previous Orders</a></li>
	     	<li class="active grid" style="color: white"><a href = "logout.php">Sign Out</a></li></ul>
		
     <div class="clearfix"> </div>
	</div>
    </div>
   </div>
   <br>
   <br>
   <br>
   <div><h1 align="center">New Services</h1></div>
<section align:"center">
  <img class="mySlides" src="Tutor_banner.png"
  style="width:100%">

  <img class="mySlides" src="Movers_banner.jpeg"
  style="width:100%">
</section>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>
<!-- databse connection part-->
<br/>
<br/>

<div  id="mytype">
	<br>
<center><h1 style="text-shadow: 3px 1px grey;">Place an order or Request a service here</h1>
<table>
<form action="place.php" method="post">
	<tr><td><input type="text" id="service" name="service"  placeholder="Type of Service"></td>
	<!--<td><input type="text" name="details" id="details" placeholder="Details"></td>-->
	<td><input type="text" id="store" name="store"  placeholder="Store"></td>
	<td><input type="number" id="quantity" name="quantity" placeholder="Quantity"></td>
	<td><br><textarea rows = "2" cols = "30" id="details" name = "details"  placeholder="Enter Details"></textarea></td>
	<td><input type="submit" name="Submit" value="submit"></td></tr>
	
</form>

</table></center>


</div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"> </div>
	   
   	</div>
   </div>
</body>
</html>		