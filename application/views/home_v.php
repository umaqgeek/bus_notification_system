<?php
  if($level == "1") //admin
  {
 ?>
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuNS | Admin Page </title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url().'asset/css/bootstrap.css'; ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url().'asset/css/font-awesome.css'; ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url().'asset/js/morris/morris-0.4.3.min.css'; ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'asset/css/custom.css'; ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Page</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="<?php echo site_url ('daftar_masuk/logout', 'Keluar &raquo;');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url().'asset/img/find_user.png'?>" class="user-image img-responsive"/>
          </li>
                    <li>
                        <a class="active-menu" href="<?php echo site_url ('daftar_masuk/index');?>"><i class="fa fa-dashboard fa-3x"></i> Profile</a>
                    </li>
                     <li>
                        <a  href="<?php echo site_url ('daftar_masuk/admin_generate');?>"><i class="fa fa-qrcode fa-3x"></i>Generate QR Code</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url ('daftar_masuk/admin_locate');?>"><i class="fa fa-map-marker fa-3x"></i>Manage Location</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url ('daftar_masuk/admin_locatetype');?>"><i class="fa fa-map-marker fa-3x"></i>Manage Location Type</a>
                    </li>   
                    <li>
                        <a  href="<?php echo site_url ('daftar_masuk/admin_manage');?>"><i class="fa fa-map-marker fa-3x"></i>Manage User</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome <?php echo $pengguna->username;?> , Love to see you back.</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Full Name</strong>
                             <p class="text-muted"><?php echo $pengguna->full_name;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Address</strong>
                             <p class="text-muted"><?php echo $pengguna->address;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; IC Number</strong>
                             <p class="text-muted"><?php echo $pengguna->ic_no;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Contact Number</strong>
                             <p class="text-muted">+60<?php echo $pengguna->contact_no;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Email Address</strong>
                             <p class="text-muted"><?php echo $pengguna->email;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Gender</strong>
                             <p class="text-muted"><?php if($pengguna->gender == 0)
                                                        {
                                                        echo "Male";
                                                        }
                                                        else
                                                        {
                                                        echo "Female";}?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Race</strong>
                             <p class="text-muted"><?php if($pengguna->race == 1)
                                                        {
                                                        echo "Melayu";
                                                        }
                                                        else
                                                        {
                                                        echo "Cina";}?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Religion</strong>
                             <p class="text-muted"><?php if($pengguna->religion == 1)
                                                        {
                                                        echo "Islam";
                                                        }
                                                        else
                                                        {
                                                        echo "Kristian";}?></p>
                        </div>
                    </div>        
        </div>          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/jquery-1.10.2.js'; ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/bootstrap.min.js'; ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/jquery.metisMenu.js'; ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url().'asset/js/morris/raphael-2.1.0.min.js'; ?>"></script>
    <script src="<?php echo base_url().'asset/js/morris/morris.js'; ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/custom.js'; ?>"></script>
    
   
</body>
</html>
 <?php
 }else if($level == "2") //driver
 {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuNS | Driver Page </title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url().'asset/css/bootstrap.css'; ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url().'asset/css/font-awesome.css'; ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url().'asset/js/morris/morris-0.4.3.min.css'; ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'asset/css/custom.css'; ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Driver Page</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="<?php echo site_url ('daftar_masuk/logout', 'Keluar &raquo;');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url().'asset/img/find_user.png'?>" class="user-image img-responsive"/>
          </li>
        
                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Profile</a>
                    </li>
                     <li>
                        <a  href="ui.html"><i class="fa fa-qrcode fa-3x"></i>Scan QR Code</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-map-marker fa-3x"></i>View Map</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome <?php echo $pengguna->username;?> , Love to see you back.</h2>   
                    </div>
                </div>             
                <hr />                
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Full Name</strong>
                             <p class="text-muted"><?php echo $pengguna->full_name;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Address</strong>
                             <p class="text-muted"><?php echo $pengguna->address;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; IC Number</strong>
                             <p class="text-muted"><?php echo $pengguna->ic_no;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Contact Number</strong>
                             <p class="text-muted">+60<?php echo $pengguna->contact_no;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Email Address</strong>
                             <p class="text-muted"><?php echo $pengguna->email;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Gender</strong>
                             <p class="text-muted"><?php if($pengguna->gender == 0)
                                                        {
                                                        echo "Male";
                                                        }
                                                        else
                                                        {
                                                        echo "Female";}?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Race</strong>
                             <p class="text-muted"><?php if($pengguna->race == 1)
                                                        {
                                                        echo "Melayu";
                                                        }
                                                        else
                                                        {
                                                        echo "Cina";}?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Religion</strong>
                             <p class="text-muted"><?php if($pengguna->religion == 1)
                                                        {
                                                        echo "Islam";
                                                        }
                                                        else
                                                        {
                                                        echo "Kristian";}?></p>
                        </div>
                    </div>              
        </div>          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/jquery-1.10.2.js'; ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/bootstrap.min.js'; ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/jquery.metisMenu.js'; ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url().'asset/js/morris/raphael-2.1.0.min.js'; ?>"></script>
    <script src="<?php echo base_url().'asset/js/morris/morris.js'; ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/custom.js'; ?>"></script>
    
   
</body>
</html>
  <?php
 }
 else //user 
 {
  ?>
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuNS | User Page </title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url().'asset/css/bootstrap.css'; ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url().'asset/css/font-awesome.css'; ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url().'asset/js/morris/morris-0.4.3.min.css'; ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url().'asset/css/custom.css'; ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">User Page</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="<?php echo site_url ('daftar_masuk/logout', 'Keluar &raquo;');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url().'asset/img/find_user.png'?>" class="user-image img-responsive"/>
          </li>
        
                    <li>
                        <a class="active-menu"  href="<?php echo site_url ('daftar_masuk/index');?>"><i class="fa fa-dashboard fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url ('daftar_masuk/user_view');?>"><i class="fa fa-map-marker fa-3x"></i>View Map</a>
                    </li>     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome <?php echo $pengguna->username;?> , Love to see you back.</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Full Name</strong>
                             <p class="text-muted"><?php echo $pengguna->full_name;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Address</strong>
                             <p class="text-muted"><?php echo $pengguna->address;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; IC Number</strong>
                             <p class="text-muted"><?php echo $pengguna->ic_no;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Contact Number</strong>
                             <p class="text-muted">+60<?php echo $pengguna->contact_no;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Email Address</strong>
                             <p class="text-muted"><?php echo $pengguna->email;?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Gender</strong>
                             <p class="text-muted"><?php if($pengguna->gender == 0)
                                                        {
                                                        echo "Male";
                                                        }
                                                        else
                                                        {
                                                        echo "Female";}?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Race</strong>
                             <p class="text-muted"><?php if($pengguna->race == 1)
                                                        {
                                                        echo "Melayu";
                                                        }
                                                        else
                                                        {
                                                        echo "Cina";}?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; Religion</strong>
                             <p class="text-muted"><?php if($pengguna->religion == 1)
                                                        {
                                                        echo "Islam";
                                                        }
                                                        else
                                                        {
                                                        echo "Kristian";}?></p>
                        </div>
                    </div>            
        </div>        
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/jquery-1.10.2.js'; ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/bootstrap.min.js'; ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/jquery.metisMenu.js'; ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url().'asset/js/morris/raphael-2.1.0.min.js'; ?>"></script>
    <script src="<?php echo base_url().'asset/js/morris/morris.js'; ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url().'asset/js/custom.js'; ?>"></script>
    
   
</body>
</html>
  <?php
 }
 ?>

