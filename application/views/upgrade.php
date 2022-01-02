<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
		============================================= -->
		<link
		href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,600,700|Montserrat:300,400,700|Caveat+Brush&display=swap"
		rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dark.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.css" type="text/css" />
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Music Specific Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/demos/music/music.css" type="text/css" />
		<!-- / -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/one-page/css/et-line.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/demos/music/css/fonts.css" type="text/css" />

		<!-- Bootstrap Switch CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components/bs-switches.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom-style.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Theme color -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors.php?color=ed215e" type="text/css" />

		<!-- Audio Player Plugin CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/demos/music/css/mediaelement/mediaelementplayer.css">

		<!-- swall -->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Document Title
		============================================= -->
		<title>Listen Me</title>

		<style>
			.css3-spinner {
				background-color: #131722;
			}

		</style>

	</head>

	<body class="stretched bg-color2" data-loader="4" data-loader-color="theme">

<!-- Header
			============================================= -->
			<header id="header" class="full-header transparent-header dark sticky header-size-md">
				<div id="header-wrap">
					<div class="container">
						<div class="header-row">
						<?php $this->load->view('templates/sidebar');?>
						<!-- Logo
							============================================= -->
							<div id="logo">
								<a href="index.html" class="standard-logo"
								data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark.png"><img
								src="<?php echo base_url() ?>assets/demos/music/images/logo.png"
								alt="Canvas Logo"></a>
								<a href="index.html" class="retina-logo"
								data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark@2x.png"><img
								src="<?php echo base_url() ?>assets/demos/music/images/logo@2x.png"
								alt="Canvas Logo"></a>
							</div><!-- #logo end -->




						<!-- Primary Navigation
							============================================= -->
							<nav class="primary-menu not-dark">

								<ul class="menu-container one-page-menu">
									<li class="menu-item active"><a class="menu-link"  href="<?php echo base_url('') ?>">
										<div>Home</div>
									</a></li>


								</li>
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div>Videos</div></a></li> -->
								<?php if ($this->session->userdata('id_status') == 2 && $this->session->userdata('logged_in') == true): ?>
									<li class="menu-item"><a class=" menu-link sub-menu custom" href="#"><i class="fa fa-user s" ><div class="menu-title s">VIP</div></i></a></li>

								<?php elseif ($this->session->userdata('id_status') == 1 && $this->session->userdata('logged_in') == true): ?>
									<li class="menu-item"><a class="menu-link" href="">
									<div><b>Free Account</b></div>
								</a></li>

								<?php endif;?>
								<?php
if ($this->session->userdata('email')):
?>

									<li class="menu-item"><a class="menu-link" href="<?php echo base_url('auth/logout'); ?>">
										<div id="logout" >Logout</div>
									</a></li>

									<?php
else:
?>
									<li class="menu-item"><a class="menu-link" href="<?php echo base_url('auth/login') ?>"><div id="login">Login</div>
									<?php endif;?>
								</a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value=""
							placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

	<!-- Document Wrapper
		============================================= -->
		<div class="content-wrap">
		<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

<li class="inline-block mb-2"><a href="<?php echo base_url() ?>"><i class="icon-line-corner-up-left"></i> Kembali</a></li>




<ul class="tab-nav tab-nav2 center clearfix">
	<li class="inline-block"><a href="#tab-order">Order</a></li>
	<li class="inline-block"><a href="#tab-confirm">Confirmation Order</a></li>
</ul>



