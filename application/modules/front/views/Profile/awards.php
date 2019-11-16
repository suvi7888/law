<?php 
$tahun = array();
foreach($allContent as $row){
	if ($row['position'] > 0){
		$title = $row['title'];
		if (!in_array($title, $tahun)) {
			$tahun[] = $title;
		}
		$allGambar[$title][] = $row;
	}
}
arsort($tahun);
foreach($tahun as $key => $val)
	$allTahun[] = $val;
?>

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
				<a href="#awards" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
<section id="awards" class="profile pdd-vertical-20">
	<div class="container">
		<div class="row">
			<div class="title-big mrg-btm-30" align="center">
				<h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['menu_detail_name']); ?></h2>
				<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
			</div>
			
		</div>
		<div class="row">
			<div class="accordion accordion-white mrg-top-30 award" id="accordion">
				<?php 
				for($i=0; $i<count($allTahun); $i++){ 
					$namaTahun = $allTahun[$i];
					?>
				<div class="panel">
					<div class="panel-heading">
						<h5>
							<a class="<?php echo $i==0?'':'collapsed'; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ($i+10); ?>"><?php echo $namaTahun; ?> <i class="ti-angle-down"></i></a>
						</h5>
					</div>
					<!-- /panel-heading -->
					<div id="collapse<?php echo ($i+10); ?>" class="panel-collapse collapse <?php echo $i==0?'in':''; ?>">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="owl-5-nav owl-nav-3 owl-nav-arrow owl-carousel">
								<?php for($idxAwd=0; $idxAwd<count($allGambar[$namaTahun]); $idxAwd++){ ?>
								<div class="item pdd-horizon-5">
									<div class="logo-awards">
										<img class="img-responsive" height="50" src="<?php echo base_url("uploads/contents/".$allGambar[$namaTahun][$idxAwd]['photo']); ?>" alt="">
									</div>
									<div class="desc-award" align="center">
										<h5><?php echo $allGambar[$namaTahun][$idxAwd]['subtitle']; ?></h5>
										<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
										<smal><?php echo strip_tags($allGambar[$namaTahun][$idxAwd]['content']); ?></smal>
									</div>    
								</div>
								<?php } ?>
								
									</div>
								</div>
							</div>
						</div>
						<!-- /panel-body -->
					</div>
					<!-- /collapse3 -->
				</div>
				<!-- /panel -->
				<?php } ?>
			</div>
			<!-- /accordion -->
		</div>

	</div>
</section>
	<!-- /Contact -->