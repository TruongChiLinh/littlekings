<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Little Kings &mdash; E-Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/Form.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/dangnhap_dangky.js"></script>
    
  </head>
  <body>
	  
	  <form class="form-dangnhap " action="" onSubmit="return checkLogin();"  id="log-in-form" name="log-in-form" method="post">
			<h1>Sign in</h1>
			<p>Enter your account and password to make a purchase</p>
			<hr>
		<div class="form-group">
				<div class="col-md-11">
						<label for="dn_username"><b> Username</b></label>
						<input id="dn_username" type="text" placeholder="Username" name="username" class="form-control">
<!--		<div class="error-1">Invalid information</div>-->
				</div>
		</div>
		<div class="form-group">
				<div class="col-md-11">
						<label for="dn_password"><b> Password </b></label>
						<input id="dn_password" type="password" placeholder="Password" name="password" class="form-control">
						<div class="error-1">Invalid information</div>
				</div>
		</div>
		<div class="selection-box">
				<input type="button" class="cancel-btn" id="cancel-log-in" value="Cancel">
				<input type="submit" id="a" name="log-in-submit" value="Sign in">
				<div class="no-hope">
					<a href="#"> <h6>Forgot password?</h6> </a>
					<a href="#"> <h6 id="noacc"> No account? registration</h6> </a>
				</div>
		</div>
	</form>
	  
			
	<form class="form-dangnhap" onSubmit="return checkSignup()" id="registration-form" name="registration-form" method="post">
			<h1>Register an account</h1>
			<p>Please enter the required information below</p>
			<hr>
						
			<div class="form-group row">
				<div class="col-md-6">
					<label for="dk_fname"> <b>First Name</b><span class="text-danger">*</span> </label>
					<input id="dk_fname" type="text" placeholder="Last Name" name="firstname" class="form-control">
					<div class="error">Invalid information</div>
				</div>
				<div class="col-md-6">
					<label for="dk_lname"> <b>Last Name</b><span class="text-danger">*</span> </label>
					<input id="dk_lname" type="text" placeholder="Name" name="lastname" class="form-control">
					<div class="error">Invalid information</div>
				</div>
			</div>
						
			<div class="form-group row">
				<div class="col-md-6">
					<label for="dk_email" > <b> Email </b><span class="text-danger">*</span></label>
					<input id="dk_email" type="text" placeholder="Email" name="email" class="form-control">
					<div class="error-1" id="dk_err_email">Invalid information</div>
				</div>
				<div class="col-md-6">
					<label for="dk_phone"><b>Phone number </b><span class="text-danger">*</span></label>
					<input id="dk_phone" type="text" placeholder="Phone number" name="phone" class="form-control">
					<div class="error-1" id="dk_err_phone">Invalid information</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-12">
					<label for="dk_username"> <b> Username </b><span class="text-danger">*</span>
						<i style="font-size: 14px; padding-left:5px">(Minimum 5 characters)</i> </label>
					<input id="dk_username" type="text" placeholder="Username" name="username" class="form-control">
					<div class="error-1" id="dk_err_username">Invalid information</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
					<label for="dk_password"> <b>Password</b><span class="text-danger">*</span> 
					 	<i style="font-size: 14px; padding-left:5px">(Minimum 5 characters)</i> </label>
					<input id="dk_password" type="password" placeholder="Password" name="password" class="form-control">
					<div class="error-1" id="dk_err_password">Invalid information</div>
				</div>
				<div class="col-md-6">
					<label for="dk_repassword"> <b>Retype password</b><span class="text-danger">*</span> </label>
					<input id="dk_repassword" type="password" placeholder="Retype password" name="psw-repeat" class="form-control">
					<div class="error-1" id="dk_err_repassword">Invalid information</div>
				</div>
			</div>
						
			<div class="selection-box">
				<input type="submit" name="log-in-submit" value="Register">
				<input type="button" class="cancel-btn" id="cancel-log-in" value="Cancel">
							
			</div>
			<div class="no-hope">
					<a href="#"> <h6 id="haveacc"> Have a account? Login</h6> </a>
			</div>
	</form>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Little Kings</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><?php
					  if(isset($_SESSION['isLogin'])){
						  if($_SESSION['isLogin']==1){
							  echo '<a id="logout"><span class="icon icon-sign-out" style="cursor: pointer;"></span></a>';
						  }
					  }
					  else{
						  echo '<a id="btsignin"><span class="icon icon-person" style="cursor: pointer;" ></span></a>';
					  }
					  
					  ?></li>
                  <li><a href="#"><?php
					  if(isset($_SESSION['isLogin'])){
						  if($_SESSION['isLogin']==1){
							  echo " Hello, ".$_SESSION['nameLogin'];
						  }
					  }
					  else{
						  echo" Hello";
					  }
					  ?></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"><?php $count=0; if(isset($_SESSION['cart'])){foreach($_SESSION['cart'] as $k=>$v)$count+=$v;}; echo ($count) ?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li >
              <a href="index.php">Home</a>
              
            </li>
            <li >
              <a href="about.php">About</a>
              
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6696584236892!2d106.68006961468384!3d10.759922362440646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zxJDhuqFpIEjhu41jIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1557226216131!5m2!1svi!2s" width="400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Leather collection</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Leather wallet</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Leather belts</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Leather bag</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Receive promotion notice</h3>
            <a href="#" class="block-6">
              <input type="text" name="premail" placeholder="Enter your email" class="form-control">
              <input type="button" name="sub" value="Subscribe" class="btn">              
              <p></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">273 An Duong Vuong street, District 5, Ho Chi Minh city</li>
                <li class="phone"><a href="#">039 548 2136</a></li>
                <li class="email">littleKings@gmail.com</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank" class="text-primary">Team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>