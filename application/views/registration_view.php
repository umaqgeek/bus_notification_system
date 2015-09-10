<div id="content">
<div class="reg_form">
<div class="form_title">Sign Up</div>
<div class="form_sub_title">It's free and anyone can join</div>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/stylo.css" />
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("daftar_masuk/registration"); ?>
      


  <p>
  <label for="ic_no">Ic no:</label>
  <input type="text" id="ic_no" name="ic_no" value="<?php echo set_value('ic_no'); ?>" />
  </p>
  <p>
  <label for="full_name">Full Name:</label>
  <input type="text" id="full_name" name="full_name" value="<?php echo set_value('full_name'); ?>" />
  </p><br>
  <tr>
        <td>Race</td>
        <td>:</td>
        <td><select name="race" >
        <option value="1">Melayu</option>
        <option value="2">Cina</option>
        <option value="3">India</option>
        </select></td>
       </tr>
  <p>
  <div>
  <td>Gender</td>
  <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
  <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
</div>
  <p>
  <label for="address">Adress:</label>
  <textarea rows="4" cols="40" id="adress" name="address" value="<?php echo set_value('address'); ?>" />
  </textarea>
  </p><br><br><br>
   <tr>
        <td>Religion</td>
        <td>:</td>
        <td><select name="religion" >
        <option value="1">Islam</option>
        <option value="2">Buddha</option>
        <option value="3">Hindu</option>
        </select></td>
       </tr>


  <p>
  <label for="contact_num">Contact Number:</label>
  <input type="text" id="contact_num" name="contact_num" value="<?php echo set_value('user_name'); ?>" />
  </p>
  <p>
  <label for="user_name">User Name:</label>
  <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
  </p>
  <p>
  <label for="email_address">Your Email:</label>
  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
  </p>
  <p>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
  </p>
  <p>
  <label for="con_password">Confirm Password:</label>
  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  </p>
  <p>
  <input type="submit" class="greenButton" name="register" value="Submit" />
  </p>
  <?php echo anchor('daftar_masuk/login_form', 'login &raquo;');?>

</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->