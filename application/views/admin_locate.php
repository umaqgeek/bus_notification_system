<!DOCTYPE html>
<html>
    <head>
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
                                <a><?php echo $pengguna->username;?></a>
                            </div>
                            
                            <p class="text-muted m-0"><?php if($pengguna->level == 1)
                                                        {
                                                        echo "Administrator";
                                                        }
                                                        else if($pengguna->level == 2)
                                                        {
                                                        echo "Bus Driver";
														}
														else if($pengguna->level == 3)
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
                                <a href="<?php echo site_url ('daftar_masuk/admin_generate');?>" class="waves-effect"><i class="md md-event"></i><span>Generate QR Code </span></a>
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/admin_locate');?>" class="waves-effect"><i class="md md-palette"></i><span>Manage Location </span></a>
							</li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/admin_locatetype');?>" class="waves-effect"><i class="md md-invert-colors-on"></i><span>Manage Location Type </span></a> 
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/admin_manage');?>" class="waves-effect"><i class="md md-redeem"></i> <span>Manage User </span></a>
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
                <!-- Start content -->
                <div class="content">
                    
                

                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('<?php echo base_url().'images/big/bg.jpg'?>')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="<?php echo base_url().'images/avatar-2.jpg'?>" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white"><?php echo $pengguna->full_name;?></h3>
									<h4 class="text-white"><?php echo $pengguna->address?></h4>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">About Me</span> 
                                </a> 
                            </li> 
                            <li class="tab"> 
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Update Info</span> 
                                </a> 
                            </li> 
                        <div class="indicator"></div></ul> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <div class="tab-content profile-tab-content"> 
                            <div class="tab-pane active" id="home-2"> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Personal Information</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $pengguna->full_name;?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Address</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $pengguna->address;?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>IC Number</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $pengguna->ic_no;?></p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Contact Number</strong>
                                                    <br/>
                                                    <p class="text-muted">+60<?php echo $pengguna->contact_no;?></p>
                                                </div>
												<div class="about-info-p m-b-0">
                                                    <strong>Email Address</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $pengguna->email;?></p>
                                                </div>
												<div class="about-info-p m-b-0">
                                                    <strong>Gender</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php if($pengguna->gender == 0)
                                                        {
                                                        echo "Male";
                                                        }
                                                        else
                                                        {
                                                        echo "Female";}?></p>
                                            </div> 
											<div class="about-info-p m-b-0">
                                                    <strong>Race</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php if($pengguna->race == 1)
                                                        {
                                                        echo "Melayu";
                                                        }
                                                        else if($pengguna->race == 2)
                                                        {
                                                        echo "Cina";
														}
														else if($pengguna->race == 3)
                                                        {
                                                        echo "India";
														}
														else if($pengguna->race == 4)
                                                        {
                                                        echo "Lain-Lain";
														}?></p>
                                            </div>
											<div class="about-info-p m-b-0">
                                                    <strong>Religion</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php if($pengguna->religion == 1)
                                                        {
                                                        echo "Islam";
                                                        }
                                                        else if($pengguna->religion == 2)
                                                        {
                                                        echo "Buddha";
														}
														else if($pengguna->religion == 3)
                                                        {
                                                        echo "Hindu";
														}
														else if($pengguna->religion == 4)
                                                        {
                                                        echo "Kristian";
														}
														else if($pengguna->religion == 5)
                                                        {
                                                        echo "Lain-Lain";
														}?></p>
                                            </div>
                                            </div> 
                                        </div>
                                        <!-- Personal-Information -->
                                    </div>


                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Account Information</h3> 
                                            </div> 
											<br />
											<div class="about-info-p m-b-0">
                                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;Username</strong>
                                                    <br/>
                                                    <p class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pengguna->username;?></p>
                                            </div>
											<div class="about-info-p m-b-0">
                                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;Password</strong>
                                                    <br/>
                                                    <p class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pengguna->password;?></p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;Level</strong>
                                                    <br/>
                                                    <p class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?php if($pengguna->level == 1)
                                                        {
                                                        echo "Administrator";
                                                        }
                                                        else if($pengguna->level == 2)
                                                        {
                                                        echo "Bus Driver";
														}
														else if($pengguna->level == 3)
                                                        {
                                                        echo "Passenger";
														}
														?></p>
                                            </div>
											<div class="about-info-p m-b-0">
                                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;Status</strong>
                                                    <br/>
                                                    <p class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;<?php if($pengguna->status == 0)
                                                        {
                                                        echo "Not Active";
                                                        }
                                                        else if($pengguna->status == 1)
                                                        {
                                                        echo "Active";
														}
														?></p>
                                            </div>											
                                        </div>
                                        <!-- Personal-Information -->
                                    </div>

                                </div>
                            </div> 
                        </div> 
                    </div>
                    </div>
                </div> <!-- container -->
                               
                </div> <!-- content -->

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