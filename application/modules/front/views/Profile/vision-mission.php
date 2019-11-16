<header>
	<div class="fs-slider">
		<div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
			<div class="carousel-inner">
				<div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$allContent[0]['photo']);?>)">
					<div class="hero-caption caption-left caption-height-center">
						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
					</div>
					<!--/ hero-caption -->
				</div>
				<!-- /item -->

				<a href="#vision" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
	<div id="first" class="block-second-menu menu col-md-12 hidden-xs hidden-sm">
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


	<?php if (!$this->agent->is_mobile()) {?>
	<!-- Contact -->
	<section id="vision" class="profile">
		<div class="content max-height">
			<div class="block-mission" align="center">
				<div class="col-md-6 col-sm-6 block-human block-human-2 animated bounceInDown" align="left">
					<div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-100">
						<h3 class="hero-heading text-purple "><?php echo $allContent[1]['title'];?></h3>
						<div class="block-case-study-left mrg-top-20">
							<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png");?>" alt="">
						</div>
						<div class="content-vision">
							<h4 class="text-gray"><?php echo $allContent[1]['content'];?></h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 block-human block-human-1 animated bounceInUp" style="background-image:url(<?php echo base_url("uploads/contents/".$allContent[2]['photo']);?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">

				</div>
				<!-- /column -->
				<!-- /column -->
			</div>
			<!-- /row -->
		</div>
	</section>
	<!-- /Contact -->
	<!-- Contact --> 

	<section id="mission" class="profile">
		<div class="content max-height">
			<div class="block-vision" align="center">
				<div class="col-md-6 col-sm-6 block-human block-human-1" style="background-image:url(<?php echo base_url("uploads/contents/".$allContent[1]['photo']);?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">

				</div>
				<!-- /column -->
				<div class="col-md-6 col-sm-6 block-human block-human-2" align="left">
					<div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-100">
						<h3 class="hero-heading text-purple"><?php echo $allContent[2]['title']; ?></h3>
						<div class="block-case-study-left mrg-top-20">
							<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png");?>" alt="">
						</div>
						<div class="content-vision">
							<h4 class="text-gray"><?php echo $allContent[2]['content']; ?></h4>
						</div>
					</div>
				</div>
				<!-- /column -->
			</div>
			<!-- /row -->
		</div>

	</section>
	<!-- /Contact -->
<?php } else { ?>
		<!-- mobile version -->

    <section id="vision" class="profile hidden-lg hidden-md">
        <div class="content max-height">
            <div class="block-mission" align="center">
                <div class="col-md-6 col-sm-6 block-human block-human-2 animated bounceInDown" align="left">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-100">
                        <h3 class="hero-heading text-purple text-center"><?php echo $allContent[2]['title'];?></h3>
                        <div class="block-case-study-left mrg-top-20">
                        	<div align="center">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png");?>" alt="" >
                        	</div> 
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray"><?php echo $allContent[2]['content'];?></h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 block-human block-human-1 animated bounceInUp" style="background-image:url(<?php echo base_url("uploads/contents/".$allContent[2]['photo']);?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">

                </div>
                <!-- /column -->
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
    </section>

    <!-- mobile end -->

	<!-- mobile version -->

    <section id="mission" class="profile hidden-lg hidden-md">
        <div class="content max-height">
            <div class="block-mission" align="center">
                <div class="col-md-6 col-sm-6 block-human block-human-2 animated bounceInDown" align="left">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-100">
                        <h3 class="hero-heading text-purple text-center"><?php echo $allContent[1]['title'];?></h3>
                        <div class="block-case-study-left mrg-top-20">
                        <div align="center">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png");?>" alt="">
                        </div>
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray"><?php echo $allContent[1]['content'];?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 block-human block-human-1 animated bounceInUp" style="background-image:url(<?php echo base_url("uploads/contents/".$allContent[1]['photo']);?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">

                </div>
                <!-- /column -->
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
    </section>

    <!-- mobile end -->
<?php } ?>
	<div class="clearfix"></div>