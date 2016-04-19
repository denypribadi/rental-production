<!DOCTYPE html>
<html>
    

<head>
        <meta charset="UTF-8">
        <title>Admin | Rental Multimedia</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="Rental Multimedia By Jerapah Developer">
        <meta name="author" content="denypribadi">

        <!-- Base Css Files -->
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/fontello/css/fontello.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/animate-css/animate.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/nifty-modal/css/component.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/magnific-popup/magnific-popup.css');?>" rel="stylesheet" /> 
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/ios7-switch/ios7-switch.css');?>" rel="stylesheet" /> 
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/pace/pace.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/sortable/sortable-theme-bootstrap.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/bootstrap-datepicker/css/datepicker.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/jquery-icheck/skins/all.css');?>" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/prettify/github.css');?>" rel="stylesheet" />
            <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/jquery-datatables/css/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css');?>" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries Start -->

        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/css/style.css');?>" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/css/style-responsive.css');?>" rel="stylesheet" />
                 <link href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/libs/summernote/summernote.css');?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/img/favicon.ico');?>">
        <link rel="apple-touch-icon" href="<?php echo base_url('Ultraviolet_GUI/Admin/assets/img/apple-touch-icon.png');?>" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    </head>

    <!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Yakin mau logout gan?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Gak jadi!</button>
                <a href="<?php echo base_url('admin/logout');?>" class="btn btn-success md-close">Yeah!</a>
                </p>
            </div>
        </div>
    </div>        <!-- Modal End -->
    <div id="wrapper">
        
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="<?php echo base_url('Ultraviolet_GUI/Admin/assets/img/logo.png');?>" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                </div>
                            </div>
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                       <?php $avatar= $this->session->userdata('avatar');?>
   <?php $nama_user= $this->session->userdata('username');?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="<?php echo base_url('Assets/avatar/'.$avatar.'');?>"></span><strong><?php echo $nama_user;?></strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                    
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->