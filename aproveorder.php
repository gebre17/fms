
<?php 
include("connection.php");

  $idd=$_REQUEST['id'];
  
  mysql_query("UPDATE   orderveh set status='complete' where ID='$idd'");
  print "<script>location.href = 'vieworder.php'</script>";
 
		?>
 
