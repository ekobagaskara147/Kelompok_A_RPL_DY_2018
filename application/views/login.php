<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>

<html>

	<head>
		<title>Order Now: Sekarang pesan di tempat jadi lebih mudah!</title>
			<link href="<?php echo base_url('assets1/');?>css/style.css" rel='stylesheet' type='text/css' />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="Food Order Form Responsive, Login form web template, Sign up Web Templates,Profile widgets,Flat icon hover effects,Flat Registration Forms  Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
			<!-- //end-smoth-scrolling -->
			<link href='<?php echo base_url('assets1/');?>//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<h1>LOGIN</h1>
			<div class="message warning">
				<div class="inset agile">
					<div class="sap_tabs w3ls-tabs">
						<h2>Login sebagai:</h2>
						
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Pengunjung</span></li> 
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Karyawan</span></li>
							</ul>	
							
							<div class="clear"> </div>
								<div class="alert-close"> </div> 
									<div class="resp-tabs-container">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="login-agileits-top"> 
												<form action="<?php echo base_url('index.php/web/login_post'); ?>" method="post">
													<p>Nomor Meja </p>
													<input type="text" name="no_meja" placeholder="Contoh: M01" style="text-transform:uppercase;"  required=""/>
													<input type="submit" value="LOGIN">
												</form>  
											</div>
										</div> 
										
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="login-agileits-top"> 
												<form action="<?php echo base_url('index.php/web/login_post_karyawan'); ?>" method="post">
													<p>Username</p>
													<input type="text" name="Masukkan Username Anda" placeholder="Username" required=""/>
													<p>Password</p>
													<input type="text" placeholder="Masukkan Password Anda" name="Password" required=""/> 
													<input type="submit" value="LOGIN">
												</form>  
											</div>
										</div>
									</div>
						</div>
					</div>
				
					<div class="right-section-w3ls"></div>
						<div class="clear"> </div>
				</div>					
			</div>

		<script type="text/javascript" src="<?php echo base_url('assets1/');?>js/jquery-2.1.4.min.js"></script>
			<script>$(document).ready(function(c) {
				$('.alert-close').on('click', function(c){
					$('.message').fadeOut('slow', function(c){
						$('.message').remove();
					});
				});	  
			});
		</script>

		<script src="<?php echo base_url('assets1/');?>js/easyResponsiveTabs.js" type="text/javascript"></script>
			<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->

		<script src="<?php echo base_url('index.php/login/input_login');?>">
		// assumes you're using jQuery
			$(document).ready(function() {
			$('.confirm-div').hide();
				<?php if($this->session->flashdata('msg')){ ?>
					$('.confirm-div').html('<?php echo $this->session->flashdata('msg'); ?>').show();
				});
			<?php } ?>
		</script>	
	</body>
	
</html>