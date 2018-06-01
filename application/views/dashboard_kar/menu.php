<!DOCTYPE html>
<head>
<title>ORDER NOW | Dashboard Karyawan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url ('assets2/'); ?>css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url ('assets2/'); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url ('assets2/'); ?>css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url ('assets2/'); ?>css/font.css" type="text/css"/>
<link href="<?php echo base_url ('assets2/'); ?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url ('assets2/'); ?>js/jquery2.0.3.min.js"></script>
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
       
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
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
                <img alt="" src="<?php echo base_url ('assets2/'); ?>images/2.png">
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

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
						<li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>

            </ul>            </div>
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
					Data Pemesanan <?php echo $jenis_menu; ?>
				</div>
				<div class="box-container">
					<a href="#addMenu" class="btn btn-success btn-info pull-right" data-toggle="modal">
						Tambah Data
					</a>
				</div>
			</div>
		</div>
	</section>
</section>
</section>
</body>
</html>