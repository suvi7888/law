
<!-- Full Screen Slider -->
<header>
    <div class="fs-slider">
        <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
            <div class="carousel-inner">
                <div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$carousel->photo); ?>)">
                    <div class="hero-caption caption-left caption-height-center">
                        <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                    </div>
                    <!--/ hero-caption -->  
                </div>
                <!-- /item -->

                <div class="item bg" style="background-image:url(<?php echo base_url("assets/assets_frontend/images//background/header-business.jpg"); ?>)">
                    <div class="hero-caption caption-left caption-height-center">
                        <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                    </div>
                    <!-- /hero-caption -->
                </div>
                <!-- /item -->

                <div class="item" style="background-image:url(<?php echo base_url("assets/assets_frontend/images//background/header-business.jpg"); ?>)">
                    <div class="hero-caption caption-left caption-height-center">
                        <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                    </div>
                    <!-- /hero-caption -->
                </div>
                <!-- /item -->
                <a href="#career" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
            </div>
            <!-- /carousel-inner -->

        </div>
        <!-- /carousel -->
    </div>
    <!-- /fs-slider -->
</header>
<!--/#Full Screen Slider -->

<!-- Contact -->
<section id="career" class="pdd-vertical-50">
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="col-md-12 mrg-top-20">
                    <div class="title-big mrg-btm-30" align="center">
                        <h2 class="hero-heading text-purple text-center"><?php echo $satu->title; ?></h2>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
                    </div>
                    <div class="block-career">
                        <div class="row">
                            <div class="col-md-5" align="center">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$satu->photo); ?>" alt="">
                            </div>
                            <div class="col-md-7">
                                <?php echo $satu->content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="col-md-12 mrg-top-50">
                    <div class="title-big mrg-btm-30" align="center">
                        <h2 class="hero-heading text-purple text-center"><?php echo $dua->title; ?></h2>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
                    </div>
                    <div class="block-career">
                        <div class="row">
                            <div class="col-md-5" align="center">
                                <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$dua->photo); ?>" alt="">
                            </div>
                            <div class="col-md-7">

                                <?php echo $dua->content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /contact-form-1 -->
        </div>
        <!-- /row -->

        <div class="row mrg-top-50">
            <div class="title-big mrg-btm-30" align="center">
                <h2 class="hero-heading text-purple text-center"><?php echo $tiga->title; ?></h2>
                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
            </div>
            <div class="content">
                <div class="col-md-5 mrg-top-20" align="center">
                    <img class="img-responsive" src="<?php echo base_url("uploads/contents/".$tiga->photo); ?>" alt="">
                </div>
                <div class="col-md-7 mrg-top-50">
                    <?php echo $tiga->content; ?>
                </div>
            </div>
            <!-- /cotent -->
        </div>
        <!-- /row -->

        <div class="row mrg-top-80">
            <div class="title-big mrg-btm-70" align="center">
                <h2 class="hero-heading text-purple text-center">MEET OUR PEOPLE</h2>
                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
            </div>
            <div class="container-fluid">

                <div class="portfolio portfolio-isotope masonry col-3">

                    <?php foreach ($foto as $f) { ?>
                    <div class="folio-item">
                        <div class="folio-style-purple">
                            <div class="folio-image">
                                <img src="<?php echo base_url("uploads/contents/".$f->photo); ?>" alt="">
                                <div class="overlay">
                                    <div class="overlay-caption">
                                        <div class="overlay-content">
                                            <div class="folio-info">
                                                <h4 class="folio-tittle text-white"><?php echo $f->title; ?></h4>
                                                <p class="text-white">
                                                 <?php echo strip_tags($f->content); ?>
                                             </p>
                                         </div>
                                         <!-- /folio-info -->
                                     </div>
                                     <!-- /overlay-content -->
                                 </div>
                                 <!-- /overlay-caption -->
                             </div>
                             <!-- /overlay -->
                         </div>
                         <!-- folio-image -->
                     </div>
                     <!-- /folio-style -->
                 </div>
                 <!-- /folio-item -->
                 <?php } ?> 


             </div>
             <!--/ portfolio -->
         </div>
     </div>
     <!-- /row -->

     <div class="row mrg-top-80">
        <div class="title-big mrg-btm-30" align="center">
            <h2 class="hero-heading text-purple text-center"><?php echo $join->title; ?></h2>
            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
        </div>
        <div class="content">
            <div class="col-md-12 mrg-top-20" align="center">
                <?php echo $join->content; ?>
                <div class="btn-read-purple">
                    <a target="_blank" href="http://career.sera.astra.co.id" class="btn btn-md btn-style-purple mrg-top-30">CAREER SERA</a>
                </div>
            </div>
        </div>
        <!-- /cotent -->
    </div>
    <!-- /row -->

</div>
<!-- /container -->
</section>
<!-- /Contact -->
