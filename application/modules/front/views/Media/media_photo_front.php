
<!-- Full Screen Slider -->
<header>
    <div class="fs-slider">
        <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
            <div class="carousel-inner">
               <div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$headline->photo); ?>)">
                    <div class="hero-caption caption-left caption-height-center">
                        <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                    </div>
                    <!--/ hero-caption --> </div>
                    <!-- /item -->

                    <a href="#photos" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
        <div class="block-second-menu menu col-md-12 hidden-xs hidden-sm">
            <div class="breadcrumb pull-left mrg-top-10">
                <ul>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>"><b>Media</b></a></li>
                </ul>
            </div> 
            <div class="breadcrumb pull-right mrg-top-10">
                <ul>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>">News & Event</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-press'); ?>">Press Releases</a></li>
                    <li><a class="active" href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-photo'); ?>">Photos & video</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-relasi'); ?>">Media Relations</a></li>
                </ul>
            </div> 
        </div>

        <div class="menu-mobile hidden-lg hidden-md">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEDIA &nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>">News & Event</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-press'); ?>">Press Releases</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-photo'); ?>"><span class="glyphicon glyphicon-chevron-right"></span> Photos & video</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-relasi'); ?>">Media Relations</a></li>
            </ul>
        </li>
    </ul>
</div>


<div class="clearfix"></div>
<!-- /container -->
</section>
<!-- /Heading Style 1 -->

<!-- Contact -->
<section id="photos" class="media-page pdd-vertical-50">
    <div class="container">
        <div class="row">
            <div class="title-big mrg-btm-30" align="center">
                <h2 class="hero-heading text-purple text-center">PHOTOS & VIDEOS</h2>
                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">

            </div>
        </div>
        <div class="container-fluid">
            <div class="portfolio-filter-group folio-fillter-3 mrg-btm-50 mrg-vertical-30 text-center">
                <a href="#" data-filter=".photo" class="iso-button">Photo</a>
                <a href="#" data-filter=".video" class="iso-button">Video</a>
            </div>
            <!-- portfolio-filter -->

            <div class="portfolio portfolio-isotope masonry col-3">

                <?php foreach ($thisPhoto as $n) { ?>

                <div class="folio-item <?php echo strtolower($n->category_name); ?>">
                    <a href="<?php echo base_url("uploads/news/".$n->gambar); ?>" class="folio-style-3 lightbox-image mfp-image">
                        <div class="folio-image">
                            <img src="<?php echo base_url("uploads/news/".$n->gambar); ?>" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="folio-info">
                                            <div class="icon-marker">
                                                <i class="ti-search text-white"></i>
                                            </div>
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </a> 
                </div>    

                <?php } ?> 
				<?php foreach ($thisVideo as $n) { ?>

                <div class="folio-item <?php echo strtolower($n->category_name); ?>">
                    <a href="<?php echo base_url("uploads/news/".$n->gambar); ?>" class="folio-style-3 lightbox-image mfp-image">
                        <div class="folio-image">
                            <img src="<?php echo base_url("uploads/news/".$n->gambar); ?>" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="folio-info">
                                            <div class="icon-marker">
                                                <i class="ti-search text-white"></i>
                                            </div>
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </a> 
                </div>    

                <?php } ?> 

            </div>
            <!--/ portfolio -->
			<?php echo $this->pagination->create_links(); ?>  
        </div>
        <!-- /container -->
    </div>
</section>
    <!-- /Contact -->