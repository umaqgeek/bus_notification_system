<html>
<link href="../../asset/css/style.css" rel="stylesheet" type="text/css">
  </style>
 </head>
 <title>BuNS | Sign Up </title>
 <body>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
	<?php echo validation_errors('<p class="error">'); ?>
	<?php echo form_open("daftar_masuk/registration"); ?>
	
	<div id="login" style="margin:0 auto;">
    <header>
           <h2><img src="../../asset/img/buns1.png" width="182" height="181" alt=""/></h2>
         </header>
         <h2>Bus Notification System</h2>
         <hr/>
         <label>Full Name :</label>
         <input type="text" name="full_name" id="full_name" placeholder="Full Name" value="<?php echo set_value('full_name'); ?>"/><br /><br />
         <label>Address :</label><br />
		 <textarea rows="4" cols="42" id="address" name="address" placeholder="Address" value="<?php echo set_value('address'); ?>" />
		 </textarea><br /><br />
		 <label>IC Number:</label><br />
		 <input type="text" id="ic_no" name="ic_no" placeholder="870501086561" value="<?php echo set_value('ic_no'); ?>" /><br /><br />
		 <label>Contact Number:</label><br />
		 <input type="text" id="contact_num" name="contact_num" placeholder="+60123456789" value="<?php echo set_value('contact_num'); ?>" /><br /><br />
		 <label>Email Address:</label>
		 <input type="text" id="email_address" name="email_address" placeholder="contoh@email.com" value="<?php echo set_value('email_address'); ?>" /><br /><br />
		 <td>Gender : </td>
		 <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
		 <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
		 <tr><br /><br />
         <td>Race</td>
         <td>:</td>
         <td><select name="race" >
         <option value="1">Melayu</option>
         <option value="2">Cina</option>
         <option value="3">India</option>
         </select></td>
         </tr><br /><br />
		 <tr>
        <td>Religion</td>
        <td>:</td>
        <td><select name="religion" >
        <option value="1">Islam</option>
        <option value="2">Buddha</option>
        <option value="3">Hindu</option>
        </select></td>
        </tr><br /><br />
		<label>Username:</label>
		<input type="text" id="user_name" name="user_name" placeholder="Username"value="<?php echo set_value('user_name'); ?>" /><br/><br />
		<label>Password :</label>
        <input type="password" name="password" id="password" placeholder="**********" value="<?php echo set_value('password'); ?>"/><br/><br />
        <label>Confirm Password:</label>
		<input type="password" id="con_password" name="con_password" placeholder="**********" value="<?php echo set_value('con_password'); ?>" />
		<br/><br/>
       <input type="submit" value=" Register " name="register"/><br />
	   Already have an account. <?php echo anchor('daftar_masuk/login_form', 'Login Here');?>
 </div>
 </form>
 </body>
 </html>