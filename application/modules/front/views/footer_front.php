 <!-- Footer -->
 <footer class="bg-light-blue thin">
    <div class="block-footer">
        <div class="content">
            <div class="footer-middle container pdd-vertical-15">
                <div class="col-md-4 col-sm-12">
                    <div class="widget">
                        <div class="widget-tittle">
                            <h4 class="text-purple">Our Solution</h4>
                        </div>
                        <!-- widget-tittle -->

                        <div class="link-widget solution">
                            <ul>
                                <li><h4>Transportation Solution</h4></li>
                                <li><a href="//trac.astra.co.id" target='_blank'><i class="ti-arrow-circle-right"></i>&nbsp; TRAC - Astra Rent Car</a></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; ORENZ Taxi</a></li>
                                <li><h4>Pre-owned Car Sales</h4></li>
                                <li><a href="//mobil88.astra.co.id" target='_blank'><i class="ti-arrow-circle-right"></i>&nbsp; mobil88</a></li>
                                <li><a href="//ibid.astra.co.id" target='_blank'><i class="ti-arrow-circle-right"></i>&nbsp; IBID - Balai Lelang Serasi</a></li>
                                <li><h4>Logistic Services</h4></li>
                                <li><a href="#"><i class="ti-arrow-circle-right"></i>&nbsp; SELOG</a></li>
                            </ul>
                        </div>
                        <!-- link-widget -->
                    </div>
                </div>
                <!-- /column -->

                <div class="col-md-3 col-sm-12">
                    <div class="widget">
                        <div class="widget-tittle">
                            <h4 class="text-purple">About Us</h4>
                        </div>
                        <!-- widget-tittle -->

                        <div class="link-widget">
                            <ul>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'profile'); ?>">Profile</a></li>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'investor'); ?>">Investor</a></li>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'media'); ?>">Media</a></li>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'career'); ?>">Career</a></li>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'contact'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- link-widget -->

                        <div class="widget-tittle">
                            <h4 class="text-purple">SITE</h4>
                        </div>

                        <div class="link-widget">
                            <ul>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'privacy'); ?>">Privacy &amp; Policy</a></li>
                                <li><a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.'cookies'); ?>">Cookies</a></li>
                                <li><a href="<?php echo base_url('site-map'); ?>">Site Map</a></li>
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
                                                    <a href="//trac.astra.co.id" target='_blank'>   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-5.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="//mobil88.astra.co.id" target='_blank'>   
                                                        <img class="img-responsive"  src="<?php echo base_url('assets/assets_frontend/images/logo-transparent-3.png'); ?>" alt="SERA">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="row">
                                                    <a href="//ibid.astra.co.id" target='_blank'>   
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

                                        <?php 

                                        $db = $this->db->query("SELECT sosmed_in, sosmed_fb, sosmed_twitter, sosmed_google FROM settings")->row(); 


                                        // $sosmed = $db->sosmed_in; 

                                        if (isset($db->sosmed_in) and !empty($db->sosmed_in) and $db->sosmed_in !== 0) { ?>
                                        <a href="https://www.linkedin.com/company/<?php echo trim($db->sosmed_in);?>" class="linkedin" target="_blank"><i class="ti-linkedin"></i></a>
                                        <?php } ?>


                                        <?php
                                         if (isset($db->sosmed_fb) and !empty($db->sosmed_fb) and $db->sosmed_fb !== 0) { ?>
                                        <a href="https://www.facebook.com/<?php echo trim($db->sosmed_fb);?>" class="linkedin" target="_blank"><i class="ti-facebook"></i></a>
                                        <?php } ?>

                                         <?php
                                         if (isset($db->sosmed_twitter) and !empty($db->sosmed_twitter) and $db->sosmed_twitter !== 0) { ?>
                                        <a href="https://www.twitter.com/<?php echo trim($db->sosmed_twitter);?>" class="linkedin" target="_blank"><i class="ti-twitter"></i></a>
                                        <?php } ?>


                                          <?php
                                         if (isset($db->sosmed_google) and !empty($db->sosmed_google) and $db->sosmed_google !== 0) { ?>
                                        <a href="https://plus.google.com/<?php echo trim($db->sosmed_google);?>" class="linkedin" target="_blank"><i class="ti-google"></i></a>
                                        <?php } ?>  
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
                    <small class="copyright text-white">&copy; Copyright PT Serasi Autoraya <?php echo date('Y'); ?></small>
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

<?php if (@$addjs) @$this->load->view("$addjs"); ?>
<!-- /Page Exclusive JS-->
<script type="text/javascript" src="<?php echo base_url('assets/assets_frontend/js/main.js'); ?>"></script>


</body>

</html>
