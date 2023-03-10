<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>


<html>
<head>
<title>BDU</title>
<link href="Abay1.css" rel="stylesheet" type="text/css" />
<link href="images/qqq.png" type="image/x-icon" rel="icon" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript"> <!--------------------------TO PREVENT BACK AFTER SIGN OUT PROCESS-----------------------
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
 </script>
<script type="text/javascript">
function checkform(form){
if(form.id.value==""){
alert("Please fill Driver Id");
form.id.focus();
return false;
}
}
	</script>
<link type="text/css" href="Abay2.css" rel="stylesheet" />
</head>
<body><!-- end of templatemo_menu -->

<div id="Abay">
  <div id="Abay_header"><div id="header2">	</div></div>
	<div id="Abay_menu1">
		<div id="Abay_menu2">
			<div id="Abay_menu3">	
			<div id="Abay_menu4">
					  <?php include('schedulerheader.php'); ?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end of templatemo_site_title_bar_wrapper -->

<div id="Abay_Content_Outter">
	<div id="Abay_Content_Inner"> 
        <div id="Abay_Content">
        	<div class="section_w860">						
             <div class="section_w380r float_r"> 
			 	<center><u><h2>All Registered Driver</h2></u></center>
					 <form name="" method="post" action="viewsearchdriv.php" onsubmit="return checkform(this)">
<table width="450px">
<tr>
 <td>
 <font> <label for="firstName">Enter "Driver ID"</label>
 <input  type="text" name="id" maxlength="30" size="30">
  <font face = "time news roman" size="4px" color="#FFFFFF""><input type="submit" name="submit" value="Search">
  <font face="Times New Roman" size="4px" color="#FFFFFF"><input type="reset" name="reset" value="Clear" > 
 </td>
</tr>
</table>
</form>
						<?php

	include('connection.php');

	$result = mysql_query("SELECT * FROM driver") 
		or die(mysql_error());  
		
	// display data in table


	echo "<table border=2>";
	echo "<tr>  
	<th>Driver ID</th> 
	<th>First Name</th>
	<th>Last Name</th>
	<th>Sex</th> 
	<th>Licence Grade</th>
	<th>photo</th>
	<th> Status</th>
	<th> Action</th>
	</tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['did'] . '</td>';
		echo '<td>' . $row['firstName'] . '</td>';
		echo '<td>' . $row['lastName'] . '</td>';
		echo '<td>' . $row['sex'] . '</td>';
		echo '<td>' . $row['LisenceGrade'] . '</td>';
		echo '<td><img src=images/'.$row['photo'].' width=70 height=40/></td>';
		echo '<td>' . $row['status'] . '</td>';								
		echo '<td>' . $row['Action'] . '</td>';								
		

 ?>
 <?php


		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>
                   <div class="cleaner_h20"></div>
                </div>
	        </div>  
            <div class="cleaner"></div>        
        </div>
        <div id="templatemo_content_bottom"></div> 
    </div> <!-- end of templatemo_content_wrapper_inner -->
</div> <!-- end of templatemo_content_wrapper_outter -->
<div id="templatemo_footer_wrapper">
   <div id="templatemo_footer">
		   <div class="cleaner_h40"></div>
		<center><tr><td colspan="3"><div> <br/> &copy; All Right Reserved Bahirdar University Vehicle Managment Office</div></td></tr></center> </div> <!-- end of footer -->
 </div> <!-- end of footer -->
</div>
                                                                        
</body>
</html>