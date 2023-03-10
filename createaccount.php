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
$msg='';
$msg1='';
$mss='';
$mss1='';
$mss2='';

?>
<?php include('v.php'); ?>
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
   function preventBack(){
   window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
 </script>
</head>
<?php
include('connection.php');		
?>
<body><!-- end of templatemo_menu -->

<div id="Abay">
  <div id="Abay_header"><div id="header2">	</div></div>
	<div id="Abay_menu1">
		<div id="Abay_menu2">
			<div id="Abay_menu3">	
			<div id="Abay_menu4">
					 
				<?php include('adminheader.php'); ?>
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
                   
<center><u><h1>Create Account</h1></u></center>
	<center><table border=4px><tr><td width=700px>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" onsubmit='return formValidation()'>
	
					
						<?php include('errors.php');?>	
		                     <?php
									print"<h4><font color='blue'>$msg </font></h4>";
									print"<h4><font color='red'>$msg1</font></h4>";

								?>

                     
						<p style=font-size:20px;>ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id"  placeholder=" enter id " required></p>
						<p style=font-size:20px;>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name"  placeholder=" enter  full name " required></p>
						<p style=font-size:20px;>Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $email;?>" placeholder=" enter your email address "</p>
						<p style=font-size:20px;>Phone No :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" placeholder=" enter  phone no " required></p>
						<p style=font-size:20px;>Sex:
						                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex"  value="Male" pattern="[A-Za-z ]+" >Male
										&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex"  value="Female"pattern="[A-Za-z ]+" >Female </p>
						<p style=font-size:20px;> User Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username"  placeholder=" enter  username" required></p>
						<p style=font-size:20px;> password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password_1" required></p>
						<p style=font-size:20px;> confirm Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password_2" required></p>
						<p style=font-size:20px;>Role:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select type="text" name="role" required/>
								<option>Admin</option>
								<option>Manager</option>
								<option>Scheduler</option>
								<option>Scheduler Manager</option>
								<option>Driver</option>
								<option>Fuel Distributer</option>
								<option>Managing Director</option>
								<option>Archive Manager</option>
							</select></p>
						<p style=font-size:20px;><center><input type="submit" name="Register" value="Register"/>&nbsp;&nbsp;&nbsp;
						<input type="reset" value="Reset"/></p></center>
		
				
		</form></td></tr></table>	</center>
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