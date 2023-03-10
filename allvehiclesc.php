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
			  <center ><u><h2>All Registered Vehicles</h2></u></center> 

									<?php
									include("connection.php");
									  $sql=mysql_query("select * from  vehicle");
									  ?>
									  
									  <table>
									  <?php
									  echo"<table border='2'>";
										echo"<tr>
									
									
										<th>Vehicle Type</th>
										<th>Plate No</th>
										<th>Motor No</th>
										<th>Model No</th>
										<th>Chassis No</th>
										<th>Libre No</th>
										<th>Seat Capacity</th>
										<th>Milage PerLitter</th>
										<th>Fuel Type</th>
										<th>photo</th>
										<th>Status </th></tr>";
											while($row=mysql_fetch_array($sql))
											{
											
										echo "<tr>
										
									
										<td>".$row['vehicle_type']."</td>
			                             <td>".$row['Plate_No']."</td>
										<td>".$row['Motor_No']."</td>
										<td>".$row['Model_No']."</td>
										<td>".$row['Chassis_No']."</td>
										<td>".$row['Libre_No']."</td>
										<td>".$row['Seat_Capacity']."</td>
										<td>".$row['MilagePerLitter']."</td>
										<td>".$row['Fuel_Type']."</td>	
										<td>".'<img src=car/'.$row['photo']." alt='something descriptive' width=100px height=50px/>'</td>
										<td>".$row['status']."</td>
										</tr>";
											}
											?>

									 </table>	
 									 

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