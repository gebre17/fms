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
<link type="text/css" href="Abay2.css" rel="stylesheet" />
</head>

<body><!-- end of templatemo_menu -->

<div id="Abay">
  <div id="Abay_header"><div id="header2">	</div></div>
	<div id="Abay_menu1">
		<div id="Abay_menu2">
			<div id="Abay_menu3">	
			<div id="Abay_menu4">
						<?php include('sidecontscm.php'); ?>
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
						 <center><u><h1>Assign Vehicle to a Driver</h1></u></center>
						 <center><table border=3px><tr><td style=font-family:Times New Roman;>
									<?php
									include('connection.php');
								if(isset($_POST['add']))
								{
										$id =$_POST['pl'];
										$name =$_POST['id'];
										//$ligr =$_POST['da'];
										$active ="true";
										
									$sqli=mysql_query("select count(*) As assigned from  assigndriver where Plate_No='$id' and Driver_ID='$name' and Active='true'");
									while($row=mysql_fetch_array($sqli))
									{
										$assigned=$row['assigned'];
									}
									if($assigned==0)
									{
										$sql=mysql_query("insert into assigndriver values ('$id','$name','" .date('Y-m-d') . "','','true')"); 
												if(!$sql)
												{
													echo"Data not inserted:";
												}
												else
												{
													echo "data has  Saved successfully";

												}
												mysql_query("update vehicle set status='Assign' where Plate_No='$id'");
												mysql_query("update driver set status='Assign' where did='$name'");
									
									}
									else
									{
										echo"The driver or vehicle are already assigned:";
									}
									
								   }
								?>
								 <form action="" method="POST">
									<table>
										<tr><td style=font-size:20px;>Driver ID And Name:
										<?php $sqll=mysql_query("select *from  driver where status='Unassign'");
										echo"<select name='id'>";
										while($row=mysql_fetch_array($sqll))
										{
										
										echo" <option value='".$row['did']."'> ".$row['did']." | ".$row['firstName']."</option>";
										
										}echo"</select>";?>
										
										</td></tr>
									
									<tr><td style=font-size:20px;>Vehicle plate No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<?php $sqll=mysql_query("select *from vehicle where status='Unassign' ");
									echo"<select name='pl'>"; 
									while($row=mysql_fetch_array($sqll))
										{
											
										echo" <option value='".$row['Plate_No']."'> ".$row['Plate_No']." | ".$row['vehicle_type']."</option>";
										
										}echo"</select>";?>
										
										</td></tr>
									<tr><td style=font-size:25px;><input type="submit" value="Assign" name="add">&nbsp;&nbsp;&nbsp;
									<input type="reset" value="Reset"></td></tr>
									</table></form></td></tr></table></center>

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