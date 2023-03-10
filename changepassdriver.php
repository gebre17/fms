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


<?php
include('connection.php');

	if(isset($_SESSION["User_Name"]))
	{            $msg="";
		        $msg1="";
				$msg2="";
				$user = ucfirst($_SESSION["User_Name"]);			
			    $sql=mysql_query("select * from users where User_Name='$user'");
				$row=mysql_fetch_array($sql);
				$pass=$row['Password'];
      		    
		if(isset($_POST['add']))
		{       
		        $up="";
				$old=$_POST['ol'];				
				$old=md5($old);				
				$new=$_POST['ne'];				
				$nw=md5($new);				
				$rety=$_POST['re'];
				
				if($pass==$old && $new == $rety)
				    {
					$up=mysql_query("update users set Password='$nw' where User_Name='$user'");
				    }
				    if($up)
					{
					$msg="Sucessfully chenged!";									
					}
					else if($old!=$pass)
					{
					$msg1="Incorrect old password!";									
					}
					else if($new!=$rety)
					{
					$msg2="The two password does not much!";
									
					}
					
	    }
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
<link type="text/css" href="Abay2.css" rel="stylesheet" />
</head>

<body><!-- end of templatemo_menu -->

<div id="Abay">
  <div id="Abay_header"><div id="header2">	</div></div>
	<div id="Abay_menu1">
		<div id="Abay_menu2">
			<div id="Abay_menu3">	
			<div id="Abay_menu4">

			   <?php include('driverheader.php'); ?>
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
			   <center><h2><u>Change Your Password</u></h2><center> 
			   <table border=4px><tr><td style=font-family:Times New Roman;>
				<form action="" method="POST">
				                      <?php 
									   print"<h4><font color='blue'>$msg </font></h4>";
										print"<h4><font color='red'>$msg1</font></h4>";
										print"<h4><font color='red'>$msg2</font></h4>";
										?>
				<p style="font-size:20px">Old Password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="ol" placeholder="please enter old password" required></p>
			   <p style="font-size:20px"> new Password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="ne" placeholder="please enter new password" required></p>
				<p style="font-size:20px">Cofirm Password:<input type="password" name="re" placeholder="please confirm password" required></p>
				<p><center><input type="submit" value="Change" name="add">&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"><center></p><br/>
				</form></td></tr></table>
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