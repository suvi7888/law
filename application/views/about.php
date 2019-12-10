    <div class="inner-page">
      <?php 
      $group = 0; 
      $row = @$content[$group][0]; 
      if ($row){ ?>
      <div class="slider-item" style="background-image: url('<?php echo base_url('uploads/contents/'.$row['photo']); ?>');">
      <?php } else { ?>
      <div class="slider-item" style="background-image: url('<?php echo base_url('assets'); ?>/images/hero_2.jpg');">
      <?php } ?>
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span><?php echo $row['title']; ?></span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    
    <?php 
    $group = 1; 
    $row = @$content[$group][0]; 
    if ($row){ ?>
    <section class="section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <!-- div class="col-lg-7 order-md-2">
            <div class=""><div class="frame"><img src="<?php echo base_url('uploads/contents/'.$row['photo']); ?>" alt="<?php echo $row['title']; ?>" class="img-fluid"></div></div>
          </div -->
          <div class="col-md-12 pr-md-12 mb-12">
            <div class="block-41">
              <h2 class="block-41-heading mb-5"><?php echo $row['title']; ?></h2>
              <div class="block-41-text">
                <?php echo $row['content']; ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->
    <?php } ?>
    
    <!-- section class="section">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="heading mb-4">Meet The Team</h2>
            <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="media d-block media-custom text-center">
              <a href="#"><img src="<?php echo base_url('assets'); ?>/images/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">James Doe</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="media d-block media-custom text-center">
              <a href="#"><img src="<?php echo base_url('assets'); ?>/images/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">Mike Roger</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="media d-block media-custom text-center">
              <a href="#"><img src="<?php echo base_url('assets'); ?>/images/person_4.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">Jim Smith</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="media d-block media-custom text-center">
              <a href="#"><img src="<?php echo base_url('assets'); ?>/images/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h3 class="mt-0 text-black">Rich Gold</h3>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section -->
    <!-- END section -->

