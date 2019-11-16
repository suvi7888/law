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


					<a href="#safety" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
					<li><a href="<?php echo site_url('profile'); ?>"><b>Profile</b></a></li>
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
    <section id="safety" class="profile pdd-vertical-20">
        <div class="container">
            <div class="row">
                <div class="title-big mrg-btm-30" align="center">
                    <h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['menu_detail_name']); ?></h2>
                    <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                </div>
            </div>
            <div class="row mrg-top-50">
                <div class="col-md-5">
                    <img class="img-responsive padding mrg-horizon-auto" src="<?php echo base_url("uploads/contents/".$allContent[1]['photo']); ?>" alt="">
                </div>
                <!-- /column -->
                <div class="col-md-7">
                    <div class="title-big mrg-btm-30 mrg-top-30">
                    <?php if ($this->agent->is_mobile()) { ?>
                    	<div align="center">
                        <h4 class="text-orange"><?php echo $allContent[1]['title']; ?> </h4>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                    	</div>
                        <?php } else { ?>
                        <h4 class="text-orange"><?php echo $allContent[1]['title']; ?> </h4>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        <?php } ?>
                    </div>
                    <?php echo $allContent[1]['content']; ?>

                </div>
                <!-- /column -->

            </div>
            <div class="row mrg-top-30">
                <div class="col-md-12">
                    <?php echo $allContent[2]['content']; ?>
				</div>
                <!-- /column -->
            </div>

        </div>
    </section>
    <!-- /Contact -->