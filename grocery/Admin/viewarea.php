<?php
$obj  =new mysqli("localhost","root","","grocery");
session_start();

if (!isset($_SESSION['userid']))
 {
    header('location:index.php');
}


$r =$obj->query("select * from area");


?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/tables-bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>grocery</title>

    <link rel="canonical" href="tables-bootstrap.html" />
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <link href="css/light.css" rel="stylesheet">
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="css/light.css" rel="stylesheet">
    <script src="js/settings.js"></script>
    <!-- END SETTINGS -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2120269,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        
<?php include'common/sidebar.php';?>
        <div class="main">
            <?php include'common/header.php';?>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">View City</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Area</h5>
                                    <h6 class="card-subtitle text-muted">Check CareFully </h6>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:25%;">ID</th>
                                            <th style="width:40%">State Name</th>
                                            <th style="width:40%">City Name</th>
                                            <th style="width:40%">Area Name</th>
                                            <th style="width:20%">Edit</th>
                                            <th style="width:20%">Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php
                                            while ($rw=$r->fetch_object())
                                             {
                                                $rrs = $obj->query("select * from state where s_id='$rw->s_id'");
                                               $ccc=$rrs->fetch_object();
                                               $rrss = $obj->query("select * from city where c_id='$rw->c_id'");
                                               $cccc=$rrss->fetch_object();
                                                ?><tr>
                                                <td><?php echo $rw->a_id ;?></td>
                                                <td><?php echo $ccc->s_name ;?></td>
                                                <td><?php echo $cccc->city ;?></td>
                                                <td><?php echo $rw->area_name ;?></td>
                                                 <td><a href="deletearea.php?delaid=<?php echo "$rw->a_id"?>">Delete</a></td>
                                                 <td><a href="updatearea.php?updaid=<?php echo "$rw->a_id"?>">Update</a></td>
                                                    </tr>
                                                <?php
                                            }
                                            ?>
                                            
                                    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
            </main>

            <?php include'common/footer.php';?>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/tables-bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:27 GMT -->
</html>