<!DOCTYPE html>
<html lang="en">*************************** -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- PAGE TITLE -->
    <title>Ultra | Blog </title>

    <!-- FAVICON AND APPLE TOUCHSCREEN ICONS -->
    <link rel="shortcut icon" href="<?php echo base_url('Ultraviolet_GUI/Frontend/images/favicon.ico');?>">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">

    <!-- ******************************
            STYLESHEETS
    *********************************** -->

    <!-- DEFAULT AND BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/normalize.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/bootstrap-theme.min.css');?>">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/font-awesome.min.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/simple-line-icons.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/pe-icon-7-stroke.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/themify-icons.css');?>" />

    <!-- PLUGINS DEFAULT STYSHEETS-->
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/jquery.mmenu.all.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/owl.carousel.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/owl.theme.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/owl.transitions.css');?>">    
    
    <!-- MAIN STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/main.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('Ultraviolet_GUI/Frontend/css/responsive.css');?>" />

    <!-- MODERNIZER -->
    <script src="<?php echo base_url('Ultraviolet_GUI/Frontend/js/modernizr-2.8.3.min.js');?>"></script>

			
	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script src="js/selectivizr-min.js"></script>
        <script src="js/nwmatcher.js"></script>
        <script src="js/IE9.js"></script>		
	<![endif]-->
</head>

<body class="do-blog-masonry-page">
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="do-loader">&nbsp;</div>
    </div>

    <!-- START THE MAIN CONTENT HERE -->

    <!--================================
                SIDE MENU
    =================================-->
    <!-- PAGE OVERLAY WHEN MENU ACTIVE -->
    <div class="do-side-menu-overlay"></div>
    <!-- PAGE OVERLAY WHEN MENU ACTIVE END -->

    <div class="do-side-menu-wrap">
        <!-- OVERLAY -->
        <div class="do-dark-overlay"></div>
        <!-- OVERLAY END -->

        <nav class="do-side-menu">
            <div class="do-side-menu-widget-wrap">
                <!-- LOGO -->
                <div class="do-side-menu-logo-wrap">
                     <?php  foreach($data_logo->result() as $x); ?>
                    <a href="index-2.html">
                        <img src="<?php echo base_url('assets/company/logo/'.$x->logo.'');?>" alt="UltraCompany">
                    </a>
                </div>
                <!-- LOGO -->

                <!-- MENU -->
                <div class="do-side-menu-menu-wrap">
                    <ul>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">extra menu</a>
                        </li>
                        <li>
                            <a href="#">sample page</a>
                            <ul class="do-side-menu-menu-dropdown">
                                <li>
                                    <a href="#">Sample one</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">blog style</a>
                        </li>
                        <li>
                            <a href="#">layout</a>
                        </li>
                        <li>
                            <a href="#">design</a>
                        </li>
                    </ul>
                </div>
                <!-- MENU END -->

                <!-- SOCIAL ICONS -->
                <div class="do-side-menu-social-icon">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- SOCIAL ICONS END -->
            </div>
        </nav>

        <button class="do-side-menu-close-button" id="do-side-menu-close-button">Close Menu</button>
    </div>
    <!-- SIDE MENU END -->

    <!--================================
        HEADER
    =================================-->
    <header>
        <!-- Navigation Menu start-->
        <nav class="navbar do-main-menu" role="navigation">
            <div class="container">

                <!-- Navbar Toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <button class="do-side-menu-button" id="do-side-menu-open-button"></button>

                    <!-- Logo -->
                    <a class="navbar-brand" href="index-2.html"><img class="logo" src="<?php echo base_url('assets/company/logo/'.$x->logo.'');?>" alt="UltraCompany"></a>
                </div>
                <!-- Navbar Toggle End -->

                <!-- navbar-collapse start-->
                <div id="nav-menu" class="navbar-collapse do-menu-wrapper collapse" role="navigation">
                    <ul class="nav navbar-nav do-menus">
                        <li>
                            <a href="<?php echo base_url('');?>">Home</a>
                          
                        </li>
                        
                        <li class="active">
                            <a href="<?php echo base_url('frontend/blog');?>">Blog</a>
                           
                        </li>
                          <li>
                            <a href="<?php echo base_url('frontend/portofolio');?>">Portofolio</a>
                           
                        </li>
                        
                        
                        <li>
                            <a href="contact_us.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- navbar-collapse end-->

            </div>
        </nav>
        <!-- Navigation Menu end-->
    </header>
    <!-- HEADER END -->