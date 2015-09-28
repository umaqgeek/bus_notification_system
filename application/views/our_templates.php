<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
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
                        <a class="active-menu" href="<?php echo site_url ('daftar_masuk/user');?>"><i class="fa fa-male fa-3x"></i>Grocery_crud</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url ('map');?>"><i class="fa fa-map-marker fa-3x"></i>View Maps</a>
                    </li> 
                </ul>
            </div>
        </nav>  
        

<body>
<!-- Beginning header -->
    <div>
        <!--<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | 
        <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
        <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
        <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
        <a href='<?php echo site_url('examples/products_management')?>'>Products</a> | 
        <a href='<?php echo site_url('examples/film_management')?>'>Films</a> | -->
         <a href='<?php echo site_url('daftar_masuk/bus')?>'>Bus</a> |
         <a href='<?php echo site_url('daftar_masuk/busDriver')?>'>Bus Driver</a> |
         <a href='<?php echo site_url('daftar_masuk/driverLocation')?>'>Driver Location</a> |
         <a href='<?php echo site_url('daftar_masuk/location')?>'>location </a> |
         <a href='<?php echo site_url('daftar_masuk/user')?>'>User</a> |
         
         <!--<a href='<?php //echo site_url('daftar_masuk/QR_code')?>'>QR Bus Generator </a> |-->
         <a href='daftar_masuk'>Back</a> |
         <a href='<?php echo site_url('daftar_masuk/login_form')?>'>logout </a> 
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
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

<!-- Beginning footer -->
<div>Footer</div>
<!-- End of Footer -->
</body>
</html>
 