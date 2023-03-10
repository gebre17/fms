<?php
session_start();
include('connection.php');
$ctrl = $_REQUEST['enable'];
	mysql_query("update assigndriver set UnAssign_Date='" .date('Y-m-d') . "',Active='false' where Plate_No='$ctrl'"); 
	mysql_query("update vehicle set status='Unassign' where Plate_No='$ctrl'");
	$sql=mysql_query("select Driver_ID from assigndriver ,driver where assigndriver.Driver_ID =driver.did and Plate_No='$ctrl'");
	$row=mysql_fetch_array($sql);
	$id=$row['Driver_ID'];
	mysql_query("update driver set status='Unassign' where did='$id'");

print "<script>location.href = 'unassign.php'</script>";
?>