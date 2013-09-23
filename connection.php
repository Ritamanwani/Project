<?php
$con = mysql_connect("localhost","root","admin");
if (!$con)
{
	
	die("Connection Not established".mysql_error());
	}

else
 	{
	 	$database=mysql_select_db("donation",$con) or die("Database not selected:".mysql_error());
 	}





?>

	

