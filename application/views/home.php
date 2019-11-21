
    <section class="home-slider owl-carousel">
      <?php 
	  $group = 1;
	  foreach($content[$group] as $row) { ?>
	  <div class="slider-item" style="background-image: url('<?php echo base_url('uploads/contents/'.$row['photo']); ?>');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              
              <h1><span><?php echo $row['title']; ?></span></h1>
              <?php echo $row['content']; ?>
            </div>
          </div>
        </div>
        
      </div>
	  <?php } ?>
    </section>
    <!-- END slider -->
    
    
    <section class="section bg-light">
      <div class="container">
		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Area Praktik</h2>
          </div>
        </div>
        <div class="row">
		  <?php 
		  $group = 2;
		  foreach($content[$group] as $row) { ?>
		  <div class="col-md-6 col-lg-3 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3">
                <img src="<?php echo base_url('uploads/contents/'.$row['photo']); ?>" height="75px" alt="<?php echo $row['title']; ?>">
              </div>
              <div class="media-body">
                <h3 class="heading"><?php echo $row['title']; ?></h3>
                <?php echo $row['content']; ?>
              </div>
            </div>  

          </div>
		  <?php } ?>
        </div>
      </div>
    </section>
    <!-- END section -->
	
	<?php $group = 3; $row = $content[$group][0]; ?>
    <section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2><?php echo @$row['title']; ?></h2>
			<?php echo @$row['content']; ?>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-4 order-lg-1">
            <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('<?php echo base_url('assets'); ?>/images/about_1.jpg');"></div></div></div>
          </div>
		  

          <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
			<?php 
			$row = @$content[$group][1]; 
			if ($row){ ?>
            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion <?php echo $row['subtitle']; ?> display-4 text-primary"></span>
                <h3><?php echo $row['title']; ?></h3>
                <?php echo $row['content']; ?>
              </div>
            </div>
			<?php } ?>

            <?php 
			$row = @$content[$group][2]; 
			if ($row){ ?>
            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion <?php echo $row['subtitle']; ?> display-4 text-primary"></span>
                <h3><?php echo $row['title']; ?></h3>
                <?php echo $row['content']; ?>
              </div>
            </div>
			<?php } ?>

          </div>
          
          <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

            <?php 
			$row = @$content[$group][3]; 
			if ($row){ ?>
            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion <?php echo $row['subtitle']; ?> display-4 text-primary"></span>
                <h3><?php echo $row['title']; ?></h3>
                <?php echo $row['content']; ?>
              </div>
            </div>
			<?php } ?>

            <?php 
			$row = @$content[$group][4]; 
			if ($row){ ?>
            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion <?php echo $row['subtitle']; ?> display-4 text-primary"></span>
                <h3><?php echo $row['title']; ?></h3>
                <?php echo $row['content']; ?>
              </div>
            </div>
			<?php } ?>

          </div>

        </div>
      </div>
    </section>

    <?php 
	$group = 4; 
	$row = @$content[$group][0]; 
	if ($row){ ?>
    <section class="section element-animate">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-7 order-md-2">
            <div class=""><div class="frame"><img src="<?php echo base_url('uploads/contents/'.$row['photo']); ?>" alt="<?php echo $row['title']; ?>" class="img-fluid"></div></div>
          </div>
          <div class="col-md-5 pr-md-5 mb-5">
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
	<?php } ?>

    <section class="section bg-light block-11">
      <div class="container"> 
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="nonloop-block-11 owl-carousel">
		<?php 
		  $group = 5;
		  foreach($content[$group] as $row) { ?>
		  <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="<?php echo base_url('uploads/contents/'.$row['photo']); ?>" alt="<?php echo $row['title']; ?>"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading"><?php echo $row['title']; ?></h2>
                    <span class="meta"><?php echo $row['subtitle']; ?></span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <?php echo $row['content']; ?>
                  </blockquote>
                </div>
              </div>
          </div>
		  <?php } ?>
          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="<?php echo base_url('assets'); ?>/images/person_3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">John Smith</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="<?php echo base_url('assets'); ?>/images/person_2.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">Joshua Darren</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="<?php echo base_url('assets'); ?>/images/person_3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">John Smith</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="<?php echo base_url('assets'); ?>/images/person_3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">John Smith</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>
          
        </div>
      </div>
    <!-- END .block-4 -->
    </section>

    <section class="section blog">
      <div class="container">
        <?php $group = 6; $row = $content[$group][0]; ?>
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4"><?php echo $row['title']; ?></h2>
            <?php echo $row['content']; ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="<?php echo base_url('assets'); ?>/images/img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="<?php echo base_url('assets'); ?>/images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>


          </div>
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="<?php echo base_url('assets'); ?>/images/img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="<?php echo base_url('assets'); ?>/images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- section class="section bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h2 class="text-white mb-0">Create, Enhance and Sustain</h2>
            <p class="text-white lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. .</p>
          </div>
          <div class="col-lg-4 text-lg-right">
            <a href="https://free-template.co/" class="btn btn-outline-white px-4 py-3">Download This Template</a>
          </div>
        </div>
      </div>
    </section -->