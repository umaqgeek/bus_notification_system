<html>
<head>
 </head>
 <body>
 <form action="<?php echo base_url();?>index.php/daftar_masuk/registration" method="post" name="register">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
 
<div id="login" style="margin:0 auto;">
         <h2>User Registration Form</h2>
         <hr/>
         <label><b>Full Name :</b></label>
         <input type="text" name="full_name" id="full_name" placeholder="Full Name" value="<?php echo set_value('full_name'); ?>" required/><br /><br />
		 <label><b>Address :</b></label>
         <input type="text" name="address" id="address" placeholder="Address" value="<?php echo set_value('address'); ?>"required/><br /><br />
		 <label><b>IC Number :</b></label>
         <input type="text" name="ic_no" id="ic_no" placeholder="IC Number " value="<?php echo set_value('ic_no'); ?>" required/><br /><br />
		 <label><b>Contact Number :</b></label>
         <input type="text" name="contact_no" id="contact_no" placeholder="Contact Number "value="<?php echo set_value('contact_n0'); ?>"  required/><br /><br />
		 <label><b>Email Address :</b></label>
         <input type="text" name="email" id="email" placeholder="Email Address ie abc@email.com" value="<?php echo set_value('email'); ?>" required/><br /><br />
		 <label><b>Gender :</b></label> <br /><br />
         <label><input type="radio" name="gender" id="gender"  value="<?php echo set_value('male'); ?>"/>Male</label>
		 <label><input type="radio" name="gender" id="gender" value="<?php echo set_value('female'); ?>"/>Female</label><br /><br />
		 <label><b>Race :</b></label> <br /><br />
         <label><input type="radio" name="race" id="melayu" value="<?php echo set_value('melayu'); ?>"/>Melayu</label>
		 <label><input type="radio" name="race" id="india"  value="<?php echo set_value('india'); ?>"/>India</label>
		 <label><input type="radio" name="race" id="cina"  value="<?php echo set_value('cina'); ?>"/>Cina</label>
		 <label><input type="radio" name="race" id="lain" value="<?php echo set_value('lain'); ?>"/>Lain-lain</label><br /><br />
		 <label><b>Religion :</b></label> <br /><br />
         <label><input type="radio" name="religion" id="islam" value="<?php echo set_value('islam'); ?>"/>Islam</label>
		 <label><input type="radio" name="religion" id="kristian" value="<?php echo set_value('kristian'); ?>"/>Kristian</label>
		 <label><input type="radio" name="religion" id="buddha" value="<?php echo set_value('buddha'); ?>"/>Buddha</label>
		 <label><input type="radio" name="religion" id="hindu" value="<?php echo set_value('hindu'); ?>"/>Hindu</label><br /><br />
		 <label><input type="radio" name="religion" id="lain2" value="<?php echo set_value('lain2'); ?>"/>Lain-lain</label><br /><br />
         <label><b>Username :</b></label>
         <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required/><br /><br />
		 <label><b>Password :</b></label>
         <input type="password" name="password" id="password" placeholder="**********" value="<?php echo set_value('password'); ?>" required/><br/><br />
		 <label><b>Confirm Password :</b></label>
         <input type="password" name="cpassword" id="cpassword" placeholder="**********" value="<?php echo set_value('cpassword'); ?>" required/><br/><br />
         <tr>
        <input type="submit" value=" Register " name="submit"/><br />
</div>
		 
      
