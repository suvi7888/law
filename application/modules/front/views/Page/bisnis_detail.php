 <!-- Full Screen Slider -->

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


<header>
    <div class="fs-slider detail">
        <div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
            <div class="carousel-inner">
                <div class="active item bg" style="background-image:url(<?php echo base_url("assets/assets_frontend/images/background/header-business.jpg"); ?>)">
                    <div class="hero-caption caption-left caption-height-center"> 
                    </div>
                    <!--/ hero-caption -->
                </div>
                <!-- /item --> 
                <a href="#detail" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
            </div>
            <!-- /carousel-inner -->

        </div>
        <!-- /carousel -->
    </div>
    <!-- /fs-slider -->
</header>
<!--/#Full Screen Slider -->

<section id="detail">
    <div class="split-box">
        <div class="col-md-6 col-sm-6 block-human" style="background-image:url(<?php echo base_url("uploads/contents/".$news->photo); ?>); background-size: cover; background-color: rgba(0, 0, 0, 0.9);">

        </div>
        <!-- /column -->
        <div class="col-md-6 col-sm-6 block-human block-detail bg-light-gray" align="left">
            <div class="block-case-study-right pdd-vertical-30 pdd-horizon-50 mrg-top-20">
                <div class="breadcrumb page arrow mrg-btm-20">
                    <ul>
                        <li><a href="<?php echo site_url(); ?>"><i class="ti-home mrg-right-10"></i>Home</a></li>
                        <li><a href="<?php echo site_url('our_business'); ?>">OUR SOLUTION</a></li>
                        <li><a href="#"><?php echo $news->title; ?></a></li>
                    </ul>
                </div>

                  <?php if ($news->photo_litle != ''){ ?>
                               <img class="img-responsive mrg-btm-15" src="<?php echo base_url("uploads/contents/".$news->photo_litle); ?>" alt="">
                               <?php } else { ?>
                               <h3 class="hero-heading text-purple"><?php echo $news->title; ?></h4>
                                <?php } ?> 
                <div class="block-case-study-left mrg-top-20">
                    <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                </div>
                <div class="share-media pdd-vertical-20">
                   
                            
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
 
                </div>
                <div class="clearfix"></div>
                <div class="content-detail pdd-vertical-20">
                   <?php  echo $news->content; ?> 





               </div> 
        </div>
    </div>
</div>
</section>

<div class="clearfix"></div> 



 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58c8e9b1a1d1d2a8"></script>