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
<?php
$Error = $Pass = $User = "";
if (isset($_POST["Login"]))
{
     $User =$_POST["User"];
     $Pass = $_POST["Pass"];
	 session_start();}
include('connection.php');		
?>
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
	<h2><center>All Fuel consumed</center></h2>
<table border=2><tr><td>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
 $id=$_POST['dayfrom'];
 $id1=$_POST['dayto'];
 $da=strtotime($id);
 $da1=strtotime($id1);
$sd=date('Y-m-d',$da);
$ed=date('Y-m-d',$da1);
 /*
 $idd=mysql_query("select * from usedfuel");
 $row=mysql_fetch_array($idd);
 
 $date=$row['Date_consumed'];
 $date1=strtotime($date);
 $dd=date('Y-m-d',$date1);*/
 
 $fname="";
 $count1=0;
  $query0="select * from usedfuel where Date_consumed >='$sd' AND Date_consumed<='$ed'";
 $result0=mysql_query($query0);
  if($result0)
{

echo"<tr><th>Plate No</th><th>KM Read</th> <th>Description </th><th>Date consumed</th><th>Cost Center</th><th>Quantity</th><th>Unit Price</th><th>Total Price</th></tr>";
while($row = mysql_fetch_array($result0, MYSQL_ASSOC))
{
$count1++;
  echo "<tr>";

	echo "<td>"; echo $row["Plate_No"]; echo "</td>";
	echo "<td>"; echo $row["KM_read"]; echo "</td>";
    echo "<td>"; echo $row["Description"]; echo "</td>";
	echo "<td>"; echo $row["Date_consumed"]; echo "</td>";
	echo "<td>"; echo $row["Cost_center"]; echo "</td>";
	echo "<td>"; echo $row["Quantity"]; echo "</td>";
	echo "<td>"; echo $row["Unit_price"]; echo "</td>";
	echo "<td>"; echo $row["Total_price"]; echo "</td>";
echo"</tr>"	;
}
}
else
{
die(mysql_error('not found'));
}

echo "&nbsp";
echo "&nbsp";
echo "&nbsp";
}
?>
  
</td></tr></table>
<br/><br/>
<a href="Reports.php"><img src="images/back.jpg" height=40 width=50/></a>			   
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