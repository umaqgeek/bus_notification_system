<html>
<head>
 </head>
 <body>
 <form action="<?php echo base_url();?>index.php/daftar_masuk/login_form" method="post" name="login">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
 
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
        <option value="3">Passenger</option>
        </select></td>
        </tr><br/><br/>
        <input type="submit" value=" Login " name="submit"/><br />
        <p>Don't have an account? <a href="<?php echo base_url();?>index.php/daftar_masuk/register">Register now</a></p>
</div>
      
