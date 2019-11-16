<header>
	<div class="fs-slider">
		<div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
			<div class="carousel-inner">
				<div class="active item bg" style="background-image:url(<?php
				echo @$allContent[0]['photo'] != '' ? base_url("uploads/contents/" . $allContent[0]['photo']) : base_url("assets/assets_frontend/images/background/header-business.jpg");
				?>)">
					<div class="hero-caption caption-left caption-height-center">
													<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
					</div>
					<!--/ hero-caption -->
				</div>
				<!-- /item -->
				<a href="#csr" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
			</div>
			<!-- /carousel-inner -->

		</div>
		<!-- /carousel -->
	</div>
	<!-- /fs-slider -->
</header><!--/#Full Screen Slider -->

<!-- Heading Style 1 -->
<section class="header">
	<div class="block-second-menu menu col-md-12 hidden-xs hidden-sm hidden-xs hidden-sm">
		<div class="breadcrumb pull-left mrg-top-10">
			<ul>
				<li><a href="profile-about.html"><b>Profile</b></a></li>
			</ul>
		</div>
		<!-- /pull-left -->
		<div class="breadcrumb pull-right mrg-top-10">
			<ul>
				<?php foreach ($submenu as $row) { ?>
					<li><a class="<?php echo $row['slug'] == 'profile-' . $activeMenu ? 'active' : ''; ?>" href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>"><?php echo $row['menu_detail_name']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
		<!-- /breadcrumb -->
	</div>
	<div class="menu-mobile hidden-lg hidden-md">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILE &nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
				<ul class="dropdown-menu">
					<?php foreach ($submenu as $row) { ?>
						<li class="">

							<a  href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>">
								<?php echo $row['slug'] == 'profile-' . $activeMenu ? '<span class="glyphicon glyphicon-chevron-right"></span>' : ''; ?>

								<?php echo $row['menu_detail_name']; ?></a></li>
						<li class="divider"></li>
					<?php } ?>
				</ul>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
	<!-- /container -->
</section>
<!-- /Heading Style 1 -->

<!-- Contact -->
<section id="csr" class="profile pdd-vertical-20">
	<div class="container">
		<div class="row">
			<div class="title-big mrg-btm-30" align="center">
				<h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['menu_detail_name']); ?></h2>
				<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">

			</div>
		</div>
		<div class="row mrg-top-30">
			<div class="col-md-6">
				<div class="title-big mrg-btm-30">
					<?php if ($this->agent->is_mobile()) { ?>
						<div align="center">
							<h4 class="hero-heading text-purple"><?php echo $allContent[1]['title']; ?></h4>
							<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
						</div>
					<?php } else { ?>
						<h4 class="hero-heading text-purple"><?php echo $allContent[1]['title']; ?></h4>
						<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
					<?php } ?>
				</div>
				<?php echo $allContent[1]['content']; ?>
			</div>
			<!-- /column -->
			<div class="col-md-6 split-box pdd-vertical-50">
				<?php if ($allContent[1]['url_video'] != "") { ?>
					<!-- url_video -->
					<div class="background-holder has-content parallax-overlay-light" style="background-image: url(<?php echo img_youtube($allContent[1]['url_video']); ?>)">
						<div class="content text-center">
							<a href='#myModal' class='' data-toggle='modal' data-target='#playerModal'>
								<i class="play-btn font-size-50"></i>
							</a>
							<!--                             <a class="popup-player" href="video/sera.mp4">
																							<i class="play-btn font-size-50"></i>
																					</a> -->
							<h2 class="mrg-top-30">Watch Video</h2>
							<p class="droid-serif-italic font-size-15">See about sera CSR</p>
						</div>
						<!-- /content -->
					</div>

					<div class="modal fade vid-popup" id='playerModal' role='dialog' tabindex='-1'>
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">×</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<div id="player" class="embed-responsive-item"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- /url_video -->
				<?php } else { ?>

					<div class="background-holder has-content parallax-overlay-light" style="background-image: url(<?php echo base_url("assets/assets_frontend/images/about-video.png"); ?>)">
						<div class="content text-center">
										<!-- <a class="popup-player" href="<?php echo base_url("uploads/contents/" . $allContent[1]['photo']); ?>">
														<i class="play-btn font-size-50"></i>
										</a> -->

							<a href='#myModal' class='' data-toggle='modal' data-target='#playerModal'>
								<i class="play-btn font-size-50"></i>
							</a>

							<h2 class="mrg-top-30">Watch Video</h2>
							<p class="droid-serif-italic font-size-15">See about sera profile</p>
						</div>
						<!-- /content -->
					</div>


					<div class="modal fade vid-popup" id='playerModal' role='dialog' tabindex='-1'>
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">×</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<div id="player" class="embed-responsive-item"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- /background-holder -->
				<?php } ?>
			</div>
			<!-- /column -->
		</div>
		<div class="row">
			<div class="title-big mrg-top-70 mrg-btm-30" align="center">
				<h2 class="hero-heading text-purple text-center"><?php echo $allContent[2]['title']; ?></h2>
				<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
				<?php echo $allContent[2]['content']; ?>
			</div>
		</div>
		<div class="row">
			
					<?php
					$no = 0;
					foreach ($allContent as $row) {
						if ($no > 2) {
							?>
							<div class="col-md-6" style="margin: 0; padding: 0">
								<div class="folio-item" style="margin: 0; padding: 0">
									<div class="folio-style-1" style="margin: 0; padding: 0">
										<div class="folio-image" style="margin: 0; padding: 0">
											<img class="img-responsive" src="<?php echo base_url("uploads/contents/" . $row['photo']); ?>" alt="" width="100%">
										</div>
										<!-- folio-image -->
										<div class="overlay">
											<div class="overlay-caption">
												<div class="overlay-content">
													<div class="folio-info">
														<h3 class="text-white"><?php echo $row['title']; ?></h3>
														<?php echo $row['content']; ?>
													</div>
													<!-- /folio-info -->
												</div>
												<!-- /overlay-content -->
											</div>
											<!-- /overlay-caption -->
										</div>
										<!-- /overlay -->
									</div>
									<!-- /folio-style -->
								</div>
							</div>
						<?php
						} $no++;
					}
					?>

			
		</div>
	
	</div>
	<!-- /container -->
