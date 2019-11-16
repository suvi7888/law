
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kantor Pengacara Jakarta | Menu | Judul</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/style.css">

  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="index.html">Kantor Pengacara Jakarta</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link <?php echo $page == 'home' ? 'active' : '' ?>" href="<?php echo base_url(); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $page == 'about' ? 'active' : '' ?>" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $page == 'projects' ? 'active' : '' ?>" href="projects.html">Projects</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="services.html">Architectural Design</a>
                  <a class="dropdown-item" href="services.html">Interior</a>
                  <a class="dropdown-item" href="services.html">Building</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $page == 'blog' ? 'active' : '' ?>" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $page == 'contact' ? 'active' : '' ?>" href="contact.html">Contact</a>
              </li>
            </ul>

          
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>
    <?php if (@$page == "") { $page = 'home'; }
      $this->load->view(@$page); 
    ?>

    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. .</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5 pl-md-5">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span >34 Street Name, City Name Here, United States</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span >+1 242 4942 290</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span >info@yourdomain.com</span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php echo base_url('assets'); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/main.js"></script>

    <script src="<?php echo base_url('assets'); ?>/js/main.js"></script>
    
  </body>
</html>