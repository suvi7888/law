
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

					<a href="#relations" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
					<li><a href="<?php echo base_url('investor-report'); ?>"><b>Investor</b></a></li>
				</ul>
			</div>
			<!-- /pull-left -->
			<div class="breadcrumb pull-right mrg-top-10">
				<ul>
					<?php foreach($submenu as $row){ ?>
					<li><a class="<?php echo $row['slug'] == 'investor-'.$activeMenu ? 'active' : ''; ?>" href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>"><?php echo $row['menu_detail_name']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<!-- /breadcrumb -->
		</div>
		<div class="menu-mobile hidden-lg hidden-md">
			<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">INVESTOR &nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
				<ul class="dropdown-menu">
				<?php foreach($submenu as $row){ ?>
					<li class="">
						<a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>">
							<?php echo $row['slug'] == 'investor-'.$activeMenu ? '<span class="glyphicon glyphicon-chevron-right"></span>' : ''; ?>
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
	<section id="relations" class="media-page pdd-vertical-20">
		<div class="container">
			<div class="row">
				<div class="title-big mrg-btm-30" align="center">
					<h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['menu_detail_name']); ?></h2>
					<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
				</div>
			</div>
			<div class="row"> 
				<?php $no=0; foreach($allContent as $row){ if ($no > 0){ ?>
				<div class="content">
					<div class="col-md-4 mrg-top-50" align="center">
						<img class="img-responsive" src="<?php echo base_url("uploads/contents/".$row['photo']);?>" alt="">
					</div>
					<div class="col-md-8 mrg-top-70">
						<h2 class="no-margin"><?php echo $row['title']; ?></h2>
						<h3 class="no-margin"><?php echo $row['subtitle']; ?></h3>
						<?php echo $row['content']; ?>
					</div>
				</div>
				<?php } $no++; } ?>
				<!-- /cotent -->
			</div>

		</div>
	</section>
	<!-- /Contact -->