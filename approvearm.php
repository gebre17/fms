<?php 
include("connection.php");

  $idd=$_REQUEST['id'];
  
  mysql_query("UPDATE fuelreq set Archive_manager='Approved' where ID='$idd'");
  print "<script>location.href = 'viewfuelreqarm.php'</script>";
 
   
?>