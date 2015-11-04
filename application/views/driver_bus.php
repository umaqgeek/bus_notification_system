<<<<<<< HEAD
<html xmlns="http://www.w3.org/1999/xhtml">
<head>  
<style>
table {
    width:50%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th  {
    background-color: black;
    color: white;
}
</style>
</head>
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
                <a class="navbar-brand" href="index.html">Driver Page</a> 
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
                        <a class="active-menu" href="<?php echo site_url ('daftar_masuk/driver_bus');?>"><i class="fa fa-male fa-3x"></i>Select Bus</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url ('map');?>"><i class="fa fa-map-marker fa-3x"></i>View Maps</a>
                    </li> 
                </ul>
            </div>
        </nav>  


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Select Bus</h2>   
                </div>
            </div>         
                <body>
                 <table id="t01">
                  <tbody>  
                   <tr>  
                     <td>Bus Plate No</td>  
                     <td>Action</td>              
                   </tr>  
                  <?php 
                   foreach ($i->result() as $row)  
                   {  
                  ?>
                  <tr>  
                  <td><?php echo $row->bus_plate_no;?></td>
                  <td><a href="">choose</td>
                  </tr>  
               <?php }  
              ?>  
           </tbody>  
       </table>  
      <body>  
     </body>       
                 <!-- /. ROW  -->
				 <hr />
                  <!--<center><img src="<?php echo base_url().'asset/img/buns_map.jpg'?>" width="1000" height="660" alt=""/></center>
                --><hr />                         
    </div>
             <!-- /. PAGE INNER  -->
=======
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
                                <a href="<?php echo site_url ('daftar_masuk/driver_bus');?>" class="waves-effect"><i class="md md-directions-bus"></i><span>Select Bus </span></a>
                            </li>

                            <li>
                                <a href="<?php echo site_url ('daftar_masuk/driver_maps');?>" class="waves-effect"><i class="md md-public"></i><span>View Maps </span></a>
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
                <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Select Bus</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Bus</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php if (isset($bus) && !empty($bus)) {
                                                                    foreach ($bus as $bu) //for ($i = 0;$i < count($bus); ++$i) 
                                                                        { ?>
                                                                       <tr>
                                                                       <td><?=$bu->bus_id; ?></td>
                                                                       <td><?=$bu->bus_plate_no; ?></td>
                                                                       <td><a href="<?php echo site_url ('daftar_masuk/select_bus/2?bu='.$bu->bus_id);?>">Select Bus</a></td>
                                                                       </tr><?php } }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © BuNS.
                </footer>

>>>>>>> origin/amarul
            </div>
        </div>
<<<<<<< HEAD
      
     

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
=======
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
>>>>>>> origin/amarul
    
    </body>
</html>