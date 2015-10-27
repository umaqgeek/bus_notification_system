<!DOCTYPE html>
<html>
    <head>
    <?php 
    foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php echo base_url().'images/buns.png'?>">
        <title>BuNS - Bus Notification System</title>
        <!-- Base Css Files -->
        <link href="<?php echo base_url().'css/bootstrap.min.css'; ?>" rel="stylesheet" />
        <!-- Font Icons -->
        <link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" />
        <link href="<?php echo base_url().'assets/ionicon/css/ionicons.min.css'; ?>" rel="stylesheet" />
        <link href="<?php echo base_url().'css/material-design-iconic-font.min.css'; ?>" rel="stylesheet">
        <!-- animate css -->
        <link href="<?php echo base_url().'css/animate.css'; ?>" rel="stylesheet" />
        <!-- Waves-effect -->
        <link href="<?php echo base_url().'css/waves-effect.css'; ?>" rel="stylesheet">
        <!-- sweet alerts -->
        <link href="<?php echo base_url().'assets/sweet-alert/sweet-alert.min.css'; ?>" rel="stylesheet">
        <!-- Custom Files -->
        <link href="<?php echo base_url().'css/helper.css" rel="stylesheet'; ?>" type="text/css" />
        <link href="<?php echo base_url().'css/style.css" rel="stylesheet'; ?>" type="text/css" />
        <script src="<?php echo base_url().'s/modernizr.min.js'; ?>"></script>  
    </head>

    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <img src="<?php echo base_url().'images/buns.png'?>"><a href="index.html" class="logo"><span>BuNS</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                 <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="<?php echo site_url ('daftar_masuk/logout', 'Keluar &raquo;');?>" id="btn-fullscreen" class="waves-effect waves-light">Log Out&nbsp;&nbsp;<i class="md md-cancel"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="<?php echo base_url().'images/avatar-2.jpg'?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a><?php echo $this->session->userdata('username');?></a>
                            </div>
                            
                            <p class="text-muted m-0"><?php if($this->session->userdata('level') == 1)
                                                        {
                                                        echo "Administrator";
                                                        }
                                                        else if($this->session->userdata('level') == 2)
                                                        {
                                                        echo "Bus Driver";
                                                        }
                                                        else if($this->session->userdata('level') == 3)
                                                        {
                                                        echo "Passenger";
                                                        }
                                                        ?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/index');?>" class="waves-effect"><i class="md md-home"></i><span>Dashboard </span></a>
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/admin_generate');?>" class="waves-effect"><i class="md md-pages"></i><span>Generate QR Code </span></a>
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/location');?>" class="waves-effect"><i class="md md-my-location"></i><span>Manage Location </span></a>
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/locatetype');?>" class="waves-effect"><i class="md md-store-mall-directory"></i><span>Manage Location Type </span></a> 
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/user');?>" class="waves-effect"><i class="md md-perm-identity"></i><span>Manage User </span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/generate_pdf');?>" class="waves-effect"><i class="md md-perm-identity"></i><span>Generate pdf </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <div class="content"><!--
                <a href='<?php echo site_url('daftar_masuk/bus')?>'>Bus</a> |
                <a href='<?php echo site_url('daftar_masuk/busDriver')?>'>Bus Driver</a> |
                <a href='<?php echo site_url('daftar_masuk/driverLocation')?>'>Driver Location</a> |
                <a href='<?php echo site_url('daftar_masuk/location')?>'>location </a> |
                <a href='<?php echo site_url('daftar_masuk/user')?>'>User</a> |         
                <a href='daftar_masuk'>Back</a> -->
                <?php echo $output; ?>
            </div> 
            </div>
            

                <footer class="footer text-right">
                    2015 © BuNS.
                </footer>

            </div>
        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>
    
    </body>
</html>