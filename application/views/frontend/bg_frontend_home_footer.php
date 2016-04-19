
    <!--================================
        SOCIAL LINK SECTION
    =================================-->
    <section class="do-social-link-section">
        <div class="container">
            <div class="row">
                <a href="#" class="do-facebook">
                    <span>
                        <i class="ti-facebook"></i>
                    </span>
                    FACEBOOK
                </a>
            
                <a href="#" class="do-twitter">
                    <span>
                        <i class="ti-twitter-alt"></i>
                    </span>
                    TWITTER
                </a>
            
                <a href="#" class="do-vimeo">
                    <span>
                        <i class="ti-vimeo-alt"></i>
                    </span>
                    vImeo
                </a>
            
                <a href="#" class="do-dribbble">
                    <span>
                        <i class="ti-dribbble"></i>
                    </span>
                    drIbble
                </a>
            
                <a href="#" class="do-behance">
                    <span>
                        <i class="fa fa-behance"></i>
                    </span>
                    behance
                </a>
            </div>
        </div>
    </section>
    <!-- SOCIAL LINK SECTION END-->

    <!--================================
        FOOTER SECTION
    =================================-->
    <footer class="do-footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER TOP -->
                <div class="do-footer-top">
                    <!-- About Widget -->
                    <div class="do-footer-widget do-footer-about-widget col-md-3 col-sm-6 col-xs-12">
                        <div class="do-footer-logo-wrapper">
                            <a href="#">
                                <?php  foreach($data_logo->result() as $x); ?>
                                <img src="<?php echo base_url('assets/company/logo/'.$x->logo.'');?>" alt="">
                            </a>
                        </div>

                        <div class="do-company-address">
                         <?php  foreach($data_footer->result() as $b); ?>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                   <?php echo $b->alamat;?>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                  <?php echo $b->telp;?>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                  <?php echo $b->email;?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- About Widget End -->

                   
                </div>
                <!-- FOOTER TOP END -->

                <!-- FOOTER BOTTOM -->
                <div class="do-footer-bottom">
                    <a href="#" class="do-footer-author-name"><?php echo $b->subject;?></a>
                </div>
                <!-- FOOTER BOTTOM END -->
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->


        
		




	<!-- *******************************
                SCRIPTS
    ************************************ -->
    <!-- JQUERY -->    		
    <script src="<?php echo base_url('Ultraviolet_GUI/Frontend/js/jquery-1.11.3.min.js');?>"></script>
    
    <!-- PLUGINS -->
    <script src="<?php echo base_url('Ultraviolet_GUI/Frontend/js/plugins.js');?>"></script>

    <!-- CUSTOM SCRIPTS -->    
    <script src="<?php echo base_url('Ultraviolet_GUI/Frontend/js/main.js');?>"></script>
              					
</body>

</html>