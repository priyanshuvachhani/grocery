<?php 
session_start();
if (!isset($_SESSION['userid']))
 {
    header('location:index.php');
}
include 'common/connection.php';

$ide= $_SESSION['userid'];
$exe =$obj->query("select * from cart where customer_id='$ide' "); 


$shipping_object = $obj->query("select * from shipping_address where customer_id = '$ide' order by ship_id desc limit 1");
$rowcount = $shipping_object->num_rows;
if($rowcount==1)
{
    $shipping_details = $shipping_object->fetch_object();
}


if (isset($_POST['submit'])) 
{
    $total=$_POST['total'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $country=$_POST['country'];

    
    $e=$obj->query("insert into shipping_address(fname,lname,email,address,city,state,zip,country,customer_id) values ('$fname','$lname','$email','$address','$city','$state','$zip','$country','$ide')");

    $e =$obj->query("insert into orders(customer_id,total_amount) values ('$ide','$total')");

   
    if ($e)
    {
            header('location:payment.php');
    }
    else
    {
        echo "<script>alert('error')</script>";
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
        <!--Checkout Area Start-->
        <div class="checkout-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h1>Checkout</h1>
                            <p>Date: <span id="datetime" name="datetime"></span></p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="accordion" id="accordionExample">
                            
                            
                          



                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <span>1</span> Shipping Address & Review Cart
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <form method="post">
                                           <div class="login-form">
                                           
                                                <div class="customer-name">
                                                    <div class="first-name">
                                                        <p>First Name<span>*</span></p>
                                                        <input type="text" required name="fname" id="fname" value="<?php if(isset($shipping_details->fname)) echo $shipping_details->fname ;?>">
                                                    </div>
                                                    <div class="last-name">
                                                        <p>Last Name<span>*</span></p>
                                                        <input type="text" required name="lname" id="lname" value="<?php if(isset($shipping_details->lname)) echo $shipping_details->lname ;?>">
                                                    </div>
                                                </div>
                                                <div class="customer-info">
                                                    
                                                    <div class="email-address">
                                                        <p>Email Adress<span>*</span></p>
                                                        <input type="email" required name="email" id="email">
                                                    </div>
                                                </div>
                                                <p>Address<span>*</span></p>
                                                <input type="text" required name="address" id="address">
                                               
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>City<span>*</span></p>
                                                        <input type="text" required name="city" id="city"> 
                                                    </div>
                                                    <div class="state">
                                                        <p>State/Province</p>
                                                        <input type="text" name="state" id="state">
                                                    </div>
                                                </div>
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>Zip/Postal Code<span>*</span></p>
                                                        <input type="text" required name="zip" id="zip">
                                                    </div>
                                                    <div class="state">
                                                        <p>Country<span>*</span></p>
                                                        <select id="country" name="country">
                                                            <option value="">- -Select Country- -</option>
                                                            <option value="IN">India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 </div>
                                    
                                <hr><hr>

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
                                            <?php
                                            $total=0;
                                                while ($result=$exe->fetch_object())
                                                 {
                                             $p= $obj->query("select * from product where id='$result->product_id'");
                                             $p_name=$p->fetch_object();
                                             $amount = $result->price * $result->qty;
                                             $total = $total + $amount;

                                                ?>
                                                        <tr>
                                                            <td class="p-name"><?php echo $p_name->pname;?></td>
                                                            <td class="p-amount"><span class="amount"><?php echo $p_name->price;?></span></td>
                                                            <td class="p-quantity"><?php echo $result->qty;?></td>
                                                            <td class="p-total alignright"><?php echo $amount; ?> Rs</td>
                                                        </tr>
                                                         <?php } 

                                                ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3" class="alignright">Subtotal</td>
                                                            <td class="floatright"><?php echo $total ;?>
                                                                <input type="hidden" name="total" id="total" value="<?php echo $total ;?>">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="3" class="alignright"><strong>Grand Total</strong></td>
                                                            <td class=" alignright"><strong><?php echo $total ;?></strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="checkout-buttons">
                                         <p class="floatleft">Forgot an Item? <a href="#">Edit Your Cart</a>
</p>
                                                    <button type="submit" id="submit" name="submit" class="button floatright"><span>Place Order</span></button>
                                                    
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
                                
                                <li><a href="checkout.php"><i class="fa fa-angle-right"></i>Shipping address</a></li>
                               
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
        <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:14 GMT -->
</html>