<?php 
session_start();
if (!isset($_SESSION['userid']))
 {
    header('location:index.php');
}
include 'common/connection.php';
$ide= $_SESSION['userid'];
$carti =$obj->query("select * from cart where customer_id='$ide' "); 
$exe = $obj->query("select * from customer where id='$ide'");
$cst=$exe->fetch_object();


if (isset($_POST['submit'])) 
{
    
    // order generate
    $order_date  = date("Y-m-d");
    $customer_id = $_SESSION['userid'];
    $total       = $_POST['total'];
    $obj->query("insert into orders(date,customer_id,total_amount) values ('$order_date','$ide','$total')");
    $order_id = $obj->insert_id;   // last inserted id(order id)

    $_SESSION['order_id'] = $order_id;
    $_SESSION['price'] = $total;


    // order items insert
    $cart_info_object =$obj->query("select * from cart where customer_id='$ide' "); 

    while ($result1=$cart_info_object->fetch_object())
    {
        $p1 = $obj->query("select * from product where id='$result1->product_id'");
        $product_details = $p1->fetch_object();
        $pname = $product_details->pname;
        $pimage = $product_details->img;
        

        $amount = $result1->price * $result1->qty;

        $obj->query("INSERT INTO `order_items`(`product_id`, `quantity`, `order_id`, `pname`, `price`, `image`) VALUES ('$result1->product_id','$result1->qty','$order_id','$pname','$result1->price','$pimage')");

    }
        


    $shipaddress=$_POST['shipping_address'];
   if ($shipaddress == 'new-address')
   {
        //for new billing address----------
        $bfname=$_POST['ufname'];
        $blname=$_POST['ulname'];
        $bemail=$_POST['uemail'];
        $baddress=$_POST['uaddress'];
        $bcity=$_POST['ucity'];
        $bstate=$_POST['ustate'];
        $bcountry=$_POST['ucountry'];
       
     }
     else
    {
        $bfname = $cst->fname;
        $blname = $cst->lname;
        $bemail =  $cst->email;
        $baddress= $cst->address;
        $bcity= $cst->city;
        $bstate= $cst->state;
        $bcountry=$cst->country;
        
    }


   

    $obj->query("insert into billingaddress(fname,lname,email,address,city,state,country,customer_id,order_id) values ('$bfname','$blname','$bemail','$baddress','$bcity','$bstate','$bcountry','$ide','$order_id')");
  


    //shipping address
    
    $fname=$_POST['sfname'];
    $lname=$_POST['slname'];
    $email=$_POST['semail'];
    $address=$_POST['saddress'];
    $city=$_POST['scity'];
    $state=$_POST['sstate'];
    $zip=$_POST['szip'];
    $country=$_POST['scountry'];
    

    $obj->query("insert into shipping_address(fname,lname,email,address,city,state,zip,country,customer_id,order_id) values ('$fname','$lname','$email','$address','$city','$state','$zip','$country','$ide','$order_id')");


    //payment_method
    $payment_method = $_POST['payment_method'];
    if($payment_method=='cod')
    {
       
        echo "<script>alert('Your Order has been Placed Successfully'); document.location='success.php';</script>";
    }
    else
    {
         header('location:payment.php');
    }
   
}
?>



