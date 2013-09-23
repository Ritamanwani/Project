<?php
include("connection.php");
$prog_id =$_GET["pid"];
$_SESSION['prog'];

 $sql = "SELECT * FROM project WHERE ProgID='".$prog_id."'";
 $result = mysql_query($sql) or die(mysql_error());
 mysql_num_rows($result);
//print_r(mysql_fetch_array($result));
?>


<form action="add.php" method="get">
<b>Project</b>
<select id="project" name="project" onchange="subproject(this.value)" >
                              
               <?php 
			   //print_r($result);
			   while( $row = mysql_fetch_array( $result)){
			 ?>
			 <option value="<?php echo $row['ProjID']?>"><?php echo $row['ProjName'];?></option>
			<?php
}       ?>
</select><br />
</form>
