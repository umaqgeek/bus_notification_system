<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Bus Plate</td>  
             <td>Driver</td> 
            <td>location_name</td>  
            <td>Date Time</td>  
         </tr>  
         <?php 
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td></td>  
            <td></td>
            <td><?php echo $row->location_name;?></td>
            <td></td>
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>  