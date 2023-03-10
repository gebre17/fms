<?php 
include("connection.php");

  $idd=$_REQUEST['id'];
  
  mysql_query("UPDATE   fuelreq set scheduler_manager='Approved' where ID='$idd'");
   print "<script>location.href = 'viewfuelreq.php'</script>";
 
   
?>