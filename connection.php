
<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	$sel=mysql_select_db( 'fms' );
	if(!$sel)	
	{  
		die('Could not select a database :' . mysql_error());
	}
	
	?>