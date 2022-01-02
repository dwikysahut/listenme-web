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
								<a  class="standard-logo"
								data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark.png"><img
								src="<?php echo base_url() ?>assets/demos/music/images/logo.png"
								alt="Canvas Logo"></a>
								<a class="retina-logo"
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
		<div id="wrapper" class="clearfix" style="margin-bottom: 40px">


		<!-- Slider
			============================================= -->

		<!-- Content
			============================================= -->
			<section id="content" class="bg-color2">
				<div class="content-wrap py-0" style="overflow: visible;">
					<div class="container clearfix" style="z-index: 7;">
					<?php if ($this->session->userdata('id_status') == 1 || !$this->session->userdata('id_status')): ?>

						<?php $this->load->view('templates/adsprice');?>
						<?php else:
endif;?>


						<section id="music-explore">
						<div class="row topmargin-lg clearfix">
							<div class="col-lg-12">
								<div class="heading-block border-0 dark" style="margin-bottom: 15px;">
									<h3><?php echo $title; ?></h3>

								</div>

							<!-- Song Lists Items
								============================================= -->
								<div id="song-list-wrap" class="songs-lists-wrap">

								<!-- List Items
									============================================= -->

									<?php
if (sizeof($dataTrack) == 0) {
    ?>
										<center>
										<h2>Track is Empty</h2>
										</center>
										<?php

}
$i = 1;

foreach ($dataTrack as $item): ?>
										<div id="data-song" class="songs-list">
											<div class="songs-number"><?php echo $i ?></div>
											<div class="songs-image track-image">
												<a href="#" class="track-list"
												data-track="<?php echo base_url() ?>assets/demos/music/tracks/<?php echo $item['track_name'] ?>"
												data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>"
												data-title="<?php echo $item['title'] ?>"
												data-singer="<?php echo $item['artist'] ?>">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>"
												alt="Image 1" width="200" height="150"><span><i class="icon-play"></i></span>
											</a>
										</div>
										<div class="songs-name track-name"><a
											href="#"><?php echo $item['title'] ?><br><span><?php echo $item['artist'] ?></span></a>
										</div>
										<div class="songs-time"><?php echo $item['length'] ?></div>
										<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false"><i
											class="icon-line-ellipsis"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
												<?php if ($title=="Playlist"): ?>

													<!-- <a class="dropdown-item" href="#"><span class="icon-line-plus"></span>
													Add to Queue</a> -->
													<a class="dropdown-item"  href="#" onclick="removeFromPlaylist(<?php echo $item['id_track'];?>);return false;"><span class="icon-music"></span> Remove from Playlist</a>
												
														<!-- <a class="dropdown-item" href="#"><span class="icon-line-heart"></span>
														Love</a> -->
														<div class="dropdown-divider"></div>
														<!-- <a class="dropdown-item" href="#"><span class="icon-line-share"></span>
														Share</a> -->
													</li>
													<?php else: ?>
														<?php if ($this->session->userdata('id_status') == 2 && $this->session->userdata('logged_in') == true): ?>
															<?php if ($item['id_user']==null): ?>
															<a class="dropdown-item" href="#" onclick="addToPlaylist(<?php echo $item['id'];?>);return false;"><span class="icon-music"></span> Add to Playlist</a>
															<?php else: ?>
																<a class="dropdown-item"  href="#" onclick="removeFromPlaylist(<?php echo $item['id'];?>);return false;"><span class="icon-music"></span> Remove from Playlist</a>
															<?php endif;?>
															<?php else: ?>
																<a class="track-list-random ml-4" href="#"
														data-track="<?php echo base_url() ?>assets/demos/music/tracks/<?php echo $item['track_name'] ?>"
												data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>"
												data-title="<?php echo $item['title'] ?>"
												data-singer="<?php echo $item['artist'] ?>"><span class="icon-music"></span> Play Shuffle</a>
												
													<?php endif;?>
													<?php endif;?>
													
												</ul>
											</div>
										</div>
										<?php
$i++;
endforeach;?>


									</div>
									<a href="javascript:window.history.go(-1);" class="button bg-transparent font-weight-light nott float-left mt-3 ml-0 icon-block"
									style="color: #AAA; padding: 0 16px; font-size: 26px;"> <i class="fa fa-arrow-left "></i>
    <span>Back</span></a>
								</div>

								<div class="w-100 d-block d-md-block d-lg-none topmargin-lg clear"></div>


						</section>



						<div class="clear"></div>



						</div>
					</div>
				</section><!-- #content end -->


		</div><!-- #wrapper end -->
		<?php $this->load->view('/templates/footer');?>

	<!-- Audio Player
		============================================= -->
		<audio id="audio-player" preload="none" class="mejs__player" controls
		data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
		<source src="<?php echo base_url() ?>assets/demos/music/src/audios/nashe-si.mp3" type="audio/mp3">
		</audio>

	<!-- Default Track - onLoad
		============================================= -->
		<?php foreach ($dataTop as $item):
    # code...
    ?>
						<div id="track-onload"
						data-track="<?php echo base_url() ?>assets/demos/music/tracks/<?php echo $item['track_name'] ?> "
						data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?> "
						data-title=<?php echo $item['title'] ?> data-singer=<?php echo $item['artist'] ?>></div>
						<?php
