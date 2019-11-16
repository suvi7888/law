<!-- Full Screen Slider -->
    <header>
        <div class="fs-slider">
            <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="active item bg" style="background-image:url(images/background/header-contact.jpg)">
                        <div class="hero-caption caption-left caption-height-center">
                            <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                        </div>
                        <!--/ hero-caption -->
					</div>
                    <!-- /item -->

                    <div class="item bg" style="background-image:url(images/background/header-contact.jpg)">
                        <div class="hero-caption caption-left caption-height-center">
                            <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                        </div>
                        <!-- /hero-caption -->
                    </div>
                    <!-- /item -->

                    <div class="item" style="background-image:url(images/background/header-contact.jpg)">
                        <div class="hero-caption caption-left caption-height-center">
                            <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                        </div>
                        <!-- /hero-caption -->
                    </div>
                    <!-- /item -->
                    <a href="#privacy" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
                </div>
                <!-- /carousel-inner -->

            </div>
            <!-- /carousel -->
        </div>
        <!-- /fs-slider -->
    </header>
    <!--/#Full Screen Slider -->
	
	<section id="privacy" class="section">
        <div class="container">
            <div class="row">
                <div class="title-big mrg-btm-30" align="center">
                    <h2 class="hero-heading text-purple text-center">SiteMap</h2>
					<img class="img-responsive mrg-btm-15" src="<?php echo base_url('assets/assets_frontend/images/border-center.png'); ?>" alt="">
					<div class="block-content" align="left">
<?php 
$lang = $this->session->userdata('SS_LANG');
$mainMenu = $this->db->query("
	SELECT 
		menu.*, 
		language_name
	FROM menu
	LEFT JOIN master_language b
		ON b.language_id = menu.language_id
	WHERE menu.status = '1' AND b.status = '1'
	ORDER BY menu.[position] ASC")->result();
foreach($mainMenu as $rowMenu){
	$menuName[$rowMenu->menu_id][$rowMenu->language_name] = $rowMenu->menu_name;
}
?>
<ul>
	<!-- Home -->
	<li><a href="<?php echo site_url(); ?>"><?php echo $menuName[1][$lang]; ?></a></li>
	
	<!-- Profile -->
	<li><a href="<?php echo site_url('profile'); ?>"><?php echo $menuName[2][$lang]; ?></a>
		<ol>
			<?php 
			$menuId = 2;
			$subMenu = $this->db->query("
				SELECT * FROM menu_detail
				WHERE status = '1' 
					AND menu_id = '$menuId'
					AND language_id = (select language_id from master_language where language_name = '$lang' )
				ORDER BY [position] ASC
				")->result();
			foreach($subMenu as $rowSubmenu){ ?>
			<li><a href="<?php echo site_url($rowSubmenu->slug); ?>"><?php echo $rowSubmenu->menu_detail_name; ?></a></li>
			<?php }
			?>
		</ol>
	</li>
	
	<!-- Our Solution -->
	<li><a href="<?php echo site_url('our_business'); ?>"><?php echo $menuName[3][$lang]; ?></a></li>
	
	<!-- Investor -->
	<li><a href="<?php echo site_url('investor'); ?>"><?php echo $menuName[4][$lang]; ?></a>
		<ol>
			<?php 
			$menuId = 4;
			$subMenu = $this->db->query("
				SELECT * FROM menu_detail
				WHERE status = '1' 
					AND menu_id = '$menuId'
					AND language_id = (select language_id from master_language where language_name = '$lang' )
				ORDER BY [position] ASC
				")->result();
			foreach($subMenu as $rowSubmenu){ ?>
			<li><a href="<?php echo site_url($rowSubmenu->slug); ?>"><?php echo $rowSubmenu->menu_detail_name; ?></a></li>
			<?php }
			?>
		</ol>
	</li>
	
	<!-- Media -->
	<li><a href="<?php echo site_url('media'); ?>"><?php echo $menuName[5][$lang]; ?></a>
		<ol>
			<li><a href="<?php echo site_url('media'); ?>">News & Event</a>
				<ol>
					<?php foreach ($news as $n) { ?>
					<li>
						<a href="<?php echo site_url('news/'.date('Y',strtotime($n->datepost)).'/'.date('m',strtotime($n->datepost)).'/'.$n->slug); ?>">
							<?php echo $n->title; ?>
						</a>
					</li>
					<?php } ?>
					
					<?php foreach ($info as $n) { ?>
					<li>
						<a href="<?php echo site_url('news/'.date('Y',strtotime($n->datepost)).'/'.date('m',strtotime($n->datepost)).'/'.$n->slug); ?>">
							<?php echo $n->title; ?>
						</a>
					</li>
					<?php } ?>
				</ol>
			</li>
			<li><a href="<?php echo site_url('media/press/'); ?>">Press Releases</a></li>
			<!-- li><a href="<?php echo site_url('media/photo/'); ?>">Photos & video</a></li -->
			<li><a href="<?php echo site_url('media/relasi/'); ?>">Media Relations</a></li>
		</ol>
	</li>
	
	<!-- Career -->
	<li><a href="<?php echo site_url('career'); ?>"><?php echo $menuName[6][$lang]; ?></a></li>
	
	<!-- Contact Us -->
	<li><a href="<?php echo site_url('contact'); ?>"><?php echo $menuName[7][$lang]; ?></a></li>
</ul>
					</div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>