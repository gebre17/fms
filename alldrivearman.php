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
<link type="text/css" href="Abay2.css" rel="stylesheet" />
</head>
<body><!-- end of templatemo_menu -->

<div id="Abay">
  <div id="Abay_header"><div id="header2">	</div></div>
	<div id="Abay_menu1">
		<div id="Abay_menu2">
			<div id="Abay_menu3">	
			<div id="Abay_menu4">
				       <?php include('archivmanheader.php'); ?>
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
                   
<center><u><h2>All Driver</h2></u></center> 
<center>
<?php
include("connection.php");
  $sql=mysql_query("select * from  driver");
  echo"<table border='2'>";
	echo"<tr>
	<th>First Name</th>
	<th>last Name</th>
	<th>Sex</th>
	<th>LisenseGrade</th>
	<th>photo</th>
	<th>Status</th>
	</tr>";
		while($row=mysql_fetch_array($sql))
		{
		
	echo "<tr>
	<td>".$row['firstName']."</td>
	<td>".$row['lastName']."</td>
	<td>".$row['sex']."</td>
	<td>".$row['LisenceGrade']."</td>
	<td>".'<img src=images/'.$row['photo']." alt='something descriptive' width=100px height=50px/>'</td>
	<td>".$row['status']."</td>
	</tr>";
		}
echo"</table>";
 			
?> 
</center>
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