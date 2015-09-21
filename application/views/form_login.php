<html>
<link href="../../asset/css/style.css" rel="stylesheet" type="text/css">
  </style>
 </head>
 <title>BuNS | Login Page </title>
 <body>
 <form action="<?php echo base_url();?>index.php/daftar_masuk/login_form" method="post" name="login">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
  <?php echo validation_errors('<p class="error">'); ?>
  <?php echo form_open("daftar_masuk/registration"); ?>
  
  <div id="login" style="margin:0 auto;">
    <header>
           <h2><img src="../../asset/img/buns1.png" width="182" height="181" alt=""/></h2>
         </header>
         <h2>Bus Notification System</h2>
         <hr/>
         <label>Username :</label>
         <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required /><br /><br />
     <label>Password :</label>
         <input type="password" name="password" id="password" placeholder="**********" required /><br/><br />
          <tr>
        <td>Level</td>
        <td>:</td>
        <td><select name="level" class="inputan">
        <option value="1">Admin</option>
        <option value="2">Driver</option>
        <option value="3">Passenger</option>
        </select></td>
       </tr><br/><br/>
       <input type="submit" value=" Login " name="submit"/><br />
     Does not have an account yet. <?php echo anchor('daftar_masuk/registration', 'Register Here');?>
 </div>
 </form>
 </body>
 </html>