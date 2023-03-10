<?php 
include("connection.php");

  $idd=$_REQUEST['id'];
  
  mysql_query("UPDATE fuelreq set managing_director='Approved' where ID='$idd'");
   print "<script>location.href = 'viewfuelreqmdr.php'</script>";
 
   
?>