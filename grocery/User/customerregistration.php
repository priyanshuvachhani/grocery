<?php 
session_start();
$obj = new mysqli("localhost","root","","grocery");

if (isset($_POST['submit']))
 {
    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $email =$_POST['email'];
    $contact =$_POST['contact'];
    $password =$_POST['password'];
    $address =$_POST['address'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $country=$_POST['country'];

    $r =$obj->query("insert into customer(fname,lname,email,contact,password,address,city,state,country) values ('$fname','$lname','$email','$contact','$password','$address','$city','$state','$country')");
    if ($r) 
    {
        echo "<script>alert('Register success...')</script>";
    }
}
?>



<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:10 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Grocery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/aa.jpeg">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Header Start-->
     <?php include'common/header.php';?>
        <!--End of Header Area-->
        <!-- Account Area start -->
        
        <div class="account-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-link-list">
                            <div class="page-title">
                                <h1>My Account</h1>
                            </div>
                            <p class="account-info">Make Registration  Here............</p>
                            <div class="accordion" id="accordionExample">
                               
                            
                              
                                <div class="card">
                                    <form method="post">
                                    <div class="card-header" id="headingFour">
                                        <h4 class="card-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fa fa-user"></i><span>Registration</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">   
                                                <div class="personal-info col-xl-6 col-lg-8 col-md-10">
                                                    <p class="panel-title">Please Enter Information CareFully. </p>
                                                    <div id="account-info">
                                                        
                                                        <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">First Name</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">Last Name</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">Email</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" id="email" placeholder="Email" value="" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">Contact</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" id="contact" placeholder="Contact" value="" name="contact">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">Address</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" id="address" placeholder="Address" value="" name="address">
                                                            </div>
                                                        </div>

                                                          <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">City</label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="text" class="form-control" id="city" placeholder="city" value="" name="city">
                                                            </div>
                                                        </div>

                                                      <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label">State</label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input type="text" class="form-control" id="state" placeholder="state" value="" name="state">
                                                            </div>
                                                               <div class="col-md-6 col-sm-6">
                                                                <input type="text" class="form-control" id="country" placeholder="country" value="" name="country">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group required">
                                                            <label class="col-md-12 col-sm-12 control-label"> Password </label>
                                                            <div class="col-md-12 col-sm-12">
                                                                <input type="password" name="password" id="password" class="form-control psw"> 
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                           <div class="col-md-12">
                                                            
                                                            
                                                            <div class="buttons-set">
                                                          
                                         <button class="button floatright" id="submit" name="submit" type="submit"><span>Register</span></button>

                                                            </div>
                                                        </div> 
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                               </form> </div>
                                
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-12">
                        
                        <div class="button-home">
                            <a href="index.php" class="read-button floatleft"><span>Home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--End of Account Area-->	
        <!--Brand Area Strat-->
        <?php include'common/footer.php';?>
        <!--End of Service Area-->
        <!--Footer Widget Area Start-->
       
        <!--End of Footer Area-->
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
		<!-- popper JS
		============================================ -->		
        <script src="js/popper.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
        	
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
        
		<!-- price-slider JS
		============================================ -->		
        <script src="js/jquery-price-slider.js"></script>	
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        
        <!--Countdown js-->
        <script src="js/jquery.countdown.min.js"></script>
        
		<!-- Sticky Menu JS
		============================================ -->		
        <script src="js/jquery.sticky.js"></script>
        
		<!-- Elevatezoom JS
		============================================ -->		
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:10 GMT -->
</html>