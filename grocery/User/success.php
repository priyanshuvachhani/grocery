<?php
session_start();
if (!isset($_SESSION['userid']))
 {
    header('location:index.php');
}
include'common/connection.php';

$order_id = $_SESSION['order_id'];
$obj->query("update orders set status='completed' where order_id = '$order_id'");


$customer_id = $_SESSION['userid'];
$obj->query("delete from cart where customer_id='$customer_id'");

?>


<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:13 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Grocery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon"  href="img/aa.jpeg">
		
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
        <?php
         include 'common/header.php';
        ?>        <!--End of Header Area-->
        <!--Checkout Area Start--><br/><br/>
        <div class="checkout-area area-padding">
            <div class="container">
                <div class="row">

                          <h1 style="color: green; font-style: italic; text-align: center;" >Your Order has been Placed Successfully</h1><br/>
                         
                </div>
                 <br/><h3>Want to continue shopping ? <a href="shop-grid.php"> Click Here ?</a></h3>
                
            </div>
        </div> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!--End of Checkout Area-->      
        <!--Brand Area Strat-->
      <div class="service-area">
            <div class="container">
                <div class="service-padding">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-service mb-sm-30">
                                <span class="fa fa-truck"></span>
                                <h3>fREE SHIPPING</h3>
                                <p>One order over $99</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-service mb-sm-30">
                                <span class="fa fa-dropbox"></span>
                                <h3>Special gift cards</h3>
                                <p> Give the perfect gift</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-service">
                                <span class="fa fa-calendar-o"></span>
                                <h3>Daily promotion</h3>
                                <p> Set up perspiciatis unde</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-service">
                                <span class="fa fa-comments-o"></span>
                                <h3>Special gift cards</h3>
                                <p> Give the perfect gift</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <!--End of Service Area-->
        <!--Footer Widget Area Start-->
        <div class="footer-widget-area">
            <div class="container">
                <div class="footer-widget-padding"> 
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-widget mb-sm-30">
                                <div class="footer-widget-title">
                                    <h3>our support</h3>
                                </div>
                                <div class="footer-widget-list ">
                                    <ul>
                                        
                                        <li><a href="policy.php">Privacy Policy</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-widget mb-sm-30">
                                <div class="footer-widget-title">
                                    <h3>My account</h3>
                                </div>
                                <div class="footer-widget-list ">
                                    <ul>
                                         <li><a href="login.php">login </a></li>
                                        <li><a href="account.php">My Account</a></li>
                                        <li><a href="index.php">Home</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="single-widget">
                                <div class="footer-widget-title">
                                    <h3>Contact us</h3>
                                </div>
                                <div class="footer-widget-list ">
                                    <ul class="address">
                                        <li><span class="fa fa-map-marker"></span> Addresss: Surat</li>
                                        <li><span class="fa fa-phone"></span> (+91) 9081887778</li>
                                        <li class="support-link"><span class="fa fa-envelope-o"></span> info.james2020@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>     
            </div>
        </div>
        <!--End of Footer Widget Area-->
        <!--Footer Area Start-->
        <footer class="footer">
            <div class="container">
                <div class="footer-padding">   
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-8">
                            <nav>
                                <ul id="footer-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                                <p class="author">Copyright © 2022 <a href="index.php">Jewelry Port</a> All Rights Reserved.</p>
                            </nav>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-4">
                            <p class="payment-image">
                                <img src="img/payment.png" alt="">
                            </p>
                        </div>
                    </div>
                </div>    
            </div>
        </footer>


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
        <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:14 GMT -->
</html>