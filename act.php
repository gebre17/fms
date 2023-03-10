<?php
session_start();
include('connection.php');
$ctrl = $_REQUEST['disable'];
$SQL = "update users set status='0' WHERE id= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managacc.php'</script>";
?>