endforeach;
?>
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

		// Music playing Scripts
		var trackPlaying = '',
		audioPlayer = document.getElementById('audio-player');

		audioPlayer.addEventListener("ended", function () {
			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
		});

		audioPlayer.addEventListener("pause", function () {
			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
		});

		function changeAudio(sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true) {
			var audio = $("#audio-player"),
			clickEl = jQuery('[data-track="' + sourceUrl + '"]'),
			playerId = audio.closest('.mejs__container').attr('id'),
			playerObject = mejs.players[playerId];

			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

			if (sourceUrl == trackPlaying) {
				if (playerObject.node.paused) {
					playerObject.play();
					clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
				} else {
					playerObject.pause();
					clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
				}
				return true;
			}

			trackPlaying = sourceUrl;

			audio.attr('poster', posterUrl);
			audio.attr('title', trackTitle);

			jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="' + posterUrl +
				'" alt="Track Poster" /></div><div class="mejs-track-details"><h3>' + trackTitle + '<br><span>' +
				trackSinger + '</span></h3></div>');

			if (sourceUrl != '') {
				playerObject.setSrc(sourceUrl);
			}
			playerObject.pause();
			playerObject.load();

			if (playAudio == true) {
				playerObject.play();
				jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
			}
		}
		jQuery('.track-list-random').on('click', function () {
			var jArray = <?php echo json_encode($dataTrack); ?>;
				var randomSong = jArray[Math.floor(Math.random()*jArray.length)];
			var sess = '<?php echo $this->session->userdata('email'); ?>';
			console.log(randomSong);
			// alert(sess);

			if (sess == '') {
				$('#myModal').modal('show');
				return false;
			} else {


				var audioTrack = "<?php echo base_url() ?>assets/demos/music/tracks/"+randomSong.track_name , // Track url
					posterUrl = "<?php echo base_url() ?>assets/demos/music/tracks/poster-images/"+randomSong.poster, // Track Poster Image
					trackTitle = randomSong.title; // Track Title
				trackSinger = randomSong.artist; // Track Singer Name

				changeAudio(audioTrack, posterUrl, trackTitle, trackSinger);
				return false;
			}

		});
		function randomPlay(){
			var jArray = <?php echo json_encode($dataTrack); ?>;
			jQuery('.track-list').on('click', function () {
				var randomSong = jArray[Math.floor(Math.random()*jArray.length)];
			var sess = '<?php echo $this->session->userdata('email'); ?>';
			console.log(randomSong);
			// alert(sess);

			if (sess == '') {
				$('#myModal').modal('show');
				return false;
			} else {


				var audioTrack = "<?php echo base_url() ?>assets/demos/music/tracks/"+randomSong.track_name , // Track url
					posterUrl = "<?php echo base_url() ?>assets/demos/music/tracks/poster-images/"+randomSong.poster, // Track Poster Image
					trackTitle = randomSong.title; // Track Title
				trackSinger = randomSong.artist; // Track Singer Name

				changeAudio(audioTrack, posterUrl, trackTitle, trackSinger);
				return false;
			}
		});
		}
		<?php if( $this->session->userdata('id_status')==1){ ?>
			randomPlay();

		<?php }
		else { ?>
		
		jQuery('.track-list').on('click', function () {
			var sess = '<?php echo $this->session->userdata('email'); ?>';
			// alert(sess);

			if (sess == '') {
				$('#myModal').modal('show');
				return false;
			} else {


				var audioTrack = jQuery(this).attr('data-track'), // Track url
					posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
					trackTitle = jQuery(this).attr('data-title'); // Track Title
				trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

				changeAudio(audioTrack, posterUrl, trackTitle, trackSinger);
				return false;
			}
		});
	<?php } ?>
	
		jQuery(window).on('load', function () {
			var trackOnload = jQuery('#track-onload');

			if (trackOnload.length > 0) {
				var audioTrack = trackOnload.attr('data-track'), // Track url
					posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
					trackTitle = trackOnload.attr('data-title'); // Track Title
				trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

				setTimeout(function () {
					changeAudio(audioTrack, posterUrl, trackTitle, trackSinger, false);
				}, 500);
			}
		});
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

	 <?php if($this->session->userdata('id_status') &&$this->session->userdata('id_status')==1){?>
		
		setInterval(function() {
			add_img();
			$('#adsModal').modal('show');}, 
          10000);
		<?php } ?>
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
						getData();
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
					   getData();
				}
			},
			error: function(data){
             console.log(data.responseText);

          }




		})
		}
		function add_img() { 
	   var adsArr= Array("ads2.jpeg","ads1.jpeg","adsPrice.png");
	var randomAds = adsArr[Math.floor(Math.random()*adsArr.length)];
	var elementExists = document.getElementById("img-ads");
	if( elementExists){

		elementExists.src="<?php echo base_url() ?>/assets/demos/music/images/"+randomAds;
	}
	else{

	var img = document.createElement('img'); 
	img.setAttribute("id", "img-ads");
    img.src = "<?php echo base_url() ?>/assets/demos/music/images/"+randomAds; 
	img.width='500';
	img.height='300';
	document.getElementById('body-ads').appendChild(img);
}
}

        function getData() {
            $.ajax({
                type:'POST',
                url:'<?php echo base_url()."index.php/track_list/getAllData" ?>',
                dataType: 'JSON',
                success: function(data){
                 
					$("#song-list-wrap").load(" #data-song");
                }
            });
        }


</script>
<?php $this->load->view('modals/modal_form');?>
<?php $this->load->view('modals/adsPopup');?>
</body>

</html>