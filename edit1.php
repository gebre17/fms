			<?php
session_start();
include('connection.php');

$Driver_ID= ($_POST['did']);
$first = ($_POST['fname']);
$last = ($_POST['lname']);
$sex = ($_POST['sex']);
$licence = ($_POST['lgrade']);
if(mysql_query("UPDATE driver SET did='$Driver_ID',firstName='$first',lastName='$last', sex='$sex',LisenceGrade='$licence' WHERE did='$Driver_ID'"))
echo '<script type="text/javascript">alert(" record updated successfully!!");window.location=\'managdriver.php\';</script>';

else
echo "error update news"."".mysql_error();
?>