<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php echo base_url().'images/buns.png'?>">
        <title>BuNS - Bus Notification System</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url().'css/bootstrap.min.css';?>" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" />
        <link href="<?php echo base_url().'assets/ionicon/css/ionicons.min.css';?>" rel="stylesheet" />
        <link href="<?php echo base_url().'css/material-design-iconic-font.min.css';?>" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url().'css/animate.css';?>" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url().'css/waves-effect.css';?>" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url().'css/helper.css';?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'css/style.css';?>" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'js/modernizr.min.js';?>"></script>
        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>BuNS</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?php echo base_url();?>index.php/daftar_masuk/login_form" method="post" name="login">
                <?php echo validation_errors('<p class="error">'); ?>
        <?php echo form_open("daftar_masuk/registration"); ?>   
                    
          <div class="form-group ">
                        <div class="col-xs-12">
                             <label >Username</label>
               <input class="form-control input-lg " type="text" required="" placeholder="Username" name="username" id="username" value="<?php echo set_value('username'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                             <label>Password</label>
               <input class="form-control input-lg" type="password" required="" placeholder="Password" name="password" id="password">
                        </div>
                    </div>
    <div class="form-group">
        <div class="col-sm-10">
        <label>Level</label>
        <select name="level" class="form-control"">
            <option> Select Level</option>
            <option value="1">Administrator</option>
            <option value="2">Bus Driver</option>
            <option value="3">Passenger</option>
        </select>
    </div>
        </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit" value=" Login " name="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                            <i class="fa fa-lock m-r-5"></i>Don't have an account. &nbsp;<?php echo anchor('daftar_masuk/registration', 'Register Here');?>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
      <script>
            var resizefunc = [];
        </script>
      <script src="<?php echo base_url().'js/jquery.min.js'; ?>"></script>
        <script src="<?php echo base_url().'js/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo base_url().'js/waves.js'; ?>"></script>
        <script src="<?php echo base_url().'js/wow.min.js'; ?>"></script>
        <script src="<?php echo base_url().'js/jquery.nicescroll.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'js/jquery.scrollTo.min.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/jquery-detectmobile/detect.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/fastclick/fastclick.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/jquery-slimscroll/jquery.slimscroll.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/jquery-blockui/jquery.blockUI.js'; ?>"></script>
        <script src="<?php echo base_url().'js/jquery.app.js'; ?>"></script>
  
  </body>
</html>