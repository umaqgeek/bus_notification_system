<html>
 <head>
  <title>Selamat Datang Friend</title> 
 <style>
 body
   {
    font-family:Calibri;
   }
 </style>  
 </head>
 <body>
 <?php
  if($level == "1")
  {
 ?>
 <h2>Hai <?php echo $pengguna->nama;?>, anda login sebagai Administrator 
 <?php echo anchor('daftar_masuk/logout', 'Keluar &raquo;');?></h2>
 <?php
   redirect('daftar_masuk/user');
 }else if($level == "2")
 {
  ?>
  <h2>Hai <?php echo $pengguna->nama;?>, anda login sebagai driver
  <?php echo anchor('daftar_masuk/logout', 'Keluar &raquo;');?></h2>
  <?php
 }
 else 
 {
  ?>
  <h2>Hai <?php echo $pengguna->nama;?>, anda login sebagai passenger
  <?php echo anchor('daftar_masuk/logout', 'Keluar &raquo;');?></h2>
  <?php
 }
 ?>
 </body>
</html>
