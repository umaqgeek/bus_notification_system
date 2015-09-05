<html>
 <!--<head>
  <title>Form Login</title>
  <style>
   body
   {
    font-family:Calibri;
    margin:50px;
   }
   
   #form-login{
   margin:auto;
   width:500px;
   padding:10px;
   border:1px #ccc solid;
   font-size:18px;
   font-weight:bold;
   color:#FF6600;
   }
   
   .inputan
   {
    padding:3px;
    font-family:Calibri;
    border:1px solid #ccc;
   }
   
   .tombol
   {
    padding:5px;
    background:#FF6600;
    color:#FFF;
    font-weight:bold;
    font-family:Calibri;
    font-size:15px;
    border:#eee 1px solid;
   }
   
   .error
   {
    color:#FF6600;
    font-size:11px;
   }-->
   
   
  </style>
 </head>
 <body>
 <form action="<?php echo base_url();?>index.php/daftar_masuk/login_form" method="post" name="login">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">

 <!-- <div id="form-login">
      Administrator Page - Plase Login First
      <br><br>
      <table border="0" cellpadding="4">
       <tr>
        <td>Username</td>
        <td>:</td>
        <td>
<input type="text" size="40" name="username" value="<?php //echo set_value(//'username');?>" class="inputan">
       <?php //echo form_error('username');?></td>
       </tr>
       <tr>
        <td>Password</td>
        <td>:</td>
       <td>
<input type="password" size="40" name="password" value="<?php //echo set_value('password');?>" class="inputan">
       <?php //echo form_error('password');?></td>
       </tr>
       <tr>
        <td>Level</td>
        <td>:</td>
        <td><select name="level" class="inputan">
        <option value="1">Admin</option>
        <option value="2">Operator</option>
        </select></td>
       </tr>
       
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="login" value="Login" class="tombol"> </td>
       </tr>
      </table>
  </div>
  </form>
 </body>
</html>-->
 
<div id="login" style="margin:0 auto;">
         <h2>Login Form</h2>
         <hr/>
         <label>UserName :</label>
         <input type="text" name="username" id="name" placeholder="username"/><br /><br />
         <label>Password :</label>
         <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
          <tr>
        <td>Level</td>
        <td>:</td>
        <td><select name="level" class="inputan">
        <option value="1">Admin</option>
        <option value="2">Driver</option>
        </select></td>
       </tr><br/><br/>
         <input type="submit" value=" Login " name="submit"/><br />
        
       
      
     <!--<a href="<?php //echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a>
         <a href="signup">To SignUp Click Here</a>
     </div>

   </form>
 </body>
  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"cfb4db53e0","applicationID":"5090808","transactionName":"ZAQENkpXDEIEWkdaWl1OMxBRGRZEEVZBWlRfTgoNX18MbgFcXlwaWg8CB0AYElkV","queueTime":0,"applicationTime":0,"atts":"SEMHQAJNH0w=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-632.min.js"}</script>
</html>
