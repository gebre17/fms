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
$fna="";
$lna="";
$sx="";
$licens="";
$errors=array();
	if(isset($_POST['add']))
	{

	include('connection.php');
	$fna=$_POST["fname"];
	$lna=$_POST["lname"];
	$sx=$_POST["sex"];
	$licens=$_POST["ligr"];
	$photo=$_POST["file"];
	
if(!preg_match('/^[a-zA-Z]+$/',$fna) || empty($fna) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $fna) || preg_match( '/[\s]+/',$fna)){
array_push($errors,"first name must be character!!");
}
if(!preg_match('/^[a-zA-Z]+$/',$lna) || empty($lna) || preg_match( '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/' , $lna) || preg_match( '/[\s]+/',$lna)){
array_push($errors,"last name must be character!!");
}
if(empty($sx)){
array_push($errors,"sex is required");
}
if(count($errors)==0){
	$sql="INSERT INTO driver values ('','$fna','$lna','$sx','$licens','$photo','Unassign','Active')";
			 if(mysql_query( $sql, $conn ))
				{
					$msg="Driver Informtion Added Successfuly.";
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

            <?php include('managerheader.php'); ?>

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
                   
	             <center ><b><u><h1>Add New Driver</h1></u></b></center> 
		<form action="" method="POST">
		<center><table border=4px><tr><td style=font-family:Times New Roman;>
		<?php
										print"<h4><font color='blue'>$msg </font></h4>";
										print"<h4><font color='red'>$msg1</font></h4>";
              include('errors.php');	
									?>
									
		
		<p style=font-size:20px;>First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" placeholder=" enter your name" required="" ></p>
		<p style=font-size:20px;>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname"  placeholder=" enter your name" required="" ></p>
		<p style=font-size:20px;>Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="sex"  value="Male" placeholder=" enter your name" required="" >Male
					<input type="radio" name="sex"  value="Female" placeholder=" enter your name" required="" >Female </p>
					<p style=font-size:20px;>Lisense Grade:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="ligr"><option value="Gasoline">(none)</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		  </select></p>
		<p style=font-size:20px;>Upload photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="file"></p>
	<p style=font-size:20px;><center><input type="submit" value="Save" name="add">&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></center></p>
	</form>
			</td></tr></table>	</center>	
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