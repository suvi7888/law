<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo @$title; ?></title>
     <meta name="keywords"  content="Serasi Autoraya, IBID, SELOG, TRAC, ORENZ Taxi,Mobil88 TRANSPORT SOLUTION, USED CAR SALES,LOGISTICS SERVICES">
    <meta name="description" content="PT Serasi Autoraya (SERA) is a subsidiary of PT Astra International Tbk in Infrastructure and Logistics division TRANSPORT SOLUTION, USED CAR SALES,LOGISTICS SERVICES">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="theme-color" content="#f26522" /> 
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo base_url("assets/assets_frontend/images/logo/fav-icon.png"); ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/bootstrap.min.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/animate.min.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/font-awesome.min.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/themify-icons.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/YTPlayer.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/owl.carousel.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/magnific-popup.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/js/revolutionslider/css/settings.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/js/revolutionslider/css/navigation.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/main.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/assets_frontend/css/responsive.css");?>" />
    
    <?php 

    $ga = $this->db->query("SELECT ga FROM settings ")->row();
    if (!empty($ga->ga)) {
        echo "<script type='text/javascript'>";
        echo $ga->ga;
        echo "</script>";
    }
     ?>

   
    <?php  
    $tahun = date("Y")+1; 
 
    if(!isset($_COOKIE['seraweb'])) { 

        if (!$this->agent->is_mobile()) {
            $acept = 'class="fa fa-check"';
        } else { $acept = '';}
        ?>  
         <div id="ssBarCookie" class="cookie-container cookie">
            <p class="text-gray">This site uses cookie, to continue browsing this site means you agree to our cookie policy <a href="<?php echo site_url('cookies'); ?>" class="text-dark" 
            >Find out more here</a>. Use Latest Chrome version for the best experience.</p>
            <!-- button id="ssCookie" onclick="document.cookie=&quot;seraweb=setujucookies;expires=Wed, 18 Dec <?php echo $tahun; ?> 12:00:00 GMT&quot;" alt="Accept cookies" <?php echo $acept; ?>><i class="fa fa-check">&nbsp;</i></button -->
            <button id="ssCookie" alt="Accept cookies" <?php echo $acept; ?> style="float: right;"><i class="fa fa-check">&nbsp;</i></button>
        </div>
	<script>
	$('#ssCookie').click(function(){
		var date = new Date();
		console.log(date);
		console.log(date.getTime());
		date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
		console.log(date.toGMTString());
		document.cookie = "seraweb=setujucookies;expires=" + date.toGMTString() + "";
		$('#ssBarCookie').css('display','none');
	});
	</script>
    <?php } ?> 

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

    <nav class="main-nav menu-light menu-transparent js-transparent">
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
                            <li class="satu-indonesia"> 
                                <img height="40" src="<?php echo base_url('uploads/contents/'.$ina->photo); ?>" alt="SERA"> 
                            </li>
                            <li>
                                <!-- Bahasa -->
                                <div class="btn-language">
                                    <label><a class="in <?php echo $lang == 'ID' ? 'active' : ''; ?>" href="<?php echo base_url(str_replace('en.html','id.html',str_replace('/en/','/id/',$_SERVER['PATH_INFO']))); ?>">ID</a></label>
									<label><a class="en <?php echo $lang == 'EN' ? 'active' : ''; ?>" href="<?php echo base_url(str_replace('id.html','en.html',str_replace('/id/','/en/',$_SERVER['PATH_INFO']))); ?>">EN</a></label>
                                </div> 
                                <!-- Bahasa -->
                            </li>
                            <li class="burger-menu">
                                <!-- Navigation -->
                                <div class="fs-menu-button">
                                    <a href="javascript:void(0)" class="ti-menu fs-menu-trigger"></a>
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

        <a href="javascript:void(0)" class="fs-menu-close ti-close"></a>

        <div class="container">
            <div class="inner-nav">
                <ul>
                    <li><a href="<?php echo site_url(); ?>"><img height="100" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></a></li>
                    <li> <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG'))); ?>">Home</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'profile'); ?>">Profile</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'our-business'); ?>">Our Solution</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'investor'); ?>">Investor</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>">Media</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'career'); ?>">Career</a></li>
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'contact'); ?>">Contact Us</a></li>
                    <li><a class="linked-in-menu" href="https://www.linkedin.com/company/448420?trk=prof-exp-company-name">in</a></li>
                </ul>
            </div>
            <!-- /inner-nav -->

        </div>
        <!-- /container -->
    </div>
    <!-- /fs-menu -->

    <section id="detail" class="bg-white">
      <?php foreach($allContent as $row){ ?>
      <div class="split-box">
       <div class="col-md-6 col-sm-6 block-human" style="background-image:url(<?php echo base_url("uploads/contents/".$row['photo']); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);"></div>

       <div class="col-md-6 col-sm-6 block-human bg-white" align="left">
        <div class="block-case-study-right pdd-vertical-30 pdd-horizon-50 mrg-top-20">


         <?php if ($row['photo_litle'] != ''){ ?>
         <?php if ($this->agent->is_mobile()) { ?>

         <div align="center">
             <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$row['photo_litle']); ?>" alt="">
         </div>
         <?php } else { ?> 
         <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$row['photo_litle']); ?>" alt="">
         <?php } ?>

         <?php } else { ?>

         <?php if ($this->agent->is_mobile()) { ?>
         <h3 class="hero-heading text-purple text-center"><?php echo $row['title']; ?></h4>
             <?php } else { ?>
             <h3 class="hero-heading text-purple"><?php echo $row['title']; ?></h4>
                 <?php } ?>
                 <?php } ?>
                 <!-- h3 class="hero-heading text-purple">TRANSPORT SOLUTION</h3 -->
                 <div class="block-case-study-left mrg-top-20">

                     <?php if ($this->agent->is_mobile()) { ?>
                     <div align="center">
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
                    </div>
                    <?php } else { ?>
                    <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                    <?php } ?>
                </div>
                <div class="content-vision">
                    <h4 class="text-gray">
                       <?php   
                                            // if (trim(strtolower($row['content'])) == '<p>no-loadmore</p>') 

                              if ( trim(strip_tags($row['content'])) !== 'no-loadmore'){
                                                
                             echo strip_tags($row['subtitle']);
                             echo 
                                "
                                <div class='btn-read-more mrg-top-50'>
                                    <center>
                                    <a href='".site_url('page/'.$row['content_id'].'/'.slug($row['title']))."'> Read More</a>
                                    </center>
                                </div>
                                "; 

                                            } else { echo strip_tags($row['subtitle']); }


                            /* if ( trim($row['subtitle']) !== 'kosong' and !empty($row['subtitle'])) { 
                                echo 
                                "
                                <div class='btn-read-more mrg-top-50'>
                                    <a href='".site_url('front/page/index/'.$row['content_id'].'/'.slug($row['title']))."' target='_blank'> Read More</a>
                                </div>
                                "; 
                            }*/

                            ?> 
                   </h4>
               </div>
           </div>
       </div>
   </div>	
   <?php } ?>
