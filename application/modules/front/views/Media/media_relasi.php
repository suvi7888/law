
<!-- Full Screen Slider -->
<header>
    <div class="fs-slider">
        <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
            <div class="carousel-inner">
                    <div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$headline->photo); ?>)">
                    <div class="hero-caption caption-left caption-height-center">
                        <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                    </div>
                    <!--/ hero-caption -->
                </div> 
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
    <div class="block-second-menu menu col-md-12 hidden-xs hidden-sm">
        <div class="breadcrumb pull-left mrg-top-10">
            <ul>
                <li><a href="<?php echo site_url('media'); ?>"><b>Media</b></a></li>
            </ul>
        </div> 
        <div class="breadcrumb pull-right mrg-top-10">
            <ul>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>">News & Event</a></li>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-press'); ?>">Press Releases</a></li>
                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-photo'); ?>">Photos & video</a></li>
                <li><a class="active" href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-relasi'); ?>">Media Relations</a></li>
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
            <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-photo'); ?>">Photos & video</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media-relasi'); ?>">Media Relations</a></li>
        </ul>
    </li>
</ul>
</div>


<div class="clearfix"></div>
<!-- /container -->
</section>

<!-- Contact -->
<section id="relations" class="media-page pdd-vertical-50">
    <div class="container">
        <div class="row">
            <div class="title-big mrg-btm-30" align="center">
                <h2 class="hero-heading text-purple text-center"><?php echo $data->title; ?></h2>
                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="content">
                <div class="col-md-4 mrg-top-50" align="center">
                    <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$data->photo); ?>" alt="">
                </div>
                <div class="col-md-8 mrg-top-50 pdd-vertical-90">
                    <p class="text-grey">Untuk keperluan media, permintaan interview, konfirmasi berita & sponsorship  dapat menghubungi :</p>
                    <div class="contact-media mrg-top-20">
                        <p>Graha SERA, Jl. Mitra Sunter Boulevard Kav. 90/C2 Sunter Jaya - Jakarta Utara 14350</p>
                        <p>+62 (21) 2660 5333</p>
                     <!--   <div class="link-mailto">
                            <a class="mailto" href="mailto:corporate.secretary@sera.astra.co.id">corporate.secretary@sera.astra.co.id</a>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- /cotent -->
        </div>

    </div>
</section>
    <!-- /Contact -->