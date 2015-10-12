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
    <?php echo validation_errors('<p class="error">'); ?>
    <?php echo form_open("daftar_masuk/registration"); ?>

        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
                </div> 

                <div class="panel-body">
                
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Full Name</label>
                            <input class="form-control input-lg" type="text" name="full_name" id="full_name" placeholder="Full Name" value="<?php echo set_value('full_name'); ?>" required/>
                        <br /></div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Address</label>
                            <textarea rows="4" cols="42" class="form-control input-lg" id="address" name="address" placeholder="Address" value="<?php echo set_value('address'); ?>" required/></textarea>
                        <br /></div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>IC Number</label>
                            <input class="form-control input-lg" type="text" id="ic_no" name="ic_no" placeholder="870501086561" value="<?php echo set_value('ic_no'); ?>" required/>
                        <br /></div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Contact Number</label>
                            <input class="form-control input-lg" type="text" id="contact_num" name="contact_num" placeholder="0123456789" value="<?php echo set_value('contact_num'); ?>" required/>
                        <br /></div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Email Address</label>
                            <input class="form-control input-lg" type="text" id="email_address" name="email_address" placeholder="contoh@email.com" value="<?php echo set_value('email_address'); ?>" required/>
                        <br /></div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Gender&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio" name="gender" value="gender" <?php echo set_radio('gender', 'male'); ?>/>Male
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="gender" <?php echo set_radio('gender', 'female'); ?>/>Female
                        <br /><br /></div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <tr>
                            <td><label>Race</label></td>
                             <td><select name="race" >
                             <option value="1">Melayu</option>
                             <option value="2">Cina</option>
                             <option value="3">India</option>
                             <option value="4">Lain-Lain</option>
                             </select></td>
                             </tr>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <tr>
                            <td><label>Religions</label></td>
                            <td><select name="religion" >
                            <option value="1">Islam</option>
                            <option value="2">Buddha</option>
                            <option value="3">Hindu</option>
                            <option value="4">Kristian</option>
                            <option value="5">Lain-Lain</option>
                            </select></td>
                            </tr><br />
                        <br /></div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Username</label>
                            <input class="form-control input-lg" type="text" id="user_name" name="user_name" placeholder="Username"value="<?php echo set_value('user_name'); ?>" required/>
                        <br /></div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Password</label>
                            <input class="form-control input-lg" type="password" name="password" id="password" placeholder="**********" value="<?php echo set_value('password'); ?>" required/>
                        <br /></div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Confirm Password</label>
                            <input class="form-control input-lg" type="password" id="con_password" name="con_password" placeholder="**********" value="<?php echo set_value('con_password'); ?>" required />
                        <br /></div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit" value=" Register " name="register">Register</button>
                            <br /><br />
                        </div>
                    </div>


                    <div class="form-group m-t-30"> 
                            Already have an account. <?php echo anchor('daftar_masuk/login_form', 'Login Here');?>   
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
        <script>
            var resizefunc = [];
        </script>
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