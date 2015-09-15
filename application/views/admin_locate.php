<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuNS | Generate QR Code </title>
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
font-size: 16px;"> Last access : 31 May 2014 &nbsp; <a href="<?php echo site_url ('daftar_masuk/logout', 'Keluar &raquo;');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url().'asset/img/find_user.png'?>" class="user-image img-responsive"/>
          </li>
                    <li>
                        <a href="<?php echo site_url ('daftar_masuk/index');?>"><i class="fa fa-dashboard fa-3x"></i> Profile</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url ('daftar_masuk/admin_generate');?>"><i class="fa fa-qrcode fa-3x"></i>Generate QR Code</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo site_url ('daftar_masuk/admin_locate');?>"><i class="fa fa-map-marker fa-3x"></i>Manage Location</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url ('daftar_masuk/admin_locatetype');?>"><i class="fa fa-map-marker fa-3x"></i>Manage Location Type</a>
                    </li>   
                    <li>
                        <a href="<?php echo site_url ('daftar_masuk/admin_manage');?>"><i class="fa fa-map-marker fa-3x"></i>Manage User</a>
                    </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Maps</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
         <hr />
                  <!--<center><img src="<?php echo base_url().'asset/img/buns_map.jpg'?>" width="1000" height="660" alt=""/></center>
                --><hr />                         
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