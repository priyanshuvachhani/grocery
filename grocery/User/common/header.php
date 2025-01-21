-


<header>
            <div class="header-top">
                <div class="container">
                    <div class="header-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <div class="header-contact">
                                    <span class="email">Email: Info.james2020@gmail.com.com </span> / <span class="phone">Phone: +91 9081887778</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5">
                                <div class="currency-language">
                                    
                                    
                                    <div class="account-menu">
                                        <ul>
                                            <li><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                                <ul class="account-dropdown">
                                                    <?php if(!isset($_SESSION['userid']))
                                                    {
                                                    ?>
                                                    <li><a href="login.php">Log In</a></li>
                                                <?php }?>
                                            <?php  if (isset($_SESSION['userid']))
                                                    {
                                                        ?>
                                                        <li><a href="cart.php">My Cart</a></li>
                                                    <li><a href="myorder.php">My Order</a></li>
                                                   
                                                    <li><a href="checkout1.php">Checkout</a></li>
                                                    <li><a href="updateprofile.php">Update Profile</a></li>
                                                    <li><a href="changepassword.php">Change Password</a></li>
                                                    <li><a href="logout.php">Log out</a></li>
                                                        <?php                                                        
                                                    } ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo/q.jpeg" width="150" height="150" alt="MOZAR"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div id="search-category">
                                    <form class="search-box" action="#" method="post">
                                        <div class="search-categories">
                                            <div class="search-cat">
                                                <select class="category-items " name="category">
                                                    <option>All Categories</option>
                                                    <option>Women</option>
                                                    <option>Men</option>
                                                    <option>Jewllery</option>
                                                    <option>Bootees Bags</option>
                                                    <option>Clothing</option>
                                                    <option>Footwear</option>
                                                    <option>T-Shirts</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="search" placeholder="Search here..." id="text-search" name="search">
                                        <button id="btn-search-category" type="submit">
                                            <i class="icon-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <ul class="header-r-cart">
                                    <li><a class="cart" href="cart.php">My Cart</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!--Mainmenu Start-->
            <div class="mainmenu-area d-lg-block d-none">
                <div id="sticker"> 
                    <div class="container">
                        <div class="row">   
                            <div class="col-xl-12 col-lg-12 d-xl-block d-lg-block d-none">
                                <div class="mainmenu">
                                    <nav>
                                        <ul id="nav">
                                            <li class="current"><a href="index.php">Home</a> </li>
                                            <li><a href="aboutus.php">About Us</a></li>
                                           

                                              <li><a href="shop-grid.php">Products</a>
                                                <div class="megamenu">
                                                    <div class="megamenu-list clearfix">
                                                        <?php 
                                                         $obj = new mysqli("localhost","root","","grocery");
                                                         $cat=$obj->query("select * from category");
                                                        ?>
                                                        <?php 
                                                            while($results=$cat->fetch_object())
                                                            {
                                                        ?>
                                                        <span>                                          
                                                            <a class="mega-title" href="category.php?catid=<?php echo "$results->id"?>"><?php echo $results->cname;?></a>
                                                            
                                                            <?php
                                                                $sub = $obj->query("select * from subcategory where c='$results->id'");
                                                                while ($subc = $sub->fetch_object())
                                                                {
                                                            ?>
                                                            <a href="subcategory.php?subcatid=<?php echo "$subc->id"?>"><?php echo "$subc->sc"; ?></a>
                                                            <?php } ?>
                                                        </span>
                                                    <?php } ?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                            
                                          
                                            <li><a href="customerregistration.php">Registration</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="feedback.php">Inquries</a></li>
                                        </ul>
                                    </nav>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            <!--End of Mainmenu-->
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.php">HOME</a>
                                            
                                        </li>
                                        <li><a href="index.php">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#" class="mega-title">Other Pages</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="blog.html">Blog Page</a></li>
                                                    <li><a href="blog-details.html">Blog Details Page</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="shop-grid.php">Shop Grid</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                        <li><a href="index.php">Categories</a>
                                            <?php 
                                            $obj = new mysqli("localhost","root","","grocery");
                                            $cat=$obj->query("select * from category");
                                            ?>
                                                <ul class="sub-menu">
                                                    <li><a href="#" class="mega-title">Other Pages</a></li>
                                                    <?php 
                                                    while($results=$cat->fetch_object())
                                                    {
                                                        ?>
                                                   <li><a href="category.php?catid=<?php echo "$results->id"?>"><?php echo $results->cname;?></a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                    
                                                </ul>
                                            </li>
                                         <li><a href="customerregistration.php">Registration</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="feedback.php">Feed Back</a></li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->
        </header>