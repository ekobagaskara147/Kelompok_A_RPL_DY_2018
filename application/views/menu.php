<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">    
		<title>Order Now: Sekarang pemesanan di tempat jadi lebih mudah! </title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url('assets/');?>img/favicon.ico" type="image/x-icon">

		<!-- Font awesome -->
		<link href="<?php echo base_url('assets/');?>css/font-awesome.css" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="<?php echo base_url('assets/');?>css/bootstrap.css" rel="stylesheet">   
		<!-- Slick slider -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/slick.css">    
		<!-- Date Picker -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/bootstrap-datepicker.css">   
		 <!-- Gallery Lightbox -->
		<link href="<?php echo base_url('assets/');?>css/magnific-popup.css" rel="stylesheet"> 
		<!-- Theme color -->
		<link id="switcher" href="<?php echo base_url('assets/');?>css/theme-color/default-theme.css" rel="stylesheet">     

		<!-- Main style sheet -->
		<link href="<?php echo base_url('assets/');?>css/style.css" rel="stylesheet">    

		<!-- Google Fonts -->

		<!-- Prata for body  -->
		<link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
		<!-- Tangerine for small title -->
		<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
		<!-- Open Sans for title -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<!--START SCROLL TOP BUTTON -->
		<a class="scrollToTop" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
		<!-- END SCROLL TOP BUTTON -->

		<!-- Start header section -->
		<header id="mu-header">  
			<nav class="navbar navbar-default mu-main-navbar" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- LOGO -->       

						<!--  Text based logo  -->
						<a class="navbar-brand" href="<?php echo base_url('index.php/web/dashboardpelanggan');?>">Order<span>Now</span></a> 

						<!--  Image based logo  -->
						<!-- <a class="navbar-brand" href="index.html"><img src="<?php// echo base_url('assets/');?>img/logo.png" alt="Logo img"></a>  -->
					</div>
					
					<div id="navbar" class="navbar-collapse collapse">
						<ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
							<li><a href="<?php echo base_url('index.php/web/dashboardpelanggan');?>">HOME</a></li>
							<li><a href="<?php echo base_url('index.php/web/menu');?>">MENU</a></li>
							<li><a href="<?php echo base_url('index.php/web/dashboardpelanggan');?>#mu-about-us">ABOUT US</a></li>                                                         
							<li><a href="#mu-gallery">GALLERY</a></li>
							<li><a href="#mu-contact">CONTACT</a></li> 
							<li><a href="<?php echo base_url('index.php/web/home');?>">LOGOUT</a></li> 
						</ul>                            
					</div><!--/.nav-collapse -->       
				</div>          
			</nav> 
		</header>
		<!-- End header section -->
 
		<!-- Start Restaurant Menu -->
		<section id="mu-restaurant-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-restaurant-menu-area">
							<div id="popup">
								<div class="window">
									<a href="#" class="close-button" title="Close">X</a>
									<h1>Pesanan Anda</h1>
									
									<form method="POST" action="" >
									<div class="panel panel-default pre-scrollable">
										<div class="panel-body">
											<table class="table">
												<thead>
													<th width="70%">Item</td>
													<th width="10%">Harga</td> 
													<th width="5%">Qty</td>
													<th width="10%">Total</td>
													<th width="5%"></td>
												</thead>
												<tbody id="cart-table">
												</tbody>
											</table>
									
											<table class="table">
												<tr>
													<td width="85%">Total</td>
													<td width="15%" id="all-total">0</td>
												</tr>
											</table>
										</div>
									</div>

									<button class="button" onclick="myFunction()">
										<a>Checkout</a>	
									</button>
									
									<script>
										function myFunction() {
    										alert("Pesanan anda sedang diproses!");
										}
									</script>
									</form>
								</div>
							</div>

							<div class="mu-title">
								<span class="mu-subtitle">Discover</span>
								<h2>OUR MENU</h2>
							</div>
            
							<div class="mu-restaurant-menu-content">
								<ul class="nav nav-tabs mu-restaurant-menu">
									<li class="active"><a href="#Makanan" data-toggle="tab">Makanan</a></li>
									<li><a href="#Seafood" data-toggle="tab">Seafood</a></li>
									<li><a href="#Sayuran" data-toggle="tab">Sayuran</a></li>
									<li><a href="#Jus" data-toggle="tab">Jus</a></li>
									<li><a href="#Minuman" data-toggle="tab">Minuman</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="Makanan">
										<div class="mu-tab-content-area">
											<div class="row">
												<div class="col-md-6">
													<div class="mu-tab-content-left">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	
																	foreach($items_makanan as $item){
																		if ($x % 2 == 0){
																?>
								  
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_makanan; ?></" harga="<?php echo $item->harga_makanan; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
															</li>
														</ul>
													</div>
												</div>

												<div class="col-md-6">
													<div class="mu-tab-content-right">
														<ul class="mu-menu-item-nav">
															<li> 
																<?php
																	$x = 0;
																	foreach($items_makanan as $item){
																		if ($x % 2 == 1){
																?>
																
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_makanan; ?></" harga="<?php echo $item->harga_makanan; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
															</li>
														</ul>   
													</div>
												</div>
											</div>
										</div>
									</div>
								
									<div class="tab-pane fade" id="Seafood">
										<div class="mu-tab-content-area">
											<div class="row">
												<div class="col-md-6">
													<div class="mu-tab-content-left">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_seafood as $item){
																		if ($x % 2 == 0){
																?>
														
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_menu; ?></" harga="<?php echo $item->harga_menu; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
															</li>
														</ul>   
													</div>
												</div>

												<div class="col-md-6">
													<div class="mu-tab-content-right">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_seafood as $item){
																		if ($x % 2 == 1){
																?>
																
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_menu; ?></" harga="<?php echo $item->harga_menu; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
													  
															</li>
														</ul>   
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="Sayuran">
										<div class="mu-tab-content-area">
											<div class="row">
												<div class="col-md-6">
													<div class="mu-tab-content-left">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_sayuran as $item){
																		if ($x % 2 == 0){
																?>
														
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_sayuran; ?></" harga="<?php echo $item->harga_sayuran; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
															</li>
														</ul>   
													</div>
												</div>

												<div class="col-md-6">
													<div class="mu-tab-content-right">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_sayuran as $item){
																		if ($x % 2 == 1){
																?>
																
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_sayuran; ?></" harga="<?php echo $item->harga_sayuran; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
													  
															</li>
														</ul>   
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="Jus">
										<div class="mu-tab-content-area">
											<div class="row">
												<div class="col-md-6">
													<div class="mu-tab-content-left">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_jus as $item){
																		if ($x % 2 == 0){
																?>
														
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_jus; ?></" harga="<?php echo $item->harga_jus; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
															</li>
														</ul>   
													</div>
												</div>

												<div class="col-md-6">
													<div class="mu-tab-content-right">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_jus as $item){
																		if ($x % 2 == 1){
																?>
																
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_jus; ?></" harga="<?php echo $item->harga_jus; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
													  
															</li>
														</ul>   
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="Minuman">
										<div class="mu-tab-content-area">
											<div class="row">
												<div class="col-md-6">
													<div class="mu-tab-content-left">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_minuman as $item){
																		if ($x % 2 == 0){
																?>
														
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_minuman; ?></" harga="<?php echo $item->harga_minuman; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
															</li>
														</ul>   
													</div>
												</div>

												<div class="col-md-6">
													<div class="mu-tab-content-right">
														<ul class="mu-menu-item-nav">
															<li>
																<?php
																	$x = 0;
																	foreach($items_minuman as $item){
																		if ($x % 2 == 1){
																?>
																
																<div class="media">
																	<div class="media-body">
																		<div style="float:left;">
																			<h4 class="media-heading"><a href="#"><?php echo $item->nama_menu; ?></a></h4>
																			<span class="mu-menu-price"><?php echo $item->harga_menu; ?></span>
																		</div>
																		
																		<div class="button style-button-pesan" idItem="<?php echo $item->id_menu; ?>" namaItem="<?php echo $item->nama_minuman; ?></" harga="<?php echo $item->harga_minuman; ?>">
																			<ul>
																				<a href="#popup">Pesan</a>
																			</ul>
																		</div>
																	</div>
																</div>
																	<?php
																		}
																		$x++;
																	}
																	?>
													  
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
					</div>
				</div>
			</div>
		</section>
		<!-- End Restaurant Menu -->

		<!-- Start Gallery -->
		<section id="mu-gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-gallery-area">
							<div class="mu-title">
								<span class="mu-subtitle">Discover</span>
								<h2>Our Gallery</h2>
							</div>

							<div class="mu-gallery-content">
								<!-- Start gallery image -->
								<div class="mu-gallery-body">
									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/1.png">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/1.png">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/2.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/2.jpg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>               
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/3.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/3.jpg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>               
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/4.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/4.jpg">
											
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/5.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/5.jpg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>               
									<!-- End single gallery image -->  

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/6.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/6.jpg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/7.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/7.jpg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>               
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/8.jpeg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/8.jpeg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>               
									<!-- End single gallery image -->

									<!-- start single gallery image -->
									<div class="mu-single-gallery col-md-4">                  
										<div class="mu-single-gallery-item">
											<figure class="mu-single-gallery-img">
												<a class="mu-imglink" href="<?php echo base_url('assets/');?>img/gallery/9.jpg">
													<img alt="img" src="<?php echo base_url('assets/');?>img/gallery/9.jpg">
													
													<div class="mu-single-gallery-info">
														<img class="mu-view-btn" src="<?php echo base_url('assets/');?>img/plus.png" alt="plus icon img">
													</div> 
												</a>
											</figure>            
										</div>
									</div>
									<!-- End single gallery image -->  

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Gallery -->
 

		<!-- Start Contact section -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
							<div class="mu-title">
								<span class="mu-subtitle">Get In Touch</span>
								<h2>Contact Us</h2>
							</div>

							<div class="mu-contact-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-contact-left">
											<div class="mu-contact-left">     
												<img src="<?php echo base_url('assets/');?>img/contact.png" alt="img">           
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="mu-contact-right">
											<div class="mu-contact-widget">
												<h3>Office Address</h3>
												<p>Kunjungi kami di:</p>
												
												<address>
													<p><i class="fa fa-phone"></i> +6281269052498</p>
													<p><i class="fa fa-envelope-o"></i>deliana@unsyiah.ac.id</p>
													<p><i class="fa fa-map-marker"></i>Jl. T.Nyak Arief, Laboratorium Terpadu Unsyiah, Darussalam, Banda Aceh, Aceh</p>
												</address>
											</div>
											
											<div class="mu-contact-widget">
												<h3>Open Hours</h3>                      
												<address>
													<p><span>Senin - Jumat</span> 9.00 WIB - 24.00 WIB</p>
													<p><span>Sabtu</span> 9.00 WIB - 24.00 WIB</p>
													<p><span>Minggu</span> 9.00 WIB - 24.00 WIB</p>
												</address>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact section -->

		<!-- Start Footer -->
		<footer id="mu-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-area">
							<div class="mu-footer-social">
								<a href="#"><span class="fa fa-facebook"></span></a>
								<a href="#"><span class="fa fa-twitter"></span></a>
								<a href="#"><span class="fa fa-google-plus"></span></a>
								<a href="#"><span class="fa fa-linkedin"></span></a>
								<a href="#"><span class="fa fa-youtube"></span></a>
							</div>
							
							<div class="mu-footer-copyright">
								<p>&copy; Copyright <a rel="nofollow" href="http://markups.io">OrderNow</a>. All right reserved.</p>
							</div>         
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->
  
		<!-- jQuery library -->
		<script src="<?php echo base_url('assets/');?>js/jquery.min.js"></script>  
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url('assets/');?>js/bootstrap.js"></script>   
		<!-- Slick slider -->
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/slick.js"></script>
		<!-- Counter -->
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/simple-animated-counter.js"></script>
		<!-- Gallery Lightbox -->
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/jquery.magnific-popup.min.js"></script>
		<!-- Date Picker -->
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/bootstrap-datepicker.js"></script> 
		<!-- Ajax contact form  -->
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/app.js"></script>
		 
		<!-- Custom js -->
		<script src="<?php echo base_url('assets/');?>js/custom.js"></script> 
		<script type="text/javascript" src="<?php echo base_url('assets/');?>js/cart.js"></script>
	</body>
	
</html>