 <!-- Full Screen Slider -->
 <header>
    <div class="fs-slider">
        <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
            <div class="carousel-inner">
                <div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$bg['photo']);?>)">
                    <div class="hero-caption caption-left caption-height-center">
                        <!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
                    </div>
                    <!--/ hero-caption -->
                </div>
                <!-- /item -->

                <a href="#about-us" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
<section  id="about-us" class="profile pdd-vertical-50">
    <div class="container">
        <div class="row mrg-top-30">
            <div class="col-md-5">
                <img class="img-responsive padding mrg-horizon-auto" src="<?php echo base_url("uploads/contents/".$us['photo']);?>" alt=""> 
            </div>

            <div class="col-md-7">
                <div class="title-big mrg-btm-30">
                    <?php 
                    if ($this->agent->is_mobile()) { ?>
                    <div align="center">
                        <h2 class="hero-heading text-purple"><?php echo $us['title']; ?></h2>
                        <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png");?>" alt="">
                    </div>
                    <?php } else {?>

                    <h2 class="hero-heading text-purple"><?php echo $us['title']; ?></h2>
                    <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png");?>" alt="">

                    <?php } ?>
                </div>
                <?php echo $us['content']; ?> 
            </div>
        </div>
    </div>
</section>



<section id="about-video">
    <div class="split-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 orange clearfix">
                    <div class="content-box mrg-vertical-70 mrg-horizon-20 pdd-vertical-40">
                        <h2 class="text-white"><?php echo $video['title']; ?></h2>
                        <div class="text-white">
                            <?php echo $video['content']; ?>
                        </div>
                    </div>
                    <!-- /content -->
                </div>
                <!-- /column -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container-fluid -->

        <div class="image-container col-md-offset-6 col-md-6">
           <?php if ($video['url_video'] != ""){ ?>
           <div class="background-holder has-content parallax-overlay-light" style="background-image: url(<?php echo img_youtube($video['url_video']);?>)">
             <div class="content text-center">
              <a href="#myModal" class="" data-toggle="modal" data-target="#playerModal">
               <i class="play-btn font-size-50"></i>
           </a>
						<!-- a data-toggle="modal" href="#url_video">
							<i class="play-btn font-size-50"></i>
						</a -->
						<h2 class="mrg-top-30">Watch Video</h2>
						<p class="droid-serif-italic font-size-15">See about sera profile</p>
					</div>
				</div>

				<div class="modal fade vid-popup" id='playerModal' role='dialog' tabindex='-1'>
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">×</button>
							  </div>
							  <div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<div id="player" class="embed-responsive-item"></div>
									</div>
							  </div>
						</div>
					</div>
				</div>

             <?php } else { ?>
             <div class="background-holder has-content parallax-overlay-light" style="background-image: url(<?php echo base_url("assets/assets_frontend/images/about-video.png");?>)">
                <div class="content text-center">
                    <a class="popup-player" href="<?php echo base_url("uploads/contents/".$video['photo']);?>">
                        <i class="play-btn font-size-50"></i>
                    </a>

                    <!-- <a href='#myModal' class='' data-toggle='modal' data-target='#playerModal'>
                            <i class="play-btn font-size-50"></i>
                        </a> -->

                    <h2 class="mrg-top-30">Watch Video</h2>
                    <p class="droid-serif-italic font-size-15">See about sera profile</p>
                </div>
                <!-- /content -->
            </div>


            <div class="modal fade vid-popup" id='playerModal' role='dialog' tabindex='-1'>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div id="player" class="embed-responsive-item"></div>
                        </div>
                  </div>
            </div>
        </div>
    </div>

            <!-- /background-holder -->
            <?php } ?>
        </div>
        <!-- column -->
    </div>
</section>

<section id="title-maps" class="pdd-vertical-50">
    <div class="container">
        <div class="row">
            <div class="title-big mrg-btm-30" align="center">
                <h2 class="hero-heading text-purple text-center">OUR NETWORKS</h2>
                <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/border-center.png");?>" alt="">
            </div>
        </div>
    </div>
