<?php
session_start();
include('connection.php');
$ctrl = $_REQUEST['enable'];
$SQL = "update users set status='1' WHERE id= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managacc.php'</script>";
?>