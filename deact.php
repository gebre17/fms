<?php
session_start();
include('connection.php');
$ctrl = $_REQUEST['enable'];
$SQL = "update driver set Action='deactive' WHERE did= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managdriv.php'</script>";
?>