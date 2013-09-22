<?php

include("connection.php");

if(isset($_POST['contiune']))
{
	$F= $_POST['fname'];
	$M = $_POST['mname'];
	$L= $_POST['lname'];
	$mail = $_POST['mail'];
	$sad = $_POST['address'];
	$state= $_POST["state"];
	$pro= $_POST["province"];
	$z= $_POST["zip"];
	$c= $_POST["country"];
	$phone= $_POST["phone"];
	
 	
	



    $sql = "INSERT INTO user 
		
		(
                FName,
                MName,
				LName,
				Email,
				Password,
				Address,
				ZCode,
				Phone,
				Comments
		
		)
            VALUES (
                '$F',
				'$M',
				'$mail',
				'$sad',
				'$state',
				'$pro',
				'$z',
				'$c',
				'$phone')";
					
		mysql_query($sql)or die(mysql_error());
	
		//header("Location:profile.php");

}

?>