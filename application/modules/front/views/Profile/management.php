<?php 
$kelompok = array();
foreach($allContent as $row){
	$kelompokName = substr($row['position'],0,1);
	if (!in_array($kelompokName, $kelompok)) {
		$kelompok[] = $kelompokName;
	}
	$allGambar[$kelompokName][] = $row;
}
// print_r($kelompok);
?>
<link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/jquery.flipster.min.css'); ?>" />
<!-- Full Screen Slider -->
<header>
	<div class="fs-slider">
		<div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
			<div class="carousel-inner">
				<div class="active item bg" style="background-image:url(<?php 
					echo @$allContent[0]['photo'] != '' ? base_url("uploads/contents/".$allContent[0]['photo']) : base_url("assets/assets_frontend/images/background/header-business.jpg"); 
					?>)">
					<div class="hero-caption caption-left caption-height-center">
						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
					</div>
					<!--/ hero-caption -->
				</div>
					<!-- /item -->

					<div class="item bg" style="background-image:url(<?php echo base_url("assets/assets_frontend/images/background/header-business.jpg"); ?>)">
						<div class="hero-caption caption-left caption-height-center">
							<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
						</div>
						<!-- /hero-caption -->
					</div>
					<!-- /item -->

					<div class="item" style="background-image:url(<?php echo base_url("assets/assets_frontend/images/background/header-business.jpg"); ?>)">
						<div class="hero-caption caption-left caption-height-center">
							<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
						</div>
						<!-- /hero-caption -->
					</div>
					<!-- /item -->
					<a href="#management" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
				</div>
				<!-- /carousel-inner -->

		</div>
		<!-- /carousel -->
	</div>
	<!-- /fs-slider -->
</header>
<!--/#Full Screen Slider -->

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
					<?php foreach($submenu as $row){ ?>
					<li><a class="<?php echo $row['slug'] == 'profile-'.$activeMenu ? 'active' : ''; ?>" href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>"><?php echo $row['menu_detail_name']; ?></a></li>
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
				<?php foreach($submenu as $row){ ?>
					<li class="">

						<a  href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>">
							<?php echo $row['slug'] == 'profile-'.$activeMenu ? '<span class="glyphicon glyphicon-chevron-right"></span>' : ''; ?>

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
<section id="management" class="profile pdd-vertical-20">
	<div class="container">
		<div class="row">
			<div class="content mrg-btm-30" align="center">
				<div class="title-big mrg-top-70 mrg-btm-30" align="center">
					<h2 class="hero-heading text-purple text-center">Board of Directors</h2>
					<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
				</div>
				<div class="clearfix"></div>
				<div class="block-bod">
					<div id="carousel" class="flipster">
						<ul class="flip-items">
							<?php 
							$kelompokName = $kelompok[1];
							for($i=0; $i<count($allGambar[$kelompokName]); $i++){ ?>
							<li data-flip-title="Deep Lilac" data-flip-category="Purples">
								<img src="<?php echo base_url("uploads/contents/".$allGambar[$kelompokName][$i]['photo']); ?>">
								<h2><?php echo $allGambar[$kelompokName][$i]['title']; ?></h2>
								<p><?php echo $allGambar[$kelompokName][$i]['subtitle']; ?></p>
								<div class="desc-management" style="width:300px;">
									<div class="accordion no-border" id="accordion-3">
										<div class="panel">
											<div class="panel-heading">
												<h5>
													<a class="collapsed text-purple" data-toggle="collapse" href="#collapse1-<?php echo ($i+1); ?>">Read More<i class="fa fa-arrow-down"></i></a>
												</h5>
											</div>
											<!--/ panel-heading -->
											<div id="collapse1-<?php echo ($i+1); ?>" class="panel-collapse collapse">
												<div class="panel-body">
													<?php echo $allGambar[$kelompokName][$i]['content']; ?>
												</div>
												<!-- /panel-body -->
											</div>
											<!-- /collapse2 -->
										</div>
										<!-- /panel -->

									</div>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="content mrg-btm-30" align="center">
				<div class="title-big mrg-top-70 mrg-btm-30" align="center">
					<h2 class="hero-heading text-purple text-center">Board of Commissioners</h2>
					<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
				</div>
				<div class="clearfix"></div>
				<div class="block-bod">
					<div id="carousel2" class="flipster">
						<ul class="flip-items">
							<?php 
							$kelompokName = $kelompok[2];
							for($i=0; $i<count($allGambar[$kelompokName]); $i++){ ?>
							<li data-flip-title="Deep Lilac" data-flip-category="Purples">
								<img src="<?php echo base_url("uploads/contents/".$allGambar[$kelompokName][$i]['photo']); ?>">
								<h2><?php echo $allGambar[$kelompokName][$i]['title']; ?></h2>
								<p><?php echo $allGambar[$kelompokName][$i]['subtitle']; ?></p>
								<div class="desc-management" style="width:300px;">
									<div class="accordion no-border" id="accordion-3">
										<div class="panel">
											<div class="panel-heading">
												<h5>
													<a class="collapsed text-purple" data-toggle="collapse" href="#collapse2-<?php echo ($i+1); ?>">Read More<i class="fa fa-arrow-down"></i></a>
												</h5>
											</div>
											<!--/ panel-heading -->
											<div id="collapse2-<?php echo ($i+1); ?>" class="panel-collapse collapse">
												<div class="panel-body">
													<?php echo $allGambar[$kelompokName][$i]['content']; ?>
												</div>
												<!-- /panel-body -->
											</div>
											<!-- /collapse2 -->
										</div>
										<!-- /panel -->

									</div>
								</div>
							</li>
							
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Contact -->


<script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.flipster.min.js'); ?>"></script>
<script type="text/javascript">
	var coverflow = $(".flipster").flipster();
</script>
<script type="text/javascript">
	// Stop carousel
	$('.carousel').carousel({
		interval: false
	});
</script>
<script type="text/javascript">
	// Create a clone of the menu, right next to original.
	$('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('transition','all 3s ease').css('margin-top','0').css('z-index','500').removeClass('original').hide();

	scrollIntervalID = setInterval(stickIt, 10);


	function stickIt() {

		var orgElementPos = $('.original').offset();
		orgElementTop = orgElementPos.top;               

		if ($(window).scrollTop() >= (orgElementTop)) {
		// scrolled past the original position; now only show the cloned, sticky element.

		// Cloned element should always have same left position and width as original element.     
		orgElement = $('.original');
		coordsOrgElement = orgElement.offset();
		leftOrgElement = coordsOrgElement.left;  
		widthOrgElement = orgElement.css('width');
		$('.cloned').css('left',leftOrgElement+'px').css('top',75).css('width',widthOrgElement).show();
		$('.original').css('visibility','hidden');
		} else {
		// not scrolled past the menu; only show the original menu.
		$('.cloned').hide();
		$('.original').css('visibility','visible');
		}
	}
</script>
<script type="text/javascript">
	$("#carousel").flipster({
		buttons: true,
		scrollwheel: false
	});
</script>
<script type="text/javascript">
	$("#carousel2").flipster({
		buttons: true,
		scrollwheel: false
	});
</script>
