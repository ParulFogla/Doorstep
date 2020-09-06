<?php
   include('session2.php');
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
            	 table, td ,th { 
                border: 2px; 
                text-align:center; 
            } 
             td, th { 
                padding: 20px; 
                background-color:none; 
            } 
             #mytype{

  				height: 50%;
  				width: 100%
  				padding: 15px;
 				background-color: #e6b3ff;
  				box-shadow: 10px 10px 10px 10px grey;
            }

            input {
            	border-radius: 5px;
            	box-shadow: 5px 5px 5px 5px grey;

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
	     	<li class="active grid" style="color: white"><a href = "prevstaff.php">Previous Orders</a></li>
	     	<li class="active grid" style="color: white"><a href = "logout.php">Sign Out</a></li></ul>
		
     <div class="clearfix"> </div>
	</div>
    </div>
   </div>
  
<?php
$Query="select ocat,odet,ostore,oquan,ooid,cid from orders where sid IS NULL";
$Subject=mysqli_query($link,$Query);
$i=-1;

while($row = mysqli_fetch_array($Subject))
{
    $i++;

    $Code[$i]['ocat']=$row['ocat'];
    $Code[$i]['odet']=$row['odet'];
    $Code[$i]['ostore']=$row['ostore'];
    $Code[$i]['oquan']=$row['oquan'];
    $Code[$i]['ooid']=$row['ooid'];
    $Code[$i]['cid']=$row['cid'];
   
$variable=$Code[$i]['cid'];
 $sql="select cname,cphno,ccity,caddr from customer where customer.cid = $variable ";
   $result=mysqli_query($link,$sql);
   $r=mysqli_fetch_array($result);
   $cust[$i]['cname']=$r['cname'];
   $cust[$i]['cphno']=$r['cphno'];
   $cust[$i]['ccity']=$r['ccity'];
   $cust[$i]['caddr']=$r['caddr'];
}
$j=0;
$k=0;
?>


<br>
<br>
<center>
<h1 style="text-shadow: 3px 1px grey;">Recent Orders</h1></center><br>
<div id='mytype'><center>
<form action="accept.php" method="post"><table>
	<tr><th>Sl.No</th><th>Order Category</th><th>Order Details</th><th>Order Store</th><th>Order Quantity</th><th>Customer Name</th><th>Customer Phone Number</th><th>Customer City</th><th>Customer Address</th><th>Accept The Service</th></tr>
	<?php while ( $j <= $i) { $k++; ?>
	<tr><td><?php echo $k; ?></td>
	<td><?php echo $Code[$j]['ocat']; ?></td>
	<td><?php echo $Code[$j]['odet']; ?></td>
	<td><?php echo $Code[$j]['ostore']; ?></td>
	<td><?php echo $Code[$j]['oquan']; ?></td>
	<td><?php echo $cust[$j]['cname']; ?></td>
	<td><?php echo $cust[$j]['cphno']; ?></td>
	<td><?php echo $cust[$j]['ccity']; ?></td>
	<td><?php echo $cust[$j]['caddr']; ?></td>
	<td><input type="submit" name="<?php echo $Code[$j]['ooid']; ?>" id="<?php echo $Code[$j]['ooid']; ?>" value="Accept"></td></tr> <?php $j++; } ?>
</table></form>
   </center>
</div>

<div id="out">
	

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