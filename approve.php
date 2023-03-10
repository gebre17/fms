
<?php 
include("connection.php");

  $idd=$_REQUEST['id'];
  
  mysql_query("UPDATE  maintainrequest set status='Approved' where ID='$idd' and status='Append'");
   print "<script>location.href = 'viewmaintainreq.php'</script>";
 
   
?>

