<?php 
session_start();
include 'common/connection.php';

$r =$obj->query("select * from product");

?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:43 GMT -->
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
        <!--Breadcrumb Start-->
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="index.html">Home</a><span>/ </span></li>
                                <li><strong>Shop List</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb-->
        <!--Banner Imgae Area Start-->
        <div class="banner-image-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="category-image"><img alt="women" src="img/banner/13.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Imgae Area-->
        <!--Shop Main Area Start-->
        <div class="shop-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2 mt-xs-30 mt-sm-30">
                        <div class="sidebar-content">
                            <div class="section-title"><h2>Category</h2></div>
                            <div class="sidebar-category-list">
                                <ul>
                                    <li><a href="#">Dresses (4)</a></li>
                                    <li><a href="#">shoes (6)</a></li>
                                    <li><a href="#">Handbags (1)</a></li>
                                    <li><a href="#">Clothing (3)</a></li>
                                </ul>
                            </div>
                            <div class="section-title border-none"><h2>Price</h2></div>
                            <div class="sidebar-category-list">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                       <div class="slider-values">
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                        </div>
                                    </div>
                                    <button id="search_price" name="search_price" type="button" class="button"><span><span>Search</span></span></button>
                                </div>
                            </div>
                            <div class="section-title border-none"><h2>Manufacturer</h2></div>
                            <div class="sidebar-category-list">
                                <ul>
                                    <li><a href="#">Calvin Klein (1)</a></li>
                                    <li><a href="#">Diesel (1)</a></li>
                                    <li><a href="#">option value (1)</a></li>
                                    <li><a href="#">Polo (1)</a></li>
                                    <li><a href="#">store view (1)</a></li>
                                    <li><a href="#">Tommy Hilfiger (3)</a></li>
                                    <li><a href="#">will be used (1)</a></li>
                                </ul>
                            </div>
                            <div class="section-title border-none"><h2>Color</h2></div>
                            <div class="sidebar-category-list">
                                <ul>
                                    <li><a href="#">Black (1)</a></li>
                                    <li><a href="#">Blue (1)</a></li>
                                    <li><a href="#">Green (1)</a></li>
                                    <li><a href="#">Grey (2)</a></li>
                                    <li><a href="#">Red (2)</a></li>
                                    <li><a href="#">White (2)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="section-title no-margin"><h2>Compare Products </h2></div>
                            <div class="block-content">
                                <p class="empty">You have no items to compare.</p>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="section-title no-margin"><h2>Popular Tags</h2></div>
                            <div class="popular-tags">
                                <ul class="tag-list">                  
                                    <li><a href="#">Curae</a></li>
                                    <li><a href="#">Vestibulum</a></li>
                                    <li><a href="#">ante</a></li>
                                    <li><a href="#">cubilia</a></li>
                                    <li><a href="#">et</a></li>
                                    <li><a href="#">faucibus</a></li>
                                    <li><a href="#">in</a></li>
                                    <li><a href="#">ipsum</a></li>
                                    <li><a href="#">luctus</a></li>
                                    <li><a href="#">orci</a></li>
                                    <li><a href="#">posuere</a></li>
                                    <li><a href="#">primis</a></li>
                                    <li><a href="#">ultrices</a></li>
                                </ul>
                                <div class="tag-actions">
                                    <a href="#">View All Tags</a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="banner-box">
                                <a href="#"><img src="img/banner/14.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="shop-item-filter">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <div class="tab-menu">
                                    <ul class="nav nav-tabs navbar-left" role="tablist">
                                    <li><a href="#grid" class="grid-view" aria-controls="grid" role="tab" data-toggle="tab">Grid</a></li>
                                    <li><a href="#list" class="active list-view" aria-controls="list" role="tab" data-toggle="tab">List</a></li>
                                </ul>
                                </div>
                                <div class="filter-by">
                                    <h4>Short by </h4>
                                    <form action="#">
                                        <div class="select-filter">
                                            <select>
                                              <option value="color">Position</option>
                                              <option value="name">Name</option>
                                              <option value="brand">Brand</option>
                                            </select> 
                                        </div>
                                    </form>								
                                </div>
                                <p class="page floatright">Per Page</p>
                                <div class="filter-by floatright">
                                    <h4>Show </h4>
                                    <form action="#">
                                        <div class="select-filter">
                                            <select>
                                              <option value="10">12</option>
                                              <option value="20">16</option>
                                              <option value="30">20</option>
                                            </select> 
                                        </div>
                                    </form>	
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div> 
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane" id="grid">
                                <div class="row">


                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="single-product-item">
                                            <div class="sale-product-label"><span>sales</span></div>
                                            

                                            <?php
                                            while($result =$r->fetch_object())
                                               {
                                                ?>
                                                     <div class="single-product clearfix">
                                                <a href="#">
                                                    <span class="product-image">
                                                        
                                                     <img src="../Admin/img/Product/<?php echo "$result->img" ?>">
                                                    </span>
                                                    
                                                </a>
                                                <div class="button-actions clearfix">   
                                                    <button class="button add-to-cart" type="button">
                                                        <span><i class="fa fa-shopping-cart"></i></span>
                                                    </button>
                                                    <ul class="add-to-links">
                                                        <li class="quickview">
                                                            <a class="btn-quickview modal-view" href="#" data-toggle="modal" data-target="#productModal">
                                                                <i class="fa fa-search-plus"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="link-wishlist" href="wishlist.php">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                        </li>                                                                                                                   <li>
                                                            <a class="link-compare" href="#">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </li>                                           
                                                    </ul>
                                                </div>

                                              <?php
                                               }
                                            ?>
                                           
                                            </div>
                                            <h2 class="single-product-name"><a href="#">Fusce aliquam</a></h2>
                                            <div class="price-box">
                                                <p class="old-price">
                                                    <span class="price">$999.00</span>
                                                </p>
                                                <p class="special-price">
                                                    <span class="price">$767.00</span>
                                                </p> 											
                                            </div>
                                        </div>
                                    </div>
                                    




                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane active shop-list" id="list">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-product-item">
                                            <div class="row"> 
                                                <div class="col-lg-3 col-md-4">
                                                    <div class="single-product clearfix">
                                                        <a href="#">
                                                            <span class="product-image">
                                                                <img src="img/product/13.jpg" alt="">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>   
                                                <div class="col-lg-9 col-md-8"> 
                                                    <h2 class="single-product-name"><a href="#">Primis in faucibus</a></h2>
                                                    <div class="description">
												        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. 									                        <a class="learn-more" href="#">Learn More</a>
                                                    </p>
									                </div>
                                                    <div class="price-box">
                                                        <p class="special-price">
                                                            <span class="price">$234.00</span>
                                                        </p> 											
                                                    </div>
                                                    <div class="button-actions clearfix">	
                                                        <button class="button add-to-cart" type="button">
                                                            <span><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="wishlist.html">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>																													<li>
                                                                <a class="link-compare" href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>										    
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-product-item">
                                            <div class="row"> 
                                                <div class="col-lg-3 col-md-4">
                                                    <div class="single-product clearfix">
                                                        <a href="#">
                                                            <span class="product-image">
                                                                <img src="img/product/20.jpg" alt="">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>   
                                                <div class="col-lg-9 col-md-8"> 
                                                    <h2 class="single-product-name"><a href="#">Cras neque metus</a></h2>
                                                    <div class="description">
												        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. 									                        <a class="learn-more" href="#">Learn More</a>
                                                    </p>
									                </div>
                                                    <div class="price-box">
                                                        <p class="old-price">
                                                            <span class="price">$555.00</span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price">$355.00</span>
                                                        </p> 											
                                                    </div>
                                                    <div class="button-actions clearfix">	
                                                        <button class="button add-to-cart" type="button">
                                                            <span><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="wishlist.html">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>																													<li>
                                                                <a class="link-compare" href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>										    
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-product-item">
                                            <div class="row"> 
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="single-product clearfix">
                                                        <a href="#">
                                                            <span class="product-image">
                                                                <img src="img/product/4.jpg" alt="">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>   
                                                <div class="col-md-9 col-sm-8"> 
                                                    <h2 class="single-product-name"><a href="#">Accumsan elit </a></h2>
                                                    <div class="description">
												        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. 									                        <a class="learn-more" href="#">Learn More</a>
                                                    </p>
									                </div>
                                                    <div class="price-box">
                                                        <p class="old-price">
                                                            <span class="price">$900.00</span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price">$890.00</span>
                                                        </p> 											
                                                    </div>
                                                    <div class="button-actions clearfix">	
                                                        <button class="button add-to-cart" type="button">
                                                            <span><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="wishlist.html">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>																													<li>
                                                                <a class="link-compare" href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>										    
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-product-item">
                                            <div class="row"> 
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="single-product clearfix">
                                                        <a href="#">
                                                            <span class="product-image">
                                                                <img src="img/product/7.jpg" alt="">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>   
                                                <div class="col-md-9 col-sm-8"> 
                                                    <h2 class="single-product-name"><a href="#">Primis in faucibus</a></h2>
                                                    <div class="description">
												        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. 									                        <a class="learn-more" href="#">Learn More</a>
                                                    </p>
									                </div>
                                                    <div class="price-box">
                                                        <p class="special-price">
                                                            <span class="price">$300.00</span>
                                                        </p> 											
                                                    </div>
                                                    <div class="button-actions clearfix">	
                                                        <button class="button add-to-cart" type="button">
                                                            <span><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="wishlist.html">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>																													<li>
                                                                <a class="link-compare" href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>										    
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-product-item">
                                            <div class="row"> 
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="single-product clearfix">
                                                        <a href="#">
                                                            <span class="product-image">
                                                                <img src="img/product/14.jpg" alt="">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>   
                                                <div class="col-md-9 col-sm-8"> 
                                                    <h2 class="single-product-name"><a href="#">occaecati cupiditate</a></h2>
                                                    <div class="description">
												        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. 									                        <a class="learn-more" href="#">Learn More</a>
                                                    </p>
									                </div>
                                                    <div class="price-box">
                                                        <p class="old-price">
                                                            <span class="price">$200.00</span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price">$190.00</span>
                                                        </p> 											
                                                    </div>
                                                    <div class="button-actions clearfix">	
                                                        <button class="button add-to-cart" type="button">
                                                            <span><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="wishlist.html">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>																													<li>
                                                                <a class="link-compare" href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </li>										    
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-content">
                                    <div class="pagination-button">
                                        <ul class="pagination">
                                            <li class="current"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                        </ul>
                                        <span><strong>Page: </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--End of Shop Main Area-->
        <!--Brand Area Strat-->
        <?php include'common/footer.php';?>
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

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:43 GMT -->
</html>