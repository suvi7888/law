
<!-- Full Screen Slider -->
<header> 
    <div class="fs-slider">
        <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
            <div class="carousel-inner"> 
                <div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$headline->photo); ?>)">
                    <div class="hero-caption caption-left caption-height-center"> 
                    </div>
                  
                    <!--/ hero-caption -->
                </div>
                <!-- /item --> 
                <a href="#news" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
                <li><a class="active" href="<?php echo site_url('media'); ?>"><b>Media</b></a></li>
            </ul>
        </div> 
        <div class="breadcrumb pull-right mrg-top-10">
            <ul>
                <li><a  href="<?php echo site_url('media'); ?>">News & Event</a></li>
                <li><a href="<?php echo site_url('media-press/'); ?>">Press Releases</a></li>
                <li><a href="<?php echo site_url('media-photo/'); ?>">Photos & video</a></li>
                <li><a href="<?php echo site_url('media-relasi/'); ?>">Media Relations</a></li>
            </ul>
        </div> 
    </div>

    <div class="menu-mobile hidden-lg hidden-md">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEDIA &nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('media'); ?>">News & Event</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('media-press/'); ?>">Press Releases</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('media-photo/'); ?>">Photos & video</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('media-relasi/'); ?>">Media Relations</a></li>
        </ul>
    </li>
</ul>
</div>


<div class="clearfix"></div>
<!-- /container -->
</section>
<!-- /Heading Style 1 -->

<!-- Contact -->
<section id="news" class="media-page pdd-vertical-50"> 
    <div class="container">
        <div class="content-news">
            <div class="row">
                <div class="title-big mrg-btm-30" align="center">
                    <h2 class="hero-heading text-purple text-center"><?php '#'.@$this->uri->segment(3); ?></h2>
                    <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">

                </div>
            </div>
            
            <div class="row">
                <div class="category-media mrg-top-10">
                    <div class="dropdown">
                        <div class="col-md-12">
                          <button class="btn btn-default dropdown-toggle mrg-btm-0" type="button" id="kategori" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu mrg-left-15 col-md-6" aria-labelledby="kategori">

                            <!-- Kategori -->
                            <?php foreach ($link as $l) { ?>
                            <li <?php echo $l->slug_bu ==  @$slugbu ? 'class="active"' : ''; ?>><a href="<?php echo site_url('media/news-and-event/'.$l->slug_bu); ?>"><?php echo $l->nama_bu; ?></a></li> 
                            <li class="divider"></li> 
                            <?php } ?>
                            <!-- End -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>  

        <div class="row">
            <div class="col-md-12 pagi-overlay nav-overlay">

                <?php 
                $bulan = array(
                    '01' => 'JAN',
                    '02' => 'FEB',
                    '03' => 'MAR',
                    '04' => 'APR',
                    '05' => 'MEI',
                    '06' => 'JUN',
                    '07' => 'JUL',
                    '08' => 'AGU',
                    '09' => 'SEP',
                    '10' => 'OKT',
                    '11' => 'NOP',
                    '12' => 'DES',
                    );  
                    foreach ($data as $n) { ?>

                    <div class="item col-md-4 col-sm-6">
                        <div class="row">
                            <div class="news-list">
                                <div class="block-news">
                                    <div class="news-img">
                                        <img class="img-responsive" width="100%" src="<?php echo base_url("uploads/news/".$n->gambar); ?>" alt="<?php echo $n->title; ?>">
                                        <div class="overlay">
                                            <div class="news-info pdd-horizon-15">
                                                <p class="position"><?php echo $n->title; ?></p>
                                            </div>
                                            <div class="news-meta">
                                                <div class="date mrg-btm-30">
                                                  <h4 class="text-white text-left no-margin"><?php echo date('d',strtotime($n->datepost));?></h4>
                                                  <h5 class="text-white text-left no-margin"><?php echo $bulan[date('m',strtotime($n->datepost))]; ?></h5>
                                                  <h6 class="text-white text-left no-margin"><?php echo date('Y',strtotime($n->datepost)); ?></h6>
                                              </div>
                                              <div class="desc-asrticle" align="center">
                                                <p><?php echo substr($n->content, 0,180); ?>.</p>
                                                <div class="btn-read mrg-top-30">
                                                  <a href="<?php echo site_url('news/'.date('Y',strtotime($n->datepost)).'/'.date('m',strtotime($n->datepost)).'/'.$n->slug); ?>">Read More&nbsp;<i class="ti-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>  


            </div>
            <!-- /owl-carousel -->
        </div>
                <!-- <div class="row" align="center">
                    <div class="btn-read-more mrg-top-50">
                        <a href="#">Load More</a>
                    </div>
                </div> --> 
            </div> 
    </div>
</section>
<!-- /Contact -->



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