</section>

<section id="places-map" class="hidden-sm hidden-xs">
    <div class="map animate-fade-in">
        <img src="<?php echo base_url("assets/assets_frontend/images/dotted-map-black-big.png");?>" alt="SERA" width="903" height="452" />
        <div class="map-pins">
            <!-- sumatera -->
            <a class="map-location-marker marker-aceh" data-map-title="ACEH" data-map-link="aceh" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>
            <a class="map-location-marker marker-medan" data-map-title="MEDAN" data-map-link="medan" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-5.png');?>"></a>
            <a class="map-location-marker marker-padang" data-map-title="PADANG" data-map-link="padang" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>
            <a class="map-location-marker marker-pekanbaru" data-map-title="PEKANBARU" data-map-link="pekanbaru" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-4.png');?>"></a>
            <a class="map-location-marker marker-jambi" data-map-title="JAMBI" data-map-link="jambi" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>
            <a class="map-location-marker marker-batam" data-map-title="BATAM" data-map-link="batam" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>
            <a class="map-location-marker marker-palembang" data-map-title="PALEMBANG" data-map-link="palembang" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-4.png');?>"></a>
            <a class="map-location-marker marker-pangkal" data-map-title="PANGKAL PINANG" data-map-link="pangkal" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>
            <a class="map-location-marker marker-bengkulu" data-map-title="BENGKULU" data-map-link="bengkulu" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>
            <a class="map-location-marker marker-lampung" data-map-title="LAMPUNG" data-map-link="lampung" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png');?>"></a>

            <!-- jawa -->
            <a class="map-location-marker marker-jabodetabek" data-map-title="JABODETABEK" data-map-link="jabodetabek" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>
            <a class="map-location-marker marker-cilegon" data-map-title="CILEGON" data-map-link="cilegon" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-4.png'); ?>"></a>
            <a class="map-location-marker marker-bandung" data-map-title="BANDUNG" data-map-link="bandung" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-2.png'); ?>"></a>
            <a class="map-location-marker marker-semarang" data-map-title="SEMARANG" data-map-link="semarang" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-4.png'); ?>"></a>
            <a class="map-location-marker marker-jogjakarta" data-map-title="JOGJAKARTA" data-map-link="jogjakarta" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-4.png'); ?>"></a>
            <a class="map-location-marker marker-malang" data-map-title="MALANG" data-map-link="malang" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>
            <a class="map-location-marker marker-surabaya" data-map-title="SURABAYA" data-map-link="surabaya" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-5.png'); ?>"></a>
            <a class="map-location-marker marker-denpasar" data-map-title="DENPASAR" data-map-link="denpasar" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-3.png'); ?>"></a>
            <a class="map-location-marker marker-lombok" data-map-title="LOMBOK" data-map-link="lombok" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>

            <!-- kalimantan -->
            <a class="map-location-marker marker-pontianak" data-map-title="PONTIANAK" data-map-link="pontianak" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>
            <a class="map-location-marker marker-samarinda" data-map-title="SAMARINDA" data-map-link="samarinda" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-6.png'); ?>"></a>
            <a class="map-location-marker marker-banjarmasin" data-map-title="BANJARMASIN" data-map-link="banjarmasin" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-3.png'); ?>"></a>
            <a class="map-location-marker marker-balikpapan" data-map-title="BALIKPAPAN" data-map-link="balikpapan" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-4.png'); ?>"></a>
            <a class="map-location-marker marker-sangatta" data-map-title="SANGATTA" data-map-link="sangatta" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>

            <!-- sulawesi -->
            <a class="map-location-marker marker-manado" data-map-title="MANADO" data-map-link="manado" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>
            <a class="map-location-marker marker-palu" data-map-title="PALU" data-map-link="palu" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>
            <a class="map-location-marker marker-makasar" data-map-title="MAKASAR" data-map-link="makasar" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>
            <a class="map-location-marker marker-kendari" data-map-title="KENDARI" data-map-link="kendari" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>

            <a class="map-location-marker marker-jayapura" data-map-title="JAYAPURA" data-map-link="jayapura" data-map-image="<?php echo base_url('assets/assets_frontend/images/location-1.png'); ?>"></a>

        </div>
    </div>
