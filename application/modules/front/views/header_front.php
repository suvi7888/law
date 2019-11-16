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


    <meta property="og:image" content="<?php echo @base_url("uploads/news/".$news->gambar); ?>" />

    <!-- FAVICON --> 
    <link rel="shortcut icon" href="<?php echo base_url('assets/assets_frontend/images/logo/icon.png'); ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/animate.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/themify-icons.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/YTPlayer.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/owl.carousel.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/magnific-popup.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/js/revolutionslider/css/settings.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/js/revolutionslider/css/navigation.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/main.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_frontend/css/responsive.css'); ?>" />
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style> 

    <!-- Java Script -->
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery-2.1.4.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.fitvids.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.mb.YTPlayer.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/wow.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.parallax-1.1.3.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.countTo.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.countdown.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.appear.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/smoothscroll.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/imagesloaded.pkgd.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/isotope.pkgd.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/email.js'); ?>"></script>
    <!-- Page Exclusive JS-->
    <script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.fullPage.min.js'); ?>"></script>



    <!-- Google Analitycs -->

    <?php 

    $ga = $this->db->query("SELECT ga FROM settings ")->row();
    if (!empty($ga->ga)) {
        echo "<script>";
        echo $ga->ga;
        echo "</script>";
    }
     ?>


    <!-- End Google Analitycs -->


    <!-- Zendesk -->

    <!-- Start of sera1 Zendesk Widget script -->

<script>
/*<![CDATA[*/
/*window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","sera1.zendesk.com"); */

/*]]>*/
</script>

<!-- Start of sera1 Zendesk Widget script -->  

    <!-- End -->


</head>
<?php $lang = $this->session->userdata('SS_LANG'); ?>
<body>
    <!-- Pageloader -->
    <div class="page-loader">
        <div class="loader">
            <div class='loader-style-1 panelLoad'>
                <div class='cube-face cube-face-front'><img width="75" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-back'><img width="75" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-left'><img width="75" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-right'><img width="75" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-bottom'><img width="75" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></div>
                <div class='cube-face cube-face-top'><img width="75" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></div>
            </div>
            <!-- /Cube panelload -->
            <span class="cube-face"></span>
        </div>
        <!-- /loader -->
    </div>
    <!-- /Page-loader --> 

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
		date.setTime(date.getTime() + (360 * 24 * 60 * 60 * 1000));
		console.log(date.toGMTString());
		document.cookie = "seraweb=setujucookies;expires=" + date.toGMTString() + "";
		$('#ssBarCookie').css('display','none');
	});
	</script>
    <?php } ?>



    <!-- Navigation -->
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
                                    
                                    <?php if (@$_SERVER['PATH_INFO'] == ''){ ?>
                                    <label><a class="in <?php echo $lang == 'ID' ? 'active' : ''; ?>" href="<?php echo base_url('id.html'); ?>">ID</a></label>
                                    <label><a class="en <?php echo $lang == 'EN' ? 'active' : ''; ?>" href="<?php echo base_url('en.html'); ?>">EN</a></label>
                                    
                                    <?php } else if (strtolower(@$_SERVER['PATH_INFO']) == '/beranda.html' || strtolower(@$_SERVER['PATH_INFO']) == '/home.html'){ ?>
                                    <label><a class="in <?php echo $lang == 'ID' ? 'active' : ''; ?>" href="<?php echo base_url('beranda.html'); ?>">ID</a></label>
                                    <label><a class="en <?php echo $lang == 'EN' ? 'active' : ''; ?>" href="<?php echo base_url('home.html'); ?>">EN</a></label>
                                    
                                    <?php } else { ?>
									<label><a class="in <?php echo $lang == 'ID' ? 'active' : ''; ?>" href="<?php echo base_url(str_replace('en.html','id.html',str_replace('/en/','/id/',$_SERVER['PATH_INFO']))); ?>">ID</a></label>
                                    <label><a class="en <?php echo $lang == 'EN' ? 'active' : ''; ?>" href="<?php echo base_url(str_replace('id.html','en.html',str_replace('/id/','/en/',$_SERVER['PATH_INFO']))); ?>">EN</a></label>
                                    <?php } ?>
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
                    <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG'))); ?>"><img height="100" src="<?php echo base_url('assets/assets_frontend/images/logo/logo-sera-white.png'); ?>" alt="SERA"></a></li>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
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