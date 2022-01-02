<!-- Header
			============================================= -->
			<header id="header" class="full-header transparent-header dark sticky header-size-md">
				<div id="header-wrap">
					<div class="container">
						<div class="header-row">
	<?php  $this->load->view('templates/sidebar');?>
						<!-- Logo
							============================================= -->
							
							<div id="logo">
								<a href="" class="standard-logo"
								data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark.png"><img
								src="<?php echo base_url() ?>assets/demos/music/images/logo.png"
								alt="Canvas Logo"></a>
								<a  class="retina-logo"
								data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark@2x.png"><img
								src="<?php echo base_url() ?>assets/demos/music/images/logo@2x.png"
								alt="Canvas Logo"></a>
							</div><!-- #logo end -->

							<div class="header-misc">

							<!-- Top Search
								============================================= -->
								<div id="top-search" class="header-misc-icon">
									<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
										class="icon-line-cross"></i></a>
									</div><!-- #top-search end -->

								</div>

								<div id="primary-menu-trigger">
									<svg class="svg-trigger" viewBox="0 0 100 100">
										<path
										d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
									</path>
									<path d="m 30,50 h 40"></path>
									<path
									d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
								</path>
							</svg>
						</div>

						<!-- Primary Navigation
							============================================= -->
							<nav class="primary-menu not-dark">

								<ul class="menu-container one-page-menu">
									<li class="menu-item active"><a class="menu-link" href="#">
										<div>Home</div>
									</a></li>
									<li class="menu-item"><a class="menu-link" href="#" data-href="#musics">
										<div>Musics</div>
									</a></li>
									<!-- <li class="menu-item"><a class="menu-link" href="#">
										<div>About</div>
									</a></li> -->
									<li class="menu-item"><a class="menu-link" href="#"data-href="#music-explore">
										<div>Discover</div>
									</a></li>
									<li class="menu-item"><a class="menu-link" href="#" data-href="#artist">
										<div>Singers</div>
									</a>
									<ul class="sub-menu-container">
										<!-- <li class="menu-item"><a class="menu-link" href="#">
											<div>A-Z Artists</div>
										</a></li>
										<li class="menu-item"><a class="menu-link" href="#">
											<div>New Artists</div>
										</a></li> -->
										<li class="menu-item"><a class="menu-link" href="#" data-href="#artist">
											<div>Popular Singers</div>
										</a></li>
									</ul>
								</li>
								<!-- <li class="menu-item"><a class="menu-link" href="#"><div>Videos</div></a></li> -->
								<?php if ($this->session->userdata('id_status')==2 && $this->session->userdata('logged_in')==true): ?>
									<li class="menu-item"><a class=" menu-link sub-menu custom" href="#"><i class="fa fa-user s" ><div class="menu-title s">VIP</div></i></a></li>
							
								<?php elseif($this->session->userdata('id_status')==1 && $this->session->userdata('logged_in')==true): ?>
									<li class="menu-item"><a class="menu-link" href="">
									<div><b>Free Account</b></div>
								</a></li>
							
								<?php endif; ?>
								<?php
if ($this->session->userdata('email')):
?>

									<li class="menu-item"><a class="menu-link" href="auth/logout">
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

						<form class="top-search-form" id="searchForm" action="javascript:search();">
							<input type="text" name="searcher" id="searchItem" class="form-control"  onclick="document.getElementById('searchForm').submit(); return false;"
							placeholder="Type &amp; Hit Enter.." autocomplete="off">
					
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
