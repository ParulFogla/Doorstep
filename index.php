
<!DOCTYPE HTML>
<html>
<head>
<title>DoorStep:Make Your Life Comfort</title>
<link rel = "icon" href = "logo1.png" type = "image/x-icon"> 
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/hover_pack.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
</script>


<!--
this is for login popup
 -->

 <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<style>body{padding-top: 60px;}</style>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

	<link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/login-register.js" type="text/javascript"></script>

</head>
<body>
	<div class="banner">
   	  <div class="container">
   		<div class="logo">
			<a href="index.html"><img src="logo.jpg" style="height:120px;width:300px;" alt=""/></a>
		</div>
	   <div class="menu">
	     <ul class="megamenu skyblue">
			<li>

				<a  class="color2" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
               
				
			</li>
			<li> <a class="color4" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
				
<!--Start of login popup -->

<div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="login.php" accept-charset="UTF-8">
                                    Login As:<select name="category" id="category" class="form-control"><option name="category" value="customer">Customer</option><option name="category" value="staff">Worker</option></select><br/>
                                    <input id="phno" class="form-control" type="number" placeholder="Phone Number" name="phno" required>
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
                                    <input class="btn btn-default btn-login" type="submit" value="Login" name="commit">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="register.php" accept-charset="UTF-8">
                                Register As:<select name="category" id="category" class="form-control"><option name="category" value="customer">Customer</option><option name="category" value="staff">Worker</option></select><br/>	
                                <input id="name" class="form-control" type="text" placeholder="Name" name="name" required ><br>
                                <input id="phno" class="form-control" type="number" placeholder="Phone Number" name="phno" required><br>
                                <input id="city" class="form-control" type="text" placeholder="City" name="city" required><br>
                                <input type="text" id="add" class="form-control" name="add" placeholder="Address" required><br>
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password" required><br>
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>
<!-- end of login popup -->


				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	        
       </div>
   </div>
   <div class="main">
    <div class="container">
   
   	  <div class="content_middle">
   	  	<center><h1>Our Features</h1></center>
   	  	<div class="col-md-4 col2">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="door.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2><p class="b-animate b-from-right    b-delay03 ">Everything At Your DoorStep.</p></div></a>
   	  	</div>
   	  	<div class="col-md-4 col2">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="total.jpg" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2><p class="b-animate b-from-right    b-delay03 ">All The Service At One Place.</p></div></a>
   	  	</div>
   	  	<div class="col-md-4">
   	  		<a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="job.png" class="img-responsive" alt=""/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "></h2><p class="b-animate b-from-right    b-delay03 ">Employment To The Needy.</p></div></a>
   	  	</div>
   	  	<div class="clearfix"> </div>
   	  </div>
   	  </div>
   	</div>
   	<div class="content_middle_bottom">
   		<div class="header-left" id="home">
		      <section>
				<ul class="lb-album" >
					<li>
						<a href="#image-1">
							<img src="images/Cleaners.jpg"  class="img-responsive" alt="image01"/>
							<span>Cleaning</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">x Close</a>
							<img src="images/Cleaners.jpg"  class="img-responsive" alt="image01"/>
							<div>
								<h3>Cleaning</h3>
								<p>Lose the mop and We'll clean the slop.</p>
							</div>
						</div>
					</li>
					<li>
						<a href="#image-2">
							<img src="images/Movers.jpg"  class="img-responsive" alt="image02"/>
							<span>Movers</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="images/Movers.jpg"  class="img-responsive" alt="image02"/>
							<div>							
								<h3>Movers</h3>
								<p>We make moving easy.Let's go together.</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-3">
							<img src="images/Mechanic.jpg"  class="img-responsive" alt="image03"/>
							<span>Mechanic</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="images/Mechanic.jpg"  class="img-responsive" alt="image03"/>
							<div>							
								<h3>Mechanic</h3>
								<p>We share the pride in your ride.</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-4">
							<img src="images/Tutor.jpg"  class="img-responsive" alt="image04"/>
							<span>Tutor</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="images/Tutor.jpg"  class="img-responsive" alt="image04"/>
							<div>							
								<h3>Tutor</h3>
								<p>Bring education to your home.</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="images/Carpenter.jpg"  class="img-responsive" alt="image05"/>
							<span>Carpenter</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="images/Carpenter.jpg"  class="img-responsive" alt="image05"/>
							<div>							
								<h3>Carpenter</h3>
								<p>We nail it.</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="images/Electrian.jpg"  class="img-responsive" alt="image06"/>
							<span>Electrician</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="images/Electrian.jpg"  class="img-responsive" alt="image06"/>
							<div>							
								<h3>Electrician</h3>
								<p>Don't plug the plug.Call us!</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="images/Plumber.jpg"  class="img-responsive" alt="image07"/>
							<span>Plumbing</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="images/Plumber.jpg"  class="img-responsive" alt="image07"/>
							<div>							
								<h3>Plumbing</h3>
								<p>Got a leak,We'll take a peek.</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="images/Delivery.jpg"  class="img-responsive" alt="image08"/>
							<span>Delivery</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="images/Delivery.jpg"  class="img-responsive" alt="image08"/>
							<div>							
								<h3>delivery</h3>
								<p>We bring the store to your door.</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
		</div>
		<div class="field_content">
		    <h1>Our Services</h1>
		    <h2>CLick to view details</h2>
		</div>
	 </div>
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
	    <div class="clearfix"></div>
	  
   	</div>
   </div>
</body>
</html>		