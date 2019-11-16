 <div class="showcase">
    <section id="first" class="section bg relative">
       <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
         <!-- Overlay -->

         <!-- Indicators --> 
         <ol class="carousel-indicators">
          <?php $i=0; foreach ($carousel as $c) { ?>
          <li data-target="#bs-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0?'active':''); ?>"></li> 
          <?php $i++; } ?>
      </ol>

      <!-- Wrapper for slides -->

        <div class="carousel-inner">
            <?php $i=0; foreach ($carousel as $c) { ?>
            <div class="item slides <?php echo ($i==0?'active':''); ?>">
                <div class="slide-<?php echo ($i+1); ?>" style="background-image:url(<?php echo base_url('uploads/contents/'.$c->photo);?>)">
                    <div class="overlay-home"></div>
                </div>
                <div class="hero">
                    <hgroup>
                        <h1><?php echo @$c->title; ?></h1>
                        <img class="img-responsive mrg-vertical-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">        
                        <h3><?php echo @$c->subtitle; ?></h3>
                    </hgroup>
                </div>
            </div>
            <?php $i++; } ?>  
        </div> 
       </div>
    </section>
<!--/ #first -->

<section id="second" class="section bg relative" style="background-image:url(<?php echo base_url('uploads/contents/'.$ov->photo);?>)">
    <div class="container max-height">
        <div class="cell-vertical-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="pdd-vertical-90" align="center">
                            <h2 class="hero-heading text-purple"><?php echo $ov->title; ?></h2>
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                            <p class="font-weight-norma text-dark mrg-top-15">
                                <?php echo strip_tags($ov->content); ?> 
                            </p>
                            <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'profile'); ?>" class="btn btn-md btn-style-purple mrg-top-30">Read More</a>
                        </div>
                        <!-- /padding -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-2"></div>
                </div>
                <!-- /row -->
            </div>
            <!-- /content -->
        </div>
        <!-- /cell-vertical-container -->
    </div>
    <!-- /container -->
</section>
<!-- /#second -->

<section id="thrid" class="section relative bg-light-gray" style="background-image:url(<?php echo base_url("assets/assets_frontend/images/background/showcase-bg-13.jpg"); ?>)">
    <div class="container max-height">
        <div class="cell-vertical-container">
            <div class="content story">
                <div class="row">
                    <div class="col-md-6 pdd-vertical-40">
                        <?php if ($this->agent->is_mobile()) { ?>
                        <div align="center">
                        <h2 class="hero-heading  text-purple"><?php echo $our->title; ?></h2>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">  
                        </div>
                        <?php } else {  ?>
                        <h2 class="hero-heading  text-purple"><?php echo $our->title; ?></h2>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">  
                        <?php } ?>

                        <br>
                        <?php echo $our->content ; ?>  
                    </div>
                    <!-- /column -->

                      <div class="col-md-6 flip third pdd-vertical-30">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_1->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_2->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                            <div class="row">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_3->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                            <div class="row">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_4->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_5->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_6->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_7->photo); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                            <div class="row">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                            <div class="row">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="row">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$story_8->photo); ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</section>
<!-- /#third -->

<section id="forth" class="section bg parallax relative" style="background-image:url(<?php echo base_url("assets/assets_frontend/images/background/showcase-bg-14.jpg"); ?>)">
    <div class="container max-height">
        <div class="cell-vertical-container">
            <div class="content">
                <div class="row pdd-vertical-60">
                    <div class="col-md-12">
                        <div class="pdd-vertical-30" align="center">
                            <h2 class="hero-heading text-purple">OUR VALUE</h2>
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                            <div class="block-spirit pdd-top-30">
                                <div class="col-md-1 col-sm-1"></div>


                                <?php foreach ($ourvalue as $our) { ?>

                                <div class="col-md-2 col-sm-2">
                                    <div class="block-value" align="center">
                                        <div class="img-value">
                                            <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'profile-value'); ?>">
                                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$our->photo); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="title-value">
                                            <h4><?php echo $our->title; ?></h4>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>

                                <!-- 
                                <div class="col-md-2 col-sm-2">
                                    <div class="block-value" align="center">
                                        <div class="img-value">
                                            <a href="<?php echo site_url('profile-value'); ?>">
                                                <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/home-value-1.png"); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="title-value">
                                            <h4>KUALITAS</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="block-value" align="center">
                                        <div class="img-value">

                                            <a href="<?php echo site_url('profile-value'); ?>">
                                            <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/home-value-2.png"); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="title-value">
                                            <h4>PELAYANAN PELANGGAN</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="block-value" align="center">
                                        <div class="img-value">

                                            <a href="<?php echo site_url('profile-value'); ?>">
                                            <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/home-value-3.png"); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="title-value">
                                            <h4>KERJASAMA</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="block-value" align="center">
                                        <div class="img-value">

                                            <a href="<?php echo site_url('profile-value'); ?>">
                                            <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/home-value-4.png"); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="title-value">
                                            <h4>KEPEMIMPINAN</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="block-value" align="center">
                                        <div class="img-value">

                                            <a href="<?php echo site_url('profile-value'); ?>">
                                            <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/home-value-5.png"); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="title-value">
                                            <h4>INTEGRITAS</h4>
                                        </div>
                                    </div>
                                </div> -->


                                <div class="col-md-1 col-sm-1"></div>
                            </div>
                        </div>
                        <!-- /padding -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </div>
            <!-- /content -->
        </div>
        <!-- /cell-vertical-container -->
    </div>
    <!-- /container -->