</section>
<!-- /Contact -->

<section id="latest-event" class="profile pdd-vertical-50">
	<div class="container">
		<div class="row">
			<div class="title-big mrg-btm-30" align="center">
				<h2 class="hero-heading text-purple text-center">Our latest Event</h2>
				<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">

			</div>
		</div>
		<div class="row">
			<!-- <div class="owl-3 owl-pagi-1 pagi-center pagi-overlay owl-nav-3 nav-overlay mrg-top-30">  -->
			<div class="owl-3-nav owl-nav-3 owl-nav-arrow owl-carouselmrg-top-30">

<?php 

 $bulan = array(
                '01' => 'JAN',
                '02' => 'FEB',
                '03' => 'MAR',
                '04' => 'APR',
                '05' => 'MEI',
                '06' => 'JUN',
                '07' => 'JUL',
                '08' => 'AGU',
                '09' => 'SEP',
                '10' => 'OKT',
                '11' => 'NOP',
                '12' => 'DES',
                );  

                foreach ($beritacsr as $news) { ?>

					<div class="item pdd-horizon-15">
						<div class="news-list">
							<div class="block-news">
								<div class="news-img">
									<img class="img-responsive" src="<?php echo base_url("uploads/news/" . $news->gambar); ?>" alt="">
									<div class="overlay">
										<div class="news-info">
											<p class="position"><?php echo $news->title; ?></p>
										</div>
										<!-- /member-info -->

										<div class="news-meta">
											 <div class="date mrg-btm-30">
                                              <h4 class="text-white text-left no-margin"><?php echo date('d',strtotime($news->datepost));?></h4>
                                              <h5 class="text-white text-left no-margin"><?php echo $bulan[date('m',strtotime($news->datepost))]; ?></h5>
                                              <h6 class="text-white text-left no-margin"><?php echo date('Y',strtotime($news->datepost)); ?></h6>
                                          </div>
											<div class="desc-asrticle" align="center">
	<?php echo substr(strip_tags($news->content), 0, 180); ?>
												<div class="btn-read mrg-top-30">
													<a href="<?php echo site_url('news/' . date('Y', strtotime($news->datepost)) . '/' . date('m', strtotime($news->datepost)) . '/' . $news->slug); ?>">Read More&nbsp;<i class="ti-angle-right"></i></a>	</div>
											</div>
										</div>
										<!-- /member-meta -->

									</div>
									<!-- /overlay -->
								</div>
								<!-- /member-img -->
							</div>
						</div>
					</div>  
<?php } ?>
			</div>
			<!-- /owl-carousel -->
		</div>
	</div>
</section>

<script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.waypoints.js'); ?>"></script>
<script type="text/javascript">
// Youtube API Functions (https://developers.google.com/youtube/iframe_api_reference)
// =============================================

	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//### Variables
	var player;
	var playerModal = $('#playerModal');

//### Youtube API
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			height: '390',
			width: '640',
			videoId: '<?php echo id_youtube($allContent[1]['url_video']); ?>'
		});
	}

//### Modal Controls (http://getbootstrap.com/javascript/#modals)
// Modal when show, begin to play video
	playerModal.on('show.bs.modal', function (e) {
		player.playVideo();
	});

// Modal when hidden, pause or stop playing video
	playerModal.on('hidden.bs.modal', function (e) {
		player.pauseVideo();
		//player.stopVideo();
	});


</script>