<div class="tab-container">

	<div class="tab-content" id="tab-order">
		<div class="card mb-0">
			<div class="card-body" style="padding: 40px;">


					<h3>How to Order</h3>
					

					<span for="login-form-username">Silahkan lakukan transfer ke nomor rekening Bank Mandiri <strong>354-234-523-999</strong> atas nama
						<strong>a.n Dwiky Satria Hutomo </strong>
					</span>
					<div class="row">
					<div class="col-12">
					<div class="row">
						<div class="mt-5 col-6">
							<span>Price</span>
						</div>
						<div class="mt-5 d-flex justify-content-end col-6">
							<span><?php echo "Rp. " . number_format(50000, 2, ',', '.'); ?></span>
						</div>
					</div>
					</div>
					<div class="mt-2 col-12">
					<div class="row">
						<div class="col-6">

							<span>Unique Code</span>
						</div>
						<div class="d-flex justify-content-end col-6">
							<span><?php echo "Rp. " . number_format($kode_unik, 2, ',', '.'); ?></span>
						</div>
					</div>
					</div>
					<div class="mt-2 col-12">
						<div class="row">
						<div class="col-6">
							<span><strong>Total Price</strong></span>
						</div>
						<div class=" d-flex justify-content-end col-6">
							<span><strong><?php echo "Rp. " . number_format($total, 2, ',', '.'); ?></strong></span>
						</div>

					</div>
					</div>
					<div class="col-12 d-flex flex-column justify-content-end">
													<a class="d-flex flex-column justify-content-end mt-3" href="<?php echo base_url('upgrade#tab-confirm') ?>">	<button  class="button button-circle button-medium font-weight-normal ls1  track-list"  name="submit-confirm"  value="login">already paid? confirm now</button>
													</a>
													</div>
													</div>
				<!-- </form> -->

			</div>
		</div>
	</div>

	<div class="tab-content" id="tab-confirm">
		<div class="card mb-0">
			<div class="card-body" style="padding: 40px;">
				<h3> Order Confirmation</h3>
				
				<div class="row">
					<div class="col-12">
					<div class="row">
						<div class="mt-5 col-6">
							<span>Name</span>
						</div>
						<div class="mt-5 d-flex justify-content-end col-6">
							<span><?php echo $this->session->userdata('name'); ?></span>
						</div>
					</div>
					</div>
					<div class="mt-2 col-12">
					<div class="row">
						<div class="col-6">

							<span>Email</span>
						</div>
						<div class="d-flex justify-content-end col-6">
						<span><?php echo $this->session->userdata('email'); ?></span>
						</div>
					</div>
					</div>
					<div class="mt-2 col-12">
						<div class="row">
						<div class="col-6">
							<span><strong>Total</strong></span>
						</div>
						<div class=" d-flex justify-content-end col-6">
							<span><strong><?php echo "Rp. " . number_format($total, 2, ',', '.'); ?></strong></span>
						</div>

					</div>
					</div>
					<div class="col-12 form-group mt-2 mb-2">
				<form id="form_submit" method="post" enctype="multipart/form-data">
					<div class="col-12 form-group mt-2 mb-2">
													<label for="register-form-password">Evidence of transfer <small>(.png / .jpg)</small></label>
													<input type="file" id="doc" name="doc" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" value="" class="form-control" required="" />
												</div>

					<div class="col-12 d-flex flex-column justify-content-end mt-3">
												<button  class="button button-circle button-medium font-weight-normal ls1  track-list"  name="submit"  value="login">Submit</button>
													
													</div>
													</div>
				
				</form>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="text-center text-muted mt-3"><small>Copyrights &copy; 2021 Listenme. All rights reserved</small></div>
</div>

</div>
</div>
</section><!-- #content end -->

</div><!-- #wrapper end -->


	<!-- Audio Player
		============================================= -->

	<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up" style="bottom: 70px;"></div>

	<!-- JavaScripts
		============================================= -->
		<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url() ?>assets/js/plugins.min.js"></script>

	<!-- Audio player Plugin
		============================================= -->
		<script src="<?php echo base_url() ?>assets/demos/music/js/mediaelement/mediaelement-and-player.js"></script>

	<!-- Footer Scripts
		============================================= -->
		<script src="<?php echo base_url() ?>assets/js/functions.js"></script>

		<script>
		// Custom Tab jQuery
		// jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
		// 	var gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

		// 	if( gridContainerAvailable.length > 0 ) {
		// 		gridContainerAvailable.each( function(){
		// 			var portfolioGrid = jQuery(this);

		// 			if( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
		// 				portfolioGrid.isotope('layout');
		// 				jQuery(window).trigger('resize');
		// 				portfolioGrid.addClass('tabs-enabled-grid-container');
		// 			}
		// 		});
		// 	}
		// });

		
		function login(){

			var username = $("[name='username']").val();
			var password = $("[name='password']").val();

			$.ajax({
				type:'POST',
				data:'username='+username+'&password='+password,
				url: '<?php echo base_url('index.php/home/loginModal'); ?>',
				dataType: 'json',
				success: function(hasil) {
					$("#pesan").html(hasil.pesan);

					if (hasil.status ==200) {

						$("#myModal").modal('hide');

						$("#login").html("Logout");
						$('#login').text('Logout');
						location.reload();
					//    getData();

					$("[name='username'],[name='password']").val('');
				}
			}
		})
		}

$(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });

   function addToPlaylist(id){
			var id_track=id;
			$.ajax({
				type:'POST',
				data:'id_track='+id_track,
				url: '<?php echo base_url('index.php/track_list/addToPlaylist'); ?>',
				dataType: 'JSON',
				success: function(hasil) {

					if (hasil.status ==true) {
						swal("Confirmation!", hasil.pesan, "success");
					//    getData();
				}
			},
			error: function(data){
             console.log(data.responseText);

          }




		})
		}
		function removeFromPlaylist(id){
			var id_track=id;
			$.ajax({
				type:'POST',
				data:'id_track='+id_track,
				url: '<?php echo base_url('index.php/track_list/removeFromPlaylist'); ?>',
				dataType: 'JSON',
				success: function(hasil) {

					if (hasil.status ==true) {
						swal("Confirmation!", hasil.pesan, "success");
					//    getData();
				}
			},
			error: function(data){
             console.log(data.responseText);

          }




		})
		}
		$(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });

	 $('#form_submit').submit(function(e){
	
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/upgrade/upload',
                     type:"post",
                     data:new FormData(this),
                     processData: false,
        contentType: false,
					 
                      success: function(hasil){
					
						swal("Confirmation!", "Upload Succesfully, our team will review as soon as possible", "success");
						$("#doc").val('');
                   }
                 });
            });
         
   });
   
</script>
<?php $this->load->view('modals/modal_form');?>
</body>

</html>