</section>


<!-- Our Business -->
<style>
#fivth img.img-responsive{ max-height: 80px; }
</style>
<section id="fivth" class="section bg-light-gray">
    <div class="container max-height"> 
            <div class="content">
                <div class="row pdd-vertical-60">
                    <div class="col-md-12">
                        <div class="block-our" align="center">
                            <h2 class="hero-heading text-purple">OUR SOLUTION</h2>
                            <img class="img-responsive mrg-btm-30" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                            <div class="block-solution">
                                <div class="portfolio portfolio-isotope col-3 gutter">
                                    <div class="folio-item">
                                        <div class="folio-style-1">
                                            <div class="folio-image">
                                                <img class="img-responsive" src="<?php echo base_url('uploads/contents/'.$ourtrans->photo);?>" alt="">
                                            </div>
                                            <!-- folio-image -->
                                            <div class="overlay">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <div class="folio-info">
                                                            <h3 class="text-white"><?php echo $ourtrans->title; ?></h3>
                                                            <!-- <p><?php echo $ourtrans->content; ?></p> -->
                                                        </div>
                                                        <!-- /folio-info -->
                                                        <div class="solution-links">
                                                            <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'our-business'); ?>#first"><i class="ti-angle-right"></i></a>
                                                        </div>
                                                        <!-- folio-links -->
                                                    </div>
                                                    <!-- /overlay-content -->
                                                </div>
                                                <!-- /overlay-caption -->
                                            </div>
                                            <!-- /overlay -->
                                        </div>
                                        <!-- /folio-style -->
                                    </div>
                                    <!-- /folio-item -->

                                    <div class="folio-item">
                                        <div class="folio-style-1">
                                            <div class="folio-image">
                                                <img class="img-responsive" src="<?php echo base_url('uploads/contents/'.$ourcar->photo);?>" alt="">
                                            </div>
                                            <!-- folio-image -->
                                            <div class="overlay">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <div class="folio-info">
                                                            <h3 class="text-white"><?php echo $ourcar->title; ?></h3>
                                                            <!-- <?php echo $ourcar->content; ?> -->
                                                        </div>
                                                        <!-- /folio-info -->
                                                        <div class="solution-links">
                                                            <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'our-business'); ?>#fourth"><i class="ti-angle-right"></i></a>
                                                        </div>
                                                        <!-- folio-links -->
                                                    </div>
                                                    <!-- /overlay-content -->
                                                </div>
                                                <!-- /overlay-caption -->
                                            </div>
                                            <!-- /overlay -->
                                        </div>
                                        <!-- /folio-style -->
                                    </div>
                                    <!-- /folio-item -->

                                    <div class="folio-item">
                                        <div class="folio-style-1">
                                            <div class="folio-image">
                                                <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/solution-3.jpg"); ?>" alt="">
                                            </div>
                                            <!-- folio-image -->
                                            <div class="overlay">
                                                <div class="overlay-caption">
                                                    <div class="overlay-content">
                                                        <div class="folio-info">
                                                            <h3 class="text-white"><?php echo $ourlog->title; ?></h3>
                                                            <!-- <p><?php echo $ourlog->content; ?></p> -->
                                                        </div>
                                                        <!-- /folio-info -->
                                                        <div class="solution-links">
                                                            <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'our-business'); ?>#seventh"><i class="ti-angle-right"></i></a>
                                                        </div>
                                                        <!-- folio-links -->
                                                    </div>
                                                    <!-- /overlay-content -->
                                                </div>
                                                <!-- /overlay-caption -->
                                            </div>
                                            <!-- /overlay -->
                                        </div>
                                        <!-- /folio-style -->
                                    </div>
                                    <!-- /folio-item -->

                                </div>
                                <!-- /portfoilio -->
                            </div>
                        </div>
                        <!-- /padding -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </div>
            <!-- /content -->
        <!-- </div> -->
        <!-- /cell-vertical-container -->
    </div>
    <!-- /container -->
