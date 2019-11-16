<?php 

function bataskata($string, $word_limit) {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo @$title; ?></title>
    <meta name="keywords"  content="Serasi Autoraya, IBID, SELOG, TRAC, ORENZ Taxi,Mobil88 TRANSPORT SOLUTION, USED CAR SALES,LOGISTICS SERVICES">
    <meta name="description" content="PT Serasi Autoraya (SERA) is a subsidiary of PT Astra International Tbk in Infrastructure and Logistics division TRANSPORT SOLUTION, USED CAR SALES,LOGISTICS SERVICES">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Multipurpose HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo base_url("assets/assets_frontend/images/logo/icon.png"); ?>">

    <?php 

    $ga = $this->db->query("SELECT ga FROM settings ")->row();
    if (!empty($ga->ga)) {
        echo "<script>";
        echo $ga->ga;
        echo "</script>";
    }
    ?>


    <?php  
    $tahun          = date("Y")+1; 

    if(!isset($_COOKIE['seraweb'])) { ?>  
    <div class="cookie-container cookie">
        <p class="text-gray">This site uses cookie, to continue browsing this site means you agree to our cookie policy <a href="<?php echo site_url('cookies'); ?>" class="text-dark" 
            >Find out more here</a>. Use Latest Chrome version for the best experience.</p>
            <button onclick="document.cookie=&quot;seraweb=setujucookies;expires=Wed, 18 Dec <?php echo $tahun; ?> 12:00:00 GMT&quot;" alt="Accept cookies" class="fa fa-check"></button>
        </div>


        <?php } ?>


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
                                        <label><a class="in <?php echo $lang == 'ID' ? 'active' : ''; ?>" href="<?php echo base_url(str_replace('en.html','id.html',str_replace('/en/','/id/',$_SERVER['PATH_INFO']))); ?>">ID</a></label>
										<label><a class="en <?php echo $lang == 'EN' ? 'active' : ''; ?>" href="<?php echo base_url(str_replace('id.html','en.html',str_replace('/id/','/en/',$_SERVER['PATH_INFO']))); ?>">EN</a></label>
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
                        <li style="animation-delay: 0.2s;"> <a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG'))); ?>">Home</a></li>
                        <li style="animation-delay: 0.35s;"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'profile'); ?>">Profile</a></li>
                        <li style="animation-delay: 0.45s;"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'our-business'); ?>">Our Solution</a></li>
                        <li style="animation-delay: 0.55s;"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'investor'); ?>">Investor</a></li>
                        <li style="animation-delay: 0.65s;"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>">Media</a></li>
                        <li style="animation-delay: 0.75s;"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'career'); ?>">Career</a></li>
                        <li style="animation-delay: 0.85s;"><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'contact'); ?>">Contact Us</a></li>
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
                    <?php 
                    $no=0; 
                    foreach($allContent as $row){ 
                     $no++;
                     if ($no % 2 != 0){ ?> 

                     <div class="ms-section overlay-orange" id="left<?php echo $no;?>" style="background-image:url(<?php echo base_url("uploads/contents/".$row['photo']); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);"></div>
                     <?php } else { ?>

                     <div class="ms-section" id="left<?php echo $no;?>">
                        <div class="block-case-study-right pdd-vertical-70 pdd-horizon-50 mrg-top-25" align="left">
                            <div class="block-case-study-left mrg-top-20">

                               <?php if ($row['photo_litle'] != ''){ ?>
                               <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$row['photo_litle']); ?>" alt="">
                               <?php } else { ?>
                               <h3 class="hero-heading text-purple"><?php echo $row['title']; ?></h4>
                                <?php } ?>

                                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                            </div>
                            <div class="content-vision">
                             <?php   
                                            // if (trim(strtolower($row['content'])) == '<p>no-loadmore</p>') 

                              if ( trim(strip_tags($row['content'])) !== 'no-loadmore'){
                                                
                             echo strip_tags($row['subtitle']);
                             echo 
                                "
                                <div class='btn-read-more mrg-top-50'>
                                    <a href='".site_url('page/'.$row['content_id'].'/'.slug($row['title']))."'> Read More</a>
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

                            <div class="modal fade" id="modal-id<?php echo $no;?>">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                                     </div>
                                     <div class="modal-body">

                                      <?php if ($row['photo_litle'] != ''){ ?>
                                      <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$row['photo_litle']); ?>" alt="">
                                      <?php } else { ?>
                                      <h3 class="hero-heading text-purple"><?php echo $row['title']; ?></h4>
                                        <?php } ?>


                                        <?php echo strip_tags($row['content']); ?>
                                    </div> 
                                </div>
                            </div>
                        </div>
<!-- 
                                <?php   

                                if ( strlen($row['content']) > 200) { ?>
                                <div class="btn-read-more mrg-top-50">
                                    <a data-toggle="modal" href='#modal-id<?php echo $no;?>'>Read More</a>
                                </div>
                                <?php } ?>
                            -->
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
            </div>

            <div class="ms-right">
                <?php 
                $no=0; 
                foreach($allContent as $row){ 
                 $no++;
                 if ($no % 2 != 0){ ?>
                 <div class="ms-section" id="right<?php echo $no;?>">
                    <div class="block-case-study-right pdd-vertical-120 pdd-horizon-50 mrg-top-50" align="left">

                        <?php if ($row['photo_litle'] != ''){ ?>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$row['photo_litle']); ?>" alt="">
                        <?php } else { ?>
                        <h3 class="hero-heading text-purple"><?php echo $row['title']; ?></h4>
                            <?php } ?>


                            <!-- <h3 class="hero-heading text-purple"><?php echo $row['photo_litle']; ?></h4> -->
                            <div class="block-case-study-left mrg-top-20">
                                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                            </div>


                            <div class="content-vision"> 

                              <?php    
                              echo strip_tags($row['subtitle']); 

                              if ( trim(strip_tags($row['content'])) !== 'no-loadmore') { 
                                echo 
                                "
                                <div class='btn-read-more mrg-top-50'>
                                    <a href='".site_url('page/'.$row['content_id'].'/'.slug($row['title']))."'> Read More</a>
                                </div>
                                "; 
                            }

                            ?> 

                            <div class="modal fade" id="modal-id<?php echo $no;?>">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                                     </div>
                                     <div class="modal-body">

                                      <?php if ($row['photo_litle'] != ''){ ?>
                                      <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$row['photo_litle']); ?>" alt="">
                                      <?php } else { ?>
                                      <h3 class="hero-heading text-purple"><?php echo $row['title']; ?></h4>
                                        <?php } ?>



                                    </div> 
                                </div>
                            </div>
                        </div>

                        <?php  




                        /*    if ($row['content'] == '<p>no-loadmore</p>') {
                                echo "tidak ada";
                            }
*/
                            ?>

                           <!--  <?php if (  strlen($row['content']) > 200) { ?>
                            <div class="btn-read-more mrg-top-50">
                                <a data-toggle="modal" href='#modal-id<?php echo $no;?>'>Read More</a>
                            </div>
                            <?php } ?> -->

                        </div>

                        <!-- End -->
                    </div>
                </div>

                <?php } else { ?>
                <div class="ms-section overlay-orange" id="right<?php echo $no;?>" style="background-image:url(<?php echo base_url("uploads/contents/".$row['photo']); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);"></div>

                <?php } ?>
                <?php } ?>
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
			/* $('#myContainerSs').multiscroll({
                sectionsColor: ['#fff', '#fff'],
                anchors: ['first', 'second','third','fourth','fifth','sixth','seventh','eighth'],
                menu: '#menu',
                navigation: true,
                loopBottom: false,
                loopTop: false
            }); */
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