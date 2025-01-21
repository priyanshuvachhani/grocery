<?php
session_start();
include 'common/connection.php';
if (!isset($_SESSION['userid']))
 {
    header('location:index.php');
}
$id= $_SESSION['userid'];
$car=$obj->query("select * from cart where customer_id='$id'");
?>


<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cart || Grocery</title>
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
      <?php echo include'common/header.php'?>
        <!--End of Header Area-->
        <!--Cart Main Area Start-->
        <div class="cart-main-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="cart-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="p-image">Product Image</th>
                                            <th class="p-name">Product Name</th>
                                            <th class="p-amount">Unit Price</th>
                                            <th class="p-quantity">Qty</th>
                                            <th class="p-total">SubTotal</th>
                                            <th class="p-times"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     <?php
                                       $total = 0;
                                        while($result=$car->fetch_object())
                                       {
                                          $x =$obj->query("select * from product where id='$result->product_id'");
                                          $xx =$x->fetch_object();

                                          $amount = $result->price * $result->qty;

                                          $total = $total + $amount;
                                         ?>
                                        <tr>
                                            <td class="p-image">
                                                <a href="product-details.php?delid=<?php echo "$result->product_id"?>">
                                              <img  class="floatleft" src="../Admin/img/Product/<?php echo "$xx->img" ?>"></a>
                                            </td>
                                            <td class="p-name"><a href="product-details.php?delid=<?php echo "$result->product_id"?>"><?php echo "$xx->pname";?></a></td>
                                         

                                         <td class="p-amount"><?php echo "$result->price";?></td>
                                         <td class="p-quantity ">
                                        <input maxlength="12" type="text" value="<?php echo $result->qty;?>" name="quantity" id="quantity" onchange="return updateQuantity(this.value, <?php echo $result->product_id ?>)"></td>

                                        <td class="p-total"><?php echo $amount; ?> Rs</td>
                                        <td class="p-action"><a href="delcart.php?dcid=<?php echo "$result->cart_id"?>"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <?php
                                         }
                                        ?>
                                    </tbody>
                                </table>

                                <div class="all-cart-buttons">
                                    <a href="shop-grid.php">
                                    <button class="button" type="button"><span>Continue Shopping</span></button></a>
                                    <div class="floatright">
                                         <a href="action.php" onclick="return confirm('Aru you Sure to clear your cart.')" class="button clear-cart">
                                        <button class="button clear-cart" type="button"><span>Clear Shopping Cart</span></button>
                                        </a>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                               
                                <div class="col-lg-12">
                                    <div class="amount-totals">
                                        <p class="total">Subtotal <span><?php echo $total ;?> Rs</span></p>
                                        <p class="total">Grandtotal <span><?php echo $total ;?> Rs</span></p>
                                       <a href="checkout1.php"> <button class="button" type="button"><span>Procced to checkout</span></button></a>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Cart Main Area-->        
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


        <script type="text/javascript">
            function updateQuantity(quantity, pid)
            {
                $.ajax({

                    type:"POST",
                    url:'update_quantity.php',
                    data : { quantity : quantity, product_id : pid },
                    success:function(result)
                    {
                        document.location='cart.php';
                    }
                });
            }
        </script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:13 GMT -->
</html>