</section>

<section id="map-mobile" class="hidden-lg hidden-md">
    <div class="col-md-12">
        <table class="table table-striped custab">
            <thead>
                <tr>
                    <th>CITY</th>
                    <th>BUSINESS UNIT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ACEH</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>MEDAN</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-5.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>PADANG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>PEKANBARU</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-4.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>JAMBI</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>BATAM</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>PALEMBANG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-4.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>PANGKAL PINANG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>BENGKULU</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr> 
                <tr>
                    <td>LAMPUNG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>JABODETABEK</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>CILEGON</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-4.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>BANDUNG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-2.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>SEMARANG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-4.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>JOGJAKARTA</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-4.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>MALANG</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>SURABAYA</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-5.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>DENPASAR</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-3.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>LOMBOK</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>PONTIANAK</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>SAMARINDA</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>BANJARMASIN</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-6.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>BALIKPAPAN</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-3.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>SANGATTA</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-4.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>MANADO</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>PALU</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>MAKASAR</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>KENDARI</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
                <tr>
                    <td>JAYAPURA</td>
                    <td><img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/location-1.png");?>" alt=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section id="description-loc" class="hidden-sm hidden-xs">
    <div class="desc-location pdd-vertical-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-2" align="center">
                        <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-1.jpg");?>" alt="">
                    </div>
                    <div class="col-md-2" align="center">
                        <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-2.jpg");?>" alt="">
                    </div>
                    <div class="col-md-2" align="center">
                        <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-3.jpg");?>" alt="">
                    </div>
                    <div class="col-md-2" align="center">
                        <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-4.jpg");?>" alt="">
                    </div>
                    <div class="col-md-2" align="center">
                        <img class="img-responsive" src="<?php echo base_url("assets/assets_frontend/images/logo/logo-5.jpg");?>" alt="">
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/jquery.waypoints.js'); ?>"></script>

 <script type="text/javascript">
        // Create a clone of the menu, right next to original.
        $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('transition','all 3s ease').css('margin-top','0').css('z-index','500').removeClass('original').hide();

        scrollIntervalID = setInterval(stickIt, 10);


        function stickIt() {

          var orgElementPos = $('.original').offset();
          orgElementTop = orgElementPos.top;               

          if ($(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.     
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;  
            widthOrgElement = orgElement.css('width');
            $('.cloned').css('left',leftOrgElement+'px').css('top',75).css('width',widthOrgElement).show();
            $('.original').css('visibility','hidden');
          } else {
            // not scrolled past the menu; only show the original menu.
            $('.cloned').hide();
            $('.original').css('visibility','visible');
          }
        }
    </script>
    <script type="text/javascript">
        $('.popup-player').magnificPopup({
            disableOn: 400,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                        '<div class="mfp-close"></div>'+
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                      '</div>',

                srcAction: 'iframe_src',
                }
        });
    </script>
    <script type="text/javascript">
        
        // Youtube API Functions (https://developers.google.com/youtube/iframe_api_reference)
        // =============================================

        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        //### Variables
        var player;
        var playerModal = $('#playerModal');

        //### Youtube API
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: '<?php echo id_youtube($video['url_video']); ?>'
            });
        }

        //### Modal Controls (http://getbootstrap.com/javascript/#modals)
        // Modal when show, begin to play video
        playerModal.on('show.bs.modal', function (e) {
            player.playVideo();
        });

        // Modal when hidden, pause or stop playing video
        playerModal.on('hidden.bs.modal', function (e) {
            player.pauseVideo();
            //player.stopVideo();
        });


    </script>