<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:13 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Checkout || Grocery</title>
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
        <?php
         include 'common/header.php';
        ?>
        <!--End of Header Area-->
        <!--Checkout Area Start-->
        
        <div class="checkout-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h1>Checkout</h1>
                        </div>
                    </div>
                </div>
                <form method="post">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="accordion" id="accordionExample">
                           
                             <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>1</span> BILLING INFORMATION
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="login-form">
                                            <form action="#" method="post">
                                                <div class="customer-name">
                                                    <div class="first-name">
                                                        <p>First Name<span>*</span></p>
                                                        <input type="text"  id="fname" name="fname" value="<?php echo $cst->fname;?>">
                                                    </div>
                                                    <div class="last-name">
                                                        <p>Last Name<span>*</span></p>
                                                        <input type="text"  id="flname" name="flname" value="<?php echo $cst->lname;?>">
                                                    </div>
                                                </div>
                                                <div class="customer-info">
                                                    <div class="company-name">
                                                        <p>Company</p>
                                                        <input type="text">
                                                    </div>
                                                    <div class="email-address">
                                                        <p>Email Adress<span>*</span></p>
                                                        <input type="text"  id="email" name="email" value="<?php echo $cst->email;?>">
                                                    </div>
                                                </div>
                                                <p>Address<span>*</span></p>
                                                <input type="text"  id="address" name="address" value="<?php echo $cst->address;?>">
                                                
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>City<span>*</span></p>
                                                        <input type="text"  id="city" name="city" value="<?php echo $cst->city;?>">
                                                    </div>
                                                    <div class="state">
                                                        <p>State/Province</p>
                                                        <input type="text"  id="state" name="state" value="<?php echo $cst->state;?>">
                                                    </div>
                                                </div>
                                                <div class="city-country">
                                                    
                                                    <div class="state">
                                                        <p>Country<span>*</span></p>
                                                        <input type="text" required id="country" name="country" value="<?php echo $cst->country;?>">
                                                    </div>
                                                </div>
                                                
                                                <div class="ship-wrap">
                                                    <div class="ship-address">
                                                        <label>
                                                            <input type="radio" name="shipping_address" value="old-address" checked="checked">Ship to this address
                                                        </label>    
                                                    </div>
                                                     <div  class="ship-address">
                                                       <label>
                                                            <input type="radio" name="shipping_address" value="new-address" id="ship-new-address">Ship to different address
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ship-new-address-info">
                                                    <div class="customer-name">
                                                        <div class="first-name">
                                                        <p>First Name<span>*</span></p>
                                                        <input type="text" rid="ufname" name="ufname" >
                                                    </div>
                                                    <div class="last-name">
                                                        <p>Last Name<span>*</span></p>
                                                        <input type="text"  id="ulname" name="ulname" >
                                                    </div>
                                                </div>
                                                <div class="customer-info">
                                                    <div class="company-name">
                                                        <p>Company</p>
                                                        <input type="text">
                                                    </div>
                                                    <div class="email-address">
                                                        <p>Email Adress<span>*</span></p>
                                                        <input type="text"  id="uemail" name="uemail" >
                                                    </div>
                                                </div>
                                                <p>Address<span>*</span></p>
                                                <input type="text"  id="uaddress" name="uaddress" >
                                                
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>City<span>*</span></p>
                                                        <input type="text" id="ucity" name="ucity" >
                                                    </div>
                                                    <div class="state">
                                                        <p>State/Province</p>
                                                        <input type="text"id="ustate" name="ustate" >
                                                    </div>
                                                </div>
                                                <div class="city-country">
                                                   
                                                    <div class="state">
                                                        <p>Country<span>*</span></p>
                                                        <input type="text"  id="ucountry" name="ucountry" >
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="buttons-set">
                                                    <!-- <button class="button" type="button"><span>Continue</span></button> -->
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>2</span> SHIPPING INFORMATION
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="login-form">
                                               <div class="customer-name">
                                                    <div class="first-name">
                                                        <p>First Name<span>*</span></p>
                                                        <input type="text" required name="sfname" id="sfname" value="">
                                                    </div>
                                                    <div class="last-name">
                                                        <p>Last Name<span>*</span></p>
                                                        <input type="text" required name="slname" id="slname" value="">
                                                    </div>
                                                </div>
                                                <div class="customer-info">
                                                    
                                                    <div class="email-address">
                                                        <p>Email Adress<span>*</span></p>
                                                        <input type="email" required name="semail" id="semail">
                                                    </div>
                                                </div>
                                                <p>Address<span>*</span></p>
                                                <input type="text" required name="saddress" id="saddress">
                                               
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>City<span>*</span></p>
                                                        <input type="text" required name="scity" id="scity"> 
                                                    </div>
                                                    <div class="state">
                                                        <p>State/Province</p>
                                                        <input type="text" name="sstate" id="sstate">
                                                    </div>
                                                </div>
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>Zip/Postal Code<span>*</span></p>
                                                        <input type="text" required name="szip" id="szip">
                                                    </div>
                                                    <div class="state">
                                                        <p>Country<span>*</span></p>
                                                        <select id="scountry" name="scountry">
                                                            <option value="">- -Select Country- -</option>
                                                            <option value="IN">India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>3</span> SHIPPING Method
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="ship-method">
                                            <p>Flat Rate</p>
                                            <p>Fixed <span>$10.00</span></p>
                                            <div class="buttons-set">
                                                <p class="back-link"><a href="#">Back</a></p>
                                                <!-- <button type="button" class="button"><span>Continue</span></button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span>4</span> PAYMENT INFORMATION
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="ship-method payment">
                                            <div class="ship-wrap">
                                                <div class="ship-address">
                                                    <input type="radio" name="payment_method" id="cash" value="cod">
                                                    <span>Cash On Delivery</span>
                                                </div>
                                                 <div class="ship-address">
                                                    <input type="radio" name="payment_method" id="online" value="online">
                                                    <span>Credit Card (saved) </span>
                                                </div>
                                            </div>
                                            <div class="buttons-set">
                                                <p class="back-link"><a href="#">Back</a></p>
                                                <!-- <button type="button" class="button"><span>Continue</span></button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h4 class="card-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <span>5</span> ORDER REVIEW
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                      
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
                                                while ($result=$carti->fetch_object())
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
                                                 </form>
                                            </div>
                                        
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
        <?php
        include 'common/footer.php';
        ?>
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