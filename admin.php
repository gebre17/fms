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
 <div id="Abay_header"><div id="header2">	</div></div>
	<div id="Abay_menu1">
		<div id="Abay_menu3">	
		  <?php include('adminheader.php'); ?>
			</div>
	   </div>

<div id="Abay_Content_Outter">
	<div id="Abay_Content_Inner"> 
        <div id="Abay_Content">
        	<div class="section_w860">						
             <div class="section_w380r float_r">  
                   
						<h1><center><u> wellcome Adiministrator </u></center></h1>
						<center>
						<table border=2px;><tr><td width=700px height=400px>
						<br><br><br>

						<center><b>Current Date:</b><u><?php echo date('Y-m-d'); ?></u></center>
						<center><p><b>You entered as:<u>Administrator</u></b></p></center>
					     
					<img src="images/Admin.jpg"  hieght=280px width=800px/>

						</td></tr></table></center>
						</br>
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