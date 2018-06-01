<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Order Now | Dashboard Karyawan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url ('assets2/');?>css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url ('assets2/');?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url ('assets2/');?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url ('assets2/');?>css/font.css" type="text/css"/>
<link href="<?php echo base_url ('assets2/');?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url ('assets2/');?>js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        ORDER NOW
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
      <ul class="nav top-menu">
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url ('assets2/');?>images/2.png">
                <span class="username"><?php echo $this->session->userdata('nama'); ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo base_url ('index.php/web/logout')?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo base_url ('index.php/dashboard/index')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
               <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Menu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url ('index.php/dashboard/makanan');?>">Makanan</a></li>
                        <li><a href="<?php echo base_url ('index.php/dashboard/minuman');?>">Minuman</a></li>
                        <li><a href="<?php echo base_url ('index.php/dashboard/sayuran');?>">Sayuran</a></li>
                        <li><a href="<?php echo base_url ('index.php/dashboard/jus');?>">Jus</a></li>
                        <li><a href="<?php echo base_url ('index.php/dashboard/seafood');?>">Seafood</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="<?php echo base_url ('index.php/dashboard/datameja')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Meja</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url ('index.php/dashboard/lihatpesanan')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Data pesanan</span>
                    </a>
                </li>
                
            </ul>            
		</div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Data Meja
    </div>
    
	<div class="container">
		 		<form method="post">
							<table class = "tabel">
									<tr>
									  <td id="meja-1" class="tablemeja" name="tabel1"> M01</td>
									  <td id="meja-2" class="tablemeja" name="tabel2"> M02</td>
									  <td id="meja-3" class="tablemeja" name="tabel3"> M03</td>
									  <td id="meja-4" class="tablemeja" name="tabel4"> M04</td>
									  <td id="meja-5" class="tablemeja" name="tabel5"> M05</td>
									</tr>
									<tr>
									  <td id="meja-6" class="tablemeja" name="tabel6"> M06</td>
									  <td id="meja-7" class="tablemeja" name="tabel7"> M07</td>
									  <td id="meja-8" class="tablemeja" name="tabel8"> M08</td>
									  <td id="meja-9" class="tablemeja" name="tabel9"> M09</td>
									  <td id="meja-10" class="tablemeja" name="tabel10"> M10</td>
									</tr>

									<tr>
									  <td id="meja-11" class="tablemeja" name="tabel11"> M11</td>
									  <td id="meja-12" class="tablemeja" name="tabel12"> M12</td>
									  <td id="meja-13" class="tablemeja" name="tabel13"> M13</td>
									  <td id="meja-14" class="tablemeja" name="tabel14"> M14</td>
									  <td id="meja-15" class="tablemeja" name="tabel15"> M15</td>
									</tr>
									<tr>
									  <td id="meja-16" class="tablemeja" name="tabel16"> M16</td>
									  <td id="meja-17" class="tablemeja" name="tabel17"> M17</td>
									  <td id="meja-18" class="tablemeja" name="tabel18"> M18</td>
									  <td id="meja-19" class="tablemeja" name="tabel19"> M19</td>
									  <td id="meja-20" class="tablemeja" name="tabel20"> M20</td>
									</tr>
								</table>
      
</section>

<!--main content end-->
</section>
<script src="<?php echo base_url ('assets2/');?>js/bootstrap.js"></script>
<script src="<?php echo base_url ('assets2/');?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url ('assets2/');?>js/scripts.js"></script>
<script src="<?php echo base_url ('assets2/');?>js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url ('assets2/');?>js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url ('assets2/');?>js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url ('assets2/');?>js/jquery.scrollTo.js"></script>
<script src="<?php echo base_url ('assets2/'); ?>js/dashboard.js"></script>
</body>
</html>