</section>

<div class="clearfix"></div>

<!-- mobile version -->
<!-- mobile end -->

<!-- Footer -->
<footer class="bg-light-blue thin">
    <div class="block-footer">
        <div class="content">
            <div class="footer-middle container pdd-vertical-15">
                <div class="col-sm-4 col-md-4 col-sm-12">
                    <div class="widget">
                        <div class="widget-tittle">
                            <h4 class="text-purple">Our Solution</h4>
                        </div>
                        <!-- widget-tittle -->

                        <div class="link-widget solution">
                            <ul>
                                <li><h4>Transportation Solution</h4></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; TRAC - Astra Rent Car</a></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; ORENZ Taxi</a></li>
                                <li><h4>Used Car Sales</h4></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; mobil88</a></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; IBID - Balai Lelang Serasi</a></li>
                                <li><h4>Logistic Services</h4></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; SELOG</a></li>
                            </ul>
                        </div>
                        <!-- link-widget -->
                    </div>
                </div>
                <!-- /column -->

                <div class="col-sm-3 col-md-3 col-sm-12">
                    <div class="widget">
                        <div class="widget-tittle">
                            <h4 class="text-purple">About Us</h4>
                        </div>
                        <!-- widget-tittle -->

                        <div class="link-widget">
                            <ul>
                                <li><a href="<?php echo site_url('profile'); ?>">Profile</a></li>
                                <li><a href="<?php echo site_url('investor'); ?>">Investor</a></li>
                                <li><a href="<?php echo site_url('media'); ?>">Media</a></li>
                                <li><a href="<?php echo site_url('career'); ?>">Career</a></li>
                                <li><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- link-widget -->

                        <div class="widget-tittle">
                            <h4 class="text-purple">SITE</h4>
                        </div>

                        <div class="link-widget">
                            <ul>
                                <li><a href="#">Privacy &amp; Policy</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /widget -->
                </div>
                <!-- /column -->

                <div class="col-md-5 col-sm-12">
                    <div class="widget">

                        <div class="link-widget business-link">
                            <ul>
                                <li>Our Business :</li>
                                <li>
                                    <div class="link-business row">
                                        <div class="col-md-12">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="#">   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-5.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="#">   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-3.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="#">   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-2.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="#">   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-1.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="#">   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-4.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- link-widget -->

                        <div class="link-widget">
                            <ul>
                                <li>Connect With Us :</li>
                                <li>
                                    <div class="link-linkedin">
                                        <a href="https://www.linkedin.com/company/448420?trk=prof-exp-company-name" class="linkedin">in</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- link-widget -->

                    </div>
                </div>
                <!-- /column -->
            </div>

            <div class="footer-bottom bg-purple" align="center">
                <div class="container">
                    <small class="copyright text-white">&nbsp; Copyright PT Serasi Autoraya 2016</small>
                    <!-- /social-icon -->
                </div>
                <!-- /container -->
            </div>
            <!-- /footer-cover -->
        </div>
        <!-- /content -->
    </div>
</footer>

<!-- Back to top -->
<a href="#" id="back-to-top" title="Back to top"><i class="ti-angle-up"></i></a>
<!-- /Back to top -->



<!-- Java Script -->
<!-- JS Plugin -->
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
<script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/main.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/assets_frontend/js/jquery.waypoints.js");?>"></script>
<!-- revolution slider setup -->


</body>

</html>
<!-- Localized -->