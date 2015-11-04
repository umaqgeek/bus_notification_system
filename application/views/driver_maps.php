<<<<<<< HEAD
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
                        <a href="<?php echo site_url ('daftar_masuk/driver_bus');?>"><i class="fa fa-male fa-3x"></i>Select Bus</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo site_url ('map');?>"><i class="fa fa-map-marker fa-3x"></i>View Maps</a>
                    </li> 
                </ul>
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
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
        var map;    // Google map object
        
        function loopLocation() 
        {
            getLocation();
            setTimeout( "loopLocation()", 2000);
        }

       getLocation();
        // Initialize and display a google map
        function getLocation()
        {
            // HTML5/W3C Geolocation
            if ( navigator.geolocation ) {
                navigator.geolocation.getCurrentPosition( UserLocation );

                }
            // Default to Washington, DC
            else
                ShowLocation( 38.8951, -77.0367, "Washington, DC" );
        }
        
        // Callback function for asynchronous call to HTML5 geolocation
        function UserLocation( position )
        {
            ShowLocation( position.coords.latitude, position.coords.longitude, "This is your Location" );
            /*$.post("http://tuffah.info/bns_system/index.php/driver/saveDriverLocation", {
                    latitud: position.coords.latitude,
                    longitud: position.coords.longitude
                }).done(function( data ) { });*/
        }
        
        // Display a map centered at the specified coordinate with a marker and InfoWindow.
        function ShowLocation( lat, lng, title )
        {
            // Create a Google coordinate object for where to center the map
            var latlng = new google.maps.LatLng( lat, lng );    
            
            // Map options for how to display the Google map
            var mapOptions = { zoom: 15, center: latlng  };
            
            // Show the Google map in the div with the attribute id 'map-canvas'.
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            
            // Place a Google Marker at the same location as the map center 
            // When you hover over the marker, it will display the title
            var marker = new google.maps.Marker( { 
                position: latlng,   
                map: map,      
                title: title,
                animation:google.maps.Animation.BOUNCE
            });
            
            // Create an InfoWindow for the marker
            var contentString = "<b>" + title + "</b>"; // HTML text to display in the InfoWindow
            var infowindow = new google.maps.InfoWindow( { content: contentString } );
            
            // Set event to display the InfoWindow anchored to the marker when the marker is clicked.
            google.maps.event.addListener( marker, 'click', function() { infowindow.open( map, marker ); });
            
        }
        
        // Call the method 'Init()' to display the google map when the web page is displayed ( load event )
        google.maps.event.addDomListener( window, 'load', getLocation );

        </script>
        <style>
        /* style settings for Google map */
        #map-canvas {
                    height: 500px;
                    width: 1200px;      
                    border:10px solid #eaeaea;      
                    margin-top:20px;      
                    margin-bottom:20px; }   
                    /* #Tablet (Portrait) ================================================== */ @media only screen and (min-width: 768px) and (max-width: 959px) 
                    {      
                    #map-canvas {           
                        height: 500px;           
                        width: 708px;      } }   
                        /* #Mobile (Portrait) ================================================== */ @media only screen and (max-width: 767px) 
                        {      
                        #map-canvas {           
                        height: 260px;           
                        width: 260px;      } }   /* #Mobile (Landscape) ================================================== */ @media only screen and (min-width: 480px) and (max-width: 767px) 
                        {      
                        #map-canvas {           
                        height: 400px;           
                        width: 400px;      } } 
        </style>

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
>>>>>>> origin/amarul
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
                
                
                 <div id='map-canvas' ></div>
                 <!--<center>
                 <img src="<?php echo base_url().'images/bus.png'?>" class="img-responsive" ></center>         
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Bus Plate Number</th>
                                                                <th>Driver</th>
                                                                <th>Location</th>
                                                                <th>Date Time</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                    for ($i = 0;$i < count($location); ++$i) 
                                                                        { ?>
                                                                       <tr>
                                                                       <td><?php echo ($i+1); ?></td>
                                                                       <td><?php echo $location[$i]->driver_location_id; ?></td>
                                                                       <td><?php echo $location[$i]->qrcode_id; ?></td>
                                                                       <td><?php echo $location[$i]->bus_driver_id; ?></td>
                                                                       <td><?php echo $location[$i]->datetime; ?></td>
                                                                       </tr><?php } ?>
                                                        </tbody>
                                                    </table>-->
                                                </div>
                                            </div>

                 </div></div> <!-- content -->

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