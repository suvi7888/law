<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo @$title; ?></title>
    <meta name="description" content="Multipurpose HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON --> 
    <link rel="shortcut icon" href="<?php echo base_url('assets/assets_frontend/images/logo/icon.png'); ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/bootstrap.min.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/animate.min.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/font-awesome.min.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/themify-icons.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/YTPlayer.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/owl.carousel.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/jquery.multiscroll.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/examples.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/magnific-popup.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/js/revolutionslider/css/settings.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/js/revolutionslider/css/navigation.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/main.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/responsive.css");?>" />
    <style>
        ::-webkit-scrollbar {
            display: none;
        }

        p {
            font-size: 13px;
            letter-spacing: 1px;
        }
    </style>

</head>

<body>
    <!-- Pageloader -->
    <div class="page-loader">
        <div class="loader">
            <div class='loader-style-1 panelLoad'>
                <div class='cube-face cube-face-front'><img width="75" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-sera-white.png");?>" alt="SERA"></div>
                <div class='cube-face cube-face-back'><img width="75" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-sera-white.png"); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-left'><img width="75" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-sera-white.png"); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-right'><img width="75" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-sera-white.png");?>" alt="SERA"></div>
                <div class='cube-face cube-face-bottom'><img width="75" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-sera-white.png"); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-top'><img width="75" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-sera-white.png"); ?>" alt="SERA"></div>
            </div>
            <!-- /Cube panelload -->
            <span class="cube-face"></span>
        </div>
        <!-- /loader -->
    </div>
    <!-- /Page-loader -->



    <!-- Navigation -->

    
    <nav class="main-nav menu-light menu-transparent menu-split solution">
        <div class="container">
            <div class="navbar">
                <div class="brand-logo">

                    <?php  
                    $logo = $this->db->query("SELECT * from menu_content a inner join master_language b on a.language_id = b.language_id where a.content_id = '22' and b.language_name = 'ID' and a.status = '1' ")->row();

                    $ina = $this->db->query("SELECT * from menu_content a inner join master_language b on a.language_id = b.language_id where a.content_id = '23' and b.language_name = 'ID' and a.status = '1' ")->row();  ?> 

                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <img src="<?php echo base_url('uploads/contents/'.$logo->photo); ?>" alt="SERA">
                    </a>
                </div>
                <!-- brand-logo -->

                <div class="navbar-header">
                    <div class="inner-nav right-nav">
                        <ul>
                            <li class="linkedin">
                                <a href="#" class="linkedin-head">
                                    <img height="40" src="<?php echo base_url('uploads/contents/'.$ina->photo); ?>" alt="SERA">
                                </a>
                            </li>
                            <li>
                                <!-- Bahasa -->
                                <div class="btn-language">
                                    <label><a class="in <?php echo (empty($_GET['lang'])?'active':''); ?>" href="?lang=ID">IN</a></label>
                                    <label><a class="en <?php echo (isset($_GET['lang'])=='EN'?'active':''); ?>" href="?lang=EN">EN</a></label>
                                </div> 
                                <!-- Bahasa -->
                            </li>
                            <li class="burger-menu">
                                <!-- Navigation -->
                                <div class="fs-menu-button">
                                    <a href="#" class="ti-menu fs-menu-trigger"></a>
                                </div>
                                <!-- / fs-menu-button -->
                            </li>
                            <!-- /collapse-menu -->

                        </ul>
                    </div>
                    <!-- /right-nav -->
                </div>
                <!-- navbar-header -->
            </div>
            <!-- /navbar -->
        </div>
        <!-- /container -->
    </nav>
    <!--/#Navigation-->

    <div class="fs-menu">

        <a href="#" class="fs-menu-close ti-close"></a>

        <div class="container">
            <div class="inner-nav">
                <ul>
                    <li style="animation-delay: 0.1s;"><a href="<?php echo site_url(); ?>"><img height="100" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></a></li>
                    <li style="animation-delay: 0.2s;"> <a href="<?php echo site_url(); ?>">Home</a></li>
                    <li style="animation-delay: 0.35s;"><a href="<?php echo site_url('profile'.@$lang); ?>">Profile</a></li>
                    <li style="animation-delay: 0.45s;"><a href="<?php echo site_url('our_business'); ?>">Our Solution</a></li>
                    <li style="animation-delay: 0.55s;"><a href="<?php echo site_url('investor'); ?>">Investor</a></li>
                    <li style="animation-delay: 0.65s;"><a href="<?php echo site_url('media'); ?>">Media</a></li>
                    <li style="animation-delay: 0.75s;"><a href="<?php echo site_url('career'); ?>">Career</a></li>
                    <li style="animation-delay: 0.85s;"><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
                    <li style="animation-delay: 0.95s;"><a class="linked-in-menu" href="https://www.linkedin.com/company/448420?trk=prof-exp-company-name">in</a></li>
                </ul>
            </div>
            <!-- /inner-nav -->

        </div>
        <!-- /container -->
    </div>
    <!-- /fs-menu --> 

    <div class="split-slider" style="position:relative; overflow:hidden; height:100vh;">

        <div id="myContainer">

            <div class="ms-left">
                <div class="ms-section overlay-orange" id="left1" style="background-image:url(<?php echo base_url("uploads/contents/".$pertama->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>

                <div class="ms-section" id="left2">
                    <div class="block-case-study-right pdd-vertical-70 pdd-horizon-50 mrg-top-25" align="left">
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/business-logo-1.jpg"); ?>" alt="">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                        <?php echo substr($kedua->content, 0,200); ?>
                        <!-- 
                            <h4 class="text-gray mrg-btm-20">TRAC provides wide range of services, from corporate rental (long-term), individual rental (short-term),bus services, motor rental,to driver services. </h4> -->
                            <div class="btn-read-more mrg-top-50">
                                <a href="page-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-section overlay-orange" id="left3" style="background-image:url(<?php echo base_url("uploads/contents/".$orenz->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>

                <div class="ms-section" id="left4">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-75" align="left">
                        <h3 class="hero-heading text-purple"><?php echo $car->title; ?></h4>
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray"><?php echo $car->content; ?> </h4>
                        </div>
                    </div>
                </div>
                <div class="ms-section overlay-orange" id="left5" style="background-image:url(<?php echo base_url("uploads/contents/".$mobil->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>

                <div class="ms-section" id="left6">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-75" align="left">
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/business-logo-4.jpg"); ?>" alt="">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray mrg-btm-20"><?php echo $ibid->content; ?>
                            </h4>
                            <div class="btn-read-more mrg-top-50">
                                <a href="page-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-section overlay-orange" id="left7" style="background-image:url(<?php echo base_url("uploads/contents/".$logistik->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>

                <div class="ms-section" id="left8">
                    <div class="block-case-study-right pdd-vertical-70 pdd-horizon-50 mrg-top-50" align="left">
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/business-logo-5.jpg"); ?>" alt="">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray mrg-btm-20"><?php echo $selog->content; ?>
                            </h4>
                            <div class="btn-read-more mrg-top-50">
                                <a href="page-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="ms-right">
                <div class="ms-section" id="right1">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-50" align="left">
                        <h3 class="hero-heading text-purple"><?php echo $pertama->title; ?></h4>
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <!-- <h4 class="text-gray"> -->
                            <?php echo substr($pertama->content, 0,200); 
                             ?>
                            <!-- </h4> -->
                        </div>
                    </div>
                </div>

                <div class="ms-section overlay-orange" id="right2" style="background-image:url(<?php echo base_url("uploads/contents/".$kedua->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>

                <!-- End Kedua  -->



                <div class="ms-section" id="right3">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-50" align="left">
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/business-logo-2.jpg"); ?>" alt="">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <?php echo $orenz->content; ?>
                            <div class="btn-read-more mrg-top-50">
                                <a href="page-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-section overlay-orange" id="right4" style="background-image:url(<?php echo base_url("uploads/contents/".$car->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>
                <div class="ms-section" id="right5">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-40" align="left">
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/business-logo-3.jpg"); ?>" alt="">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray mrg-btm-20"><?php echo $mobil->content; ?>
                            </h4>
                            <div class="btn-read-more mrg-top-50">
                                <a href="page-detail.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-section overlay-orange" id="right6" style="background-image:url(<?php echo base_url("uploads/contents/".$ibid->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>

                <div class="ms-section" id="right7">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-60" align="left">
                        <h3 class="hero-heading text-purple"><?php echo $logistik->title; ?></h4>
                        <div class="block-case-study-left mrg-top-20">
                            <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                        </div>
                        <div class="content-vision">
                            <h4 class="text-gray"><?php echo $logistik->content; ?></h4>
                        </div>
                    </div>
                </div>

                <div class="ms-section overlay-orange" id="right8" style="background-image:url(<?php echo base_url("uploads/contents/".$selog->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
                </div>
            </div>  
        </div>

    </div>

    <!-- mobile version -->


    <!-- mobile end -->

    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="ti-angle-up"></i></a>
    <!-- /Back to top -->


    <!-- Java Script -->
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery-2.1.4.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/bootstrap.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.fitvids.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.mb.YTPlayer.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/owl.carousel.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/wow.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.parallax-1.1.3.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.countTo.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.countdown.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.appear.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/smoothscroll.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.magnific-popup.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/imagesloaded.pkgd.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/isotope.pkgd.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/email.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.easings.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.multiscroll.js");?>"></script> 
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.fullPage.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/jquery.themepunch.revolution.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/jquery.themepunch.tools.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.video.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.slideanims.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.actions.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.kenburn.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.navigation.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.migration.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/revolutionslider/js/extensions/revolution.extension.parallax.min.js");?>"></script>
    <!-- revolution slider setup -->
    <script type="text/javascript">


     $(document).ready(function() {
            $('#myContainer').multiscroll({
                sectionsColor: ['#fff', '#fff'],
                anchors: ['first', 'second','third','fourth','fifth','sixth','seventh','eighth'],
                menu: '#menu',
                navigation: true,
                loopBottom: false,
                loopTop: false
            });
        });
    </script>
    <script>
        //ShowCase
        function ShowcaseLoading() {
            var ShowcaseCreated = false;
            isPhoneDevice = "ontouchstart" in document.documentElement;
            Showcase();

            $(window).on('load resize', function() {
                if ($(this).width() < 992) {
                    ShowcaseCreated = true;
                    $.fn.fullpage.destroy('all');
                } else {
                    Showcase();
                }
            });

            function Showcase() {
                $('.showcase').each(function() {
                    var $this = $(this);
                    if (ShowcaseCreated === false) {
                        ShowcaseCreated = true;
                        $this.fullpage({
                            anchors: ['Home', 'Visi', 'Misi', 'Footer'],
                            navigation: true,
                            navigationPosition: 'left',
                            scrollBar: true,
                        });
                    }
                });
            }
        }

        if ($('.showcase').length > 0) {
            ShowcaseLoading();
        }
    </script>
    <!-- /Page Exclusive JS-->
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/main.js'); ?>"></script>
</body>

</html>
<!-- Localized -->