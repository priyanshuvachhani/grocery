<?php
session_start();
include 'common/connection.php';

$cid=$_SESSION['userid'];  // logged in user id

//$product_result =$obj->query("select * from product where id='$product_id'");
$wishlist =$obj->query("select * from wishlist where customer_id='$cid'");


?>


<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:10 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wishlist </title>
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
        <?php  include'common/header.php';?>
        <!--End of Header Area-->
        <!--Wishlist Area Start-->
        <div class="wishlist-concept area-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-12 order-lg-1 order-2 mt-sm-30 mt-xs-30">
						<div class="section-title no-margin"><h2>My Account</h2></div>
						<aside>
							<div class="wishlist-left-sidebar">
								<ul>
									<li><a href="#">Account Dashboard</a></li>
									<li><a href="#">Account Information</a></li>
									<li><a href="#">Address Book</a></li>
									<li><a href="#">My Orders</a></li>
									<li><a href="#">Billing Agreements</a></li>
									<li><a href="#">Recurring Profiles</a></li>
									<li><a href="#">My Product Reviews</a></li>
									<li><a href="#">My Tags</a></li>
									<li><a href="wishlist.html">My Wishlist</a></li>
									<li><a href="#">My Applications</a></li>
									<li><a href="#">My Downloadable Products</a></li>
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-lg-9 col-12 order-lg-2 order-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h1>My Wishlist</h1>
                                </div>
                            </div>
                        </div>
						<div class="table-responsive">
							<table class="cart-table">
								<thead>
									<tr>
										<th class="product-img">Product Image</th>
										<th>Product Details and Comment</th>
										<th class="text-center add-cart-info">Add to Cart</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php while($product_details = $wishlist->fetch_object())
									{
										$x =$obj->query("select * from product where id='$product_details->product_id'");
                                          $xx =$x->fetch_object();
										?>
									<tr>
										<td class="product-img">
											<a href="product-details.php?delid=<?php echo "$xx->id"?>"><?php echo $xx->pname ;?>
											<img id="zoom1" src="../Admin/img/Product/<?php echo "$xx->img"  ?>" class="img-responsive" ></a>
										</td>
										<td>
											<h6><a href="product-details.html">Donec ac tempus </a></h6>
											<p><?php echo $xx->description;?> </p>
											
										</td>
										<td class="text-center add-cart-info">
											<div class="price-box">
												
												<span class="special-price"><?php echo $xx->price;?></span>
											</div>
											<form action="#" method="post" class="wishlist-qty">
												<input type="text" name="quantity" value="1" maxlength="12">
												<button class="button btn-cart" type="button"><span>Add to Cart</span></button>
											</form>
											
										</td>
										<td class="p-action"><a href="#"></a></td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>
						</div>
                        <div class="all-cart-buttons">
                            <button class="button btn-cart" type="button"><span>Share Wishlist</span></button>
                            <button class="button btn-cart" type="button"><span>Add all to Cart</span></button>
                            <button class="button btn-cart" type="button"><span>update wishlist</span></button>
                        </div>
						<div class="back-button">
							<a href="#"><small>« </small> Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--End of Wishlist Area-->      
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

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:12 GMT -->
</html>