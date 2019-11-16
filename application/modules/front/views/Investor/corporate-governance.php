
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

				<a href="#governance" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
		<section id="governance" class="investor pdd-vertical-20">
			<div class="container">
				<div class="row">
					<div class="title-big mrg-btm-30" align="center">
						<h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['menu_detail_name']); ?></h2>
						<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="content mrg-top-50">
							<div class="title-big mrg-btm-30">

								<?php if ($this->agent->is_mobile()) { 
									$mobile = 'center';
									?>
								<div align="center">
									<h4 class="hero-heading text-purple"><?php echo strtoupper($allContent[1]['title']); ?></h4>
									<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
								</div>
								<?php } else { ?>

								<h4 class="hero-heading text-purple"><?php echo strtoupper($allContent[1]['title']); ?></h4>
								<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
								<?php } ?>

							</div>
							<div class="content-article">
								<div class="row">
									<div class="col-md-12">
										<?php echo $allContent[1]['content']; ?>
										<div class="col-md-12 icon-whistle pdd-vertical-30">
											<div class="col-md-1 col-sm-1"></div>
											<div class="col-md-2 col-sm-2" align="center">
												<img class="img-responsive mrg-btm-10" src="<?php echo base_url("assets/assets_frontend/images/whistle-1.png"); ?>" alt="">
												<h5>Transparency</h5>
											</div>
											<div class="col-md-2 col-sm-2" align="center">
												<img class="img-responsive mrg-btm-10" src="<?php echo base_url("assets/assets_frontend/images/whistle-3.png"); ?>" alt="">
												<h5>Responsibility</h5>
											</div>
											<div class="col-md-2 col-sm-2" align="center">
												<img class="img-responsive mrg-btm-10" src="<?php echo base_url("assets/assets_frontend/images/whistle-2.png"); ?>" alt="">
												<h5>Independency</h5>
											</div>
											<div class="col-md-2 col-sm-2" align="center">
												<img class="img-responsive mrg-btm-10" src="<?php echo base_url("assets/assets_frontend/images/whistle-5.png"); ?>" alt="">
												<h5>Accountability</h5>
											</div>
											<div class="col-md-2 col-sm-2" align="center">
												<img class="img-responsive mrg-btm-10" src="<?php echo base_url("assets/assets_frontend/images/whistle-4.png"); ?>" alt="">
												<h5>Fairness</h5>
											</div>
											<div class="col-md-1 col-sm-1"></div>
										</div>
										<?php echo $allContent[2]['content']; ?>
									</div>

									<?php if ($this->agent->is_mobile) { $btn = ''; $center = 'center'; 
									} else { $btn='btn'; $center = 'left'; } ?>

									<div class="<?php echo @$btn; ?> mrg-top-30" align="<?php echo $center; ?>"> 
										<a href="mailto:kpe.sera@gmail.com" class="btn btn-md btn-style-purple">CONTACT US</a> 
									</div>

								</div>
							</div>
						</div>
						<?php $no=0; foreach($allContent as $row){ if ($no > 2){ ?>
						<div class="content mrg-top-50">
							<div class="row">
								<div class="title-big mrg-btm-30">
									<h4 class="hero-heading text-purple"><?php echo strtoupper($row['title']); ?></h4>
									<div align="<?php echo $center; ?>">
									<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-".$center.".png"); ?>" alt="">
									</div>
								</div>
								<div class="<?php echo $btn; ?> mrg-top-30" align="<?php echo $center; ?>">
									<a href="https://docs.google.com/viewer?url=<?php echo base_url("uploads/contents/".$row['photo']); ?>" class="btn btn-md btn-style-purple" target="_blank">READ .PDF</a>
								</div>
							</div>
						</div>
						<?php } $no++; } ?>
					</div>
				</div>
			</div>
		</section>
	<!-- /Contact -->