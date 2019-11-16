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


                <a href="#corporate-value" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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

    <style type="text/css">

         

    </style>

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
<section id="corporate-value" class="profile pdd-vertical-50">
    <div class="container">
        <div class="row">
            <div class="title-big mrg-btm-30" align="center">
                <h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['title']); ?></h2>
                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                <div class="pdd-vertical-20"><?php echo $allContent[0]['content']; ?></div>
            </div>
        </div>



        <div class="row">
            <!-- /split-box -->
            <?php 
            $no=0; 
            foreach($allContent as $row){ 
                if ($no > 0){
                    if ($no % 2 == 0){
                        ?>
                        <div class="split-box hidden-sm hidden-xs">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 clearfix">
                                        <div class="content border mrg-horizon-30 mrg-vertical-30" align="center">
                                            <h5 class="text-purple hero-heading font-size-30 mrg-btm-30"><?php echo $allContent[$no]['title']; ?></h5>
                                            <?php echo $allContent[$no]['content']; ?>
                                        </div>
                                        <!-- /content -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /container-fluid -->

                            <div class="image-container col-md-offset-6 col-md-6">
                                <div class="background-holder " style="background-image: url(<?php echo base_url("uploads/contents/".$allContent[$no]['photo']); ?>)">
                                </div>
                                <!-- /background-holder -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- /split-box -->
                        <?php
                    } else { ?>
                    <div class="split-box hidden-sm hidden-xs">
                        <div class="image-container col-md-6">
                            <div class="background-holder " style="background-image: url(<?php echo base_url("uploads/contents/".$allContent[$no]['photo']); ?>)">
                            </div>
                            <!-- /background-holder -->
                        </div>
                        <!-- column -->

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-6 col-sm-12 clearfix">
                                    <div class="content border mrg-horizon-30 mrg-vertical-30" align="center">
                                        <h5 class="text-purple hero-heading font-size-30 mrg-btm-30"><?php echo $allContent[$no]['title']; ?></h5>
                                        <?php echo $allContent[$no]['content']; ?>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /container-fluid -->
                    </div>
                    <!-- /split-box -->
                    <?php }
                }
                $no++; 
            } ?>
        </div>
        <!-- /row -->







        <!-- mobile version -->

        <div class="row">
            <?php 
            $no=0; 
            foreach($allContent as $row){ 
                if ($no > 0){
                    if ($no % 2 == 0){
                        ?>

                        <div class="split-box hidden-lg hidden-md">
                            <div class="image-container col-md-6">
                                <div class="background-holder " style="background-image: url(<?php echo base_url("uploads/contents/".$allContent[$no]['photo']); ?>)">
                                </div>
                                <!-- /background-holder -->
                            </div>
                            <!-- column -->

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6 col-sm-12 clearfix">
                                        <div class="content border mrg-horizon-30 mrg-vertical-30" align="center">
                                            <h5 class="text-purple hero-heading font-size-30 mrg-btm-30"><?php echo $allContent[$no]['title']; ?></h5>
                                            <?php echo $allContent[$no]['content']; ?>
                                        </div>
                                        <!-- /content -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /container-fluid -->
                        </div>
                        <!-- /split-box -->



                        <?php } else { ?>

                        <div class="split-box hidden-lg hidden-md">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="image-container col-md-offset-6 col-md-6">
                                        <div class="background-holder " style="background-image: url(<?php echo base_url("uploads/contents/".$allContent[$no]['photo']); ?>)">
                                        </div>
                                        <!-- /background-holder -->
                                    </div>
                                    <!-- column -->
                                    <div class="col-md-6 col-sm-12 clearfix">
                                        <div class="content border mrg-horizon-30 mrg-vertical-30" align="center">
                                            <h5 class="text-purple hero-heading font-size-30 mrg-btm-30"><?php echo $allContent[$no]['title']; ?></h5>
                                            <?php echo $allContent[$no]['content']; ?>
                                        </div>
                                        <!-- /content -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /container-fluid -->

                        </div>
                        <!-- /split-box -->

                        <!-- /split-box -->
                        <?php }
                    }
                    $no++; 
                } ?>

            </div>

            <!-- mobile end -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Contact -->