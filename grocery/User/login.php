<?php
session_start();
include 'common/connection.php';

if (isset($_POST['submit']))
 {
    $email =$_POST['email'];
    $password =$_POST['password'];

    $e = $obj->query("select * from customer where email='$email' and password='$password'");
    $row =$e->num_rows; 
    if ($row == 1)
      {
        $i = $e->fetch_object();
        $id=$i->id;
        $_SESSION["userid"]=$id;
        header('location:index.php');


     
     }
     else
     {
        echo "<script>alert('check email and password')</script>";
     }
}

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
        <!--Checkout Area Start-->
        <div class="checkout-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h1>Login </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h4 class="card-title">
                                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Login Here.........
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">   
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                
                                                
                                            </div>
                                            <div class=" col-12">
                                                <div class="single-checkout right">
                                                    <h3 class="login-title">Login</h3>
                                                    <h4>Already Registered?</h4>
                                                    <p>Please log in below :</p>
                                                    <div class="login-form">
                                                        <form method="post">
                                                            <p>Email Adress<span>*</span></p>
                                                            <input type="email" name="email" id="email" required>
                                                            <p>Password<span>*</span></p>
                                                            <input type="password" name="password" id="password" required>
                                                            <a href="customerregistration.php" class="forgot-pass">Register Now.. </a>
                                                            
                                                            <button class="login-btn" id="submit" name="submit" type="submit"><span>Login</span></button>
                                                        </form>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h4 class="card-title">
                                      
                                    </h4>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="checkout-table table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="p-name alignleft">Product Name</th>
                                                            <th class="p-amount">Price</th>
                                                            <th class="p-quantity">Qty</th>
                                                            <th class="p-total">SubTotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="p-name">Aliquam consequat</td>
                                                            <td class="p-amount"><span class="amount">£156.87</span></td>
                                                            <td class="p-quantity">1</td>
                                                            <td class="p-total alignright">£156.87</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-name">Spante Congue</td>
                                                            <td class="p-amount"><span class="amount">£156.87</span></td>
                                                            <td class="p-quantity">1</td>
                                                            <td class="p-total alignright">£156.87</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3" class="alignright">Subtotal</td>
                                                            <td class="floatright">£313.84</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="alignright">Shipping &amp; Handling (Flat Rate - Fixed)    </td>
                                                            <td class="floatright">£5.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="alignright"><strong>Grand Total</strong></td>
                                                            <td class=" alignright"><strong>£318.84</strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="checkout-buttons">
                                                    <p class="floatleft">Forgot an Item? <a href="#">Edit Your Cart</a>
</p>
                                                    <button type="button" class="button floatright"><span>Place Order</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="checkout-progress">
                            <div class="section-title"><h2>Checkout Progress</h2></div>
                            <ul class="check">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Billing address</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Shipping address</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>shipping method</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>payment method</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Checkout Area-->      
        <!--Brand Area Strat-->
        <?php include 'common/footer.php';?>
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

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:14 GMT -->
</html>