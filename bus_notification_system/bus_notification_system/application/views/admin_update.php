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
                                    <h3 class="text-white"><?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->full_name;
                                                                                }
                                                                            } ?></h3>
                                    <h4 class="text-white"><?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->address;
                                                                                }
                                                                            } ?></h4>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="tab">
                                <a href="<?php echo site_url ('daftar_masuk/index');?>" data-toggle="tab" aria-expanded="false" > 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">About Me</span> 
                                </a> 
                            </li> 
                            <li class="active tab"> 
                                <a href="<?php echo site_url ('daftar_masuk/user_update');?>" aria-expanded="false" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Update Info</span> 
                                </a> 
                            </li> 
                        <div class="indicator"></div></ul> 
                        </div>
                        <div class="pull-right">
                        <div class="fileUpload btn btn-primary waves-effect waves-light">
                                    <span>Upload Profile Picture</span>
                                    <input type="file" class="upload">
                        </div></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <div class="tab-content profile-tab-content"> 
                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        
                                        <!-- Personal-Information -->
                                    </div></div>
                            

                                <div class="tab-pane" id="settings-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Edit Profile</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="FullName">Full Name</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->full_name;
                                                                                }
                                                                            } ?>" id="FullName" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="AboutMe">Address</label>
                                                <textarea style="height: 125px;" id="AboutMe" class="form-control"><?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->address;
                                                                                }
                                                                            } ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="ic">IC Number</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->ic_no;
                                                                                }
                                                                            } ?>" id="ic_no" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Contact Number</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->contact_no;
                                                                                }
                                                                            } ?>" id="contact_no" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email Address</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->email;
                                                                                }
                                                                            } ?>" id="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    if($user[$i]->gender == 0)
                                                                                    echo "Male";
                                                                                    else
                                                                                    echo "Female";
                                                                                }
                                                                            } ?>" id="gender" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="race">Race</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    if($user[$i]->race == 1)
                                                                                    {
                                                                                    echo "Melayu";
                                                                                    }
                                                                                    else if($user[$i]->race == 2)
                                                                                    {
                                                                                    echo "Cina";
                                                                                    }
                                                                                    else if($user[$i]->race == 3)
                                                                                    {
                                                                                    echo "India";
                                                                                    }
                                                                                    else if($user[$i]->race == 4)
                                                                                    {
                                                                                    echo "Lain-Lain";
                                                                                    }
                                                                                }
                                                                            } ?>" id="race" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    if($user[$i]->religion == 1)
                                                                                    {
                                                                                    echo "Islam";
                                                                                    }
                                                                                    else if($user[$i]->religion == 2)
                                                                                    {
                                                                                    echo "Buddha";
                                                                                    }
                                                                                    else if($user[$i]->religion == 3)
                                                                                    {
                                                                                    echo "Hindu";
                                                                                    }
                                                                                    else if($user[$i]->religion == 4)
                                                                                    {
                                                                                    echo "Kristian";
                                                                                    }
                                                                                    else if($user[$i]->religion == 5)
                                                                                    {
                                                                                    echo "Lain-Lain";
                                                                                    }
                                                                                }
                                                                            } ?>" id="religion" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Username</label>
                                                <input type="text" value="<?php echo $this->session->userdata('username');?>" id="Username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Password">Password</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->password;
                                                                                }
                                                                            } ?>" id="Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="RePassword">Re-Password</label>
                                                <input type="text" value="<?php for ($i = 0;$i < count($user); ++$i) 
                                                                            { 
                                                                                if($user[$i]->username == $this->session->userdata('username'))
                                                                                {
                                                                                    echo $user[$i]->password;
                                                                                }
                                                                            } ?>" id="RePassword" class="form-control">
                                            </div>
                                            
                                            <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                        </form>
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