</section>


<section id="sixth" class="section">
    <div class="container max-height">
        <div class="content">
            <!-- <div class="row mrg-btm-70 pdd-vertical-120 mrg-top-50" align="center">  -->
            <div class="row mrg-btm-70 pdd-vertical-120 mrg-top-50" align="center">
                <div class="col-md-12">
                    <h2 class="hero-heading text-purple">A SELECTION OF OUR BRAND</h2>
                    <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">  

                    <div class="owl-5-nav owl-nav-3 owl-nav-arrow owl-carousel mrg-top-100" >
                    <?php foreach ($brand as $bren) { ?> 
                         <div class="item pdd-horizon-5">
                         <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$bren->title); ?>">
                         <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$bren->photo); ?>" alt=""></a></div>
                    <?php } ?>

                       <!--  <div class="item pdd-horizon-5"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'page/29/trac'); ?>"><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-1.jpg"); ?>" alt=""></a></div>
                        <div class="item pdd-horizon-5"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'page/32/mobil88'); ?>"><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-2.jpg"); ?>" alt=""></a></div>
                        <div class="item pdd-horizon-5"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'page/33/ibid-balai-lelang-serasi'); ?>"><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-3.jpg"); ?>" alt=""></a></div>
                        <div class="item pdd-horizon-5"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'page/35/selog'); ?>"><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-4.jpg"); ?>" alt=""></a></div>
                        <div class="item pdd-horizon-5"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'our-business#third'); ?>"><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-5.jpg"); ?>" alt=""></a></div> -->
                    </div>
                    <!-- /owl-carousel -->

                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /content -->
    </div>
    <!-- /container -->
</section>


<section id="seventh" class="section">
    <div class="content max-height">
        <div class="mrg-btm-70" align="center">
            <div class="col-md-6 col-sm-6 block-human block-human-1">
                <div class="row">
                    <div class="news-list">
                        <div class="block-news">
                            <div class="news-img">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$csr->photo); ?>" alt="" style="background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                                <div class="overlay">
                                    <div class="news-info" align="center">
                                        <h4 class="hero-heading text-white"><?php echo $csr->title; ?></h4>
                                        <img class="img-responsive border-bot" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                                    </div>
                                    <!-- /member-info -->

                                    <div class="news-meta">
                                        <div class="desc-asrticle" align="center">
                                            <!-- <p><?php echo $csr->content; ?></p>  -->
                                            <div class="btn-read-more-orange mrg-top-30">
                                                <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'profile-csr'); ?>">Read More&nbsp;<i class="ti-angle-right"></i></a>
                                            </div>
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
            </div>
            <!-- /column -->
            <div class="col-md-6 col-sm-6 block-human block-human-1">
                <div class="row">
                    <div class="news-list">
                        <div class="block-news">
                            <div class="news-img">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$karir->photo); ?>" alt="" style="background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                                <div class="overlay">
                                    <div class="news-info" align="center">
                                        <h4 class="hero-heading text-white"><?php echo $karir->title; ?></h4>
                                        <img class="img-responsive border-bot" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                                    </div>
                                    <!-- /member-info -->

                                    <div class="news-meta">
                                        <div class="desc-asrticle" align="center">
                                            <!-- <p><?php echo $karir->content; ?></p> -->
                                            <div class="btn-read-more-orange mrg-top-30">
                                                <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'career'); ?>">Read More&nbsp;<i class="ti-angle-right"></i></a>
                                            </div>
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
            </div>
            <!-- /column -->
        </div>
        <!-- /row -->
    </div>
    <!-- /content -->
</section>
 
    <section id="ten" class="section">
        <div class="footer-3-column">
            <div class="content pdd-top-90" align="left">
                <div class="container" align="center">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4 pdd-vertical-30">
                    <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'contact'); ?>" class="btn-contact"><i class="fa fa-envelope-o"></i> &nbsp; CONTACT US</a>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
    </section>


</div>
    <!-- /#showcase -->

