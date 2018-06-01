<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
     Data Pemesanan
    </div>
	
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="viewModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Data Pemesanan</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form role="form">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">No Meja</label>
												<p id="nomor-meja" class="help-block">M01</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Pesanan</label>
                                            </div>
											
											<div>
											<table class="table">
												<thead>
													<th width="75%">Item</td>
													<th width="10%">Harga</td> 
													<th width="5%">Qty</td>
													<th width="10%">Total</td>
												</thead>
												<tbody id="menu-table">
												</tbody>
											</table>
									
											<table class="table">
												<tr>
													<td width="90%">Total</td>
													<td width="10%" id="all-total">0</td>
												</tr>
												
											</table>
											</div>
                                         
                                        </form>
                                    </div>
									<div class="modal-footer">
										<?php
											$level = $this->session->userdata('level_login_id');
											if ($level == 2){
												echo '<button id="btn-bayar" class="btn btn-info" type="submit" idMeja="0">Bayar</button>';
											}
										?>
										<button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
							
									</div>
                                </div>
                            </div>
                        </div>
	
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">No</th>
            <th>Nomor Meja</th>
            <th>Data Pemesanan</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>M01</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="1" noMeja="M01">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>2</td>
            <td>M02</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="2" noMeja="M02">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>3</td>
            <td>M03</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="3" noMeja="M03">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>4</td>
            <td>M04</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="4" noMeja="M04">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>5</td>
            <td>M05</td>
           <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="5" noMeja="M05">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>6</td>
            <td>M06</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="6" noMeja="M06">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>7</td>
            <td>M07</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="7" noMeja="M07">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
          <tr>
            <td>8</td>
            <td>M08</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="8" noMeja="M08">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		 
          <tr>
            <td>9</td>
            <td>M09</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="9" noMeja="M09">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  </tr>
          <tr>
            <td>10</td>
            <td>M10</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="10" noMeja="M10">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  </tr>
          <tr>
            <td>11</td>
            <td>M11</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="11" noMeja="M11">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  </tr>
          <tr>
            <td>12</td>
            <td>M12</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="12" noMeja="M12">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  </tr>
          <tr>
            <td>13</td>
            <td>M13</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="13" noMeja="M13">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  </tr>
          <tr>
            <td>14</td>
            <td>M14</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="14" noMeja="M14">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  
          <tr>
            <td>15</td>
            <td>M15</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="15" noMeja="M15">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
          <tr>
            <td>16</td>
            <td>M16</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="16" noMeja="M16">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  
          <tr>
            <td>17</td>
            <td>M17</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="17" noMeja="M17">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  
          <tr>
            <td>18</td>
            <td>M18</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="18" noMeja="M18">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  
          <tr>
            <td>19</td>
            <td>M19</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="19" noMeja="M19">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  </tr>
          <tr>
            <td>20</td>
            <td>M20</td>
            <td>
                    <a href="#viewModal" data-toggle="modal" class="btn btn-success btn-lihat-pesan" idMeja="20" noMeja="M20">
                         Lihat Pesanan
                    </a>
            
			</td>
          </tr>
		  
		  
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2018 ORDER NOW. All rights reserved</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="<?php echo base_url ('assets2/'); ?>js/bootstrap.js"></script>
<script src="<?php echo base_url ('assets2/'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url ('assets2/'); ?>js/scripts.js"></script>
<script src="<?php echo base_url ('assets2/'); ?>js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url ('assets2/'); ?>js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url ('assets2/'); ?>js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url ('assets2/'); ?>js/jquery.scrollTo.js"></script>

<script>
	$(document).ready(function() {
		
		$('.btn-lihat-pesan').click(function() {
			var idMeja = $(this).attr('idMeja');
			var noMeja = $(this).attr('noMeja');
			$('#nomor-meja').html(noMeja);
			$('#menu-table').html('<p>Loading...</p>');
			$('#all-total').html('0');
			$('#btn-bayar').attr('idMeja', idMeja);
			$.ajax({
				url:'getDataPesanan?no_meja='+idMeja,
				success: function(data){
					var menu = JSON.parse(data);
					var str = '';
					var all_total = 0;
					if (menu.length>0){
						for (var i=0;i<menu.length;i++){
							str += '<tr>';
							str += '<td>'+menu[i]['nama_menu']+'</td>';
							str += '<td>'+menu[i]['harga_menu']+'</td>';
							str += '<td>'+menu[i]['jumlah_item']+'</td>';
							var total = parseInt(menu[i]['harga_menu']) * parseInt(menu[i]['jumlah_item']);
							all_total += total;
							str += '<td>'+total+'</td>';
							str += '</tr>';
						}
					} else {
						str = '<p>Tidak ada data!</p>';
					}
					$('#menu-table').html(str);
					$('#all-total').html(all_total);
				}
			});
		});
		
		$('#btn-bayar').click(function(){
			var idMeja = $(this).attr('idMeja');
			var result = confirm('Apakah anda ingin membayar pesanan dengan nomor meja ini?');
			if(result==true){
				alert('meja '+idMeja+' sudah dibayar!');
				location.replace('<?php echo base_url('index.php/dashboard/konfirmasiPembayaran');?>?no_meja='+idMeja);
			}
		});
		
	});
</script>

</body>
</html>
