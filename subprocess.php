<?PHP
 include("connection.php");
if($_GET[ "ProjID" ]!=""){
$project_id=$_GET[ "ProjID" ];

 $sql = "SELECT * FROM subproject WHERE ProjID=$project_id";
 $result = mysql_query( $sql ) or die(mysql_error());
 if(mysql_num_rows($result) > 0){
	?>
    <form action="add.php" method="get">
    <b>Sub Projects<b>
   <select name="sub"  onchange="fixamount(this.value)">
         
           			 <?php  while( $row = mysql_fetch_array( $result)){
					?>
            		<option value="<?php echo $row['SubProjID']?>" >
            			<?php echo $row['SprojName'];?></option>
                   <?php }  
			    ?>
</select>
<?php }
	
	$sql_donation=mysql_query("select * from project where ProjID=$project_id");
	$project_array=mysql_fetch_array($sql_donation);
	
		if($project_array['IsDonation']==1){
			$donation_array=mysql_query("select * from donationtype");?>
			
            
			<br /><b>Donation:<b>
			
			 <select name="donation"><?php
            	 
             		while( $row2 = mysql_fetch_array($donation_array)){
				?>
		<option value="<?php echo $row2['DonTypeID']?>"><?php echo $row2['DonationName'];?></option>
			   <?php }  
			    ?>
</select><br /><?php
		}
		else
		 echo "";
	
	
		if($project_array['IsCountry']==1){
			$donation_array=mysql_query("select * from country");?>
			
            
			<b>country:<b>
			
			 <select name="country">
			 <option value="0">Where Most Needed</option><?php
            	 
             		while( $row3 = mysql_fetch_array($donation_array)){
				?>
		<option value="<?php echo $row3['CountryID']?>"><?php echo $row3['CountryName'];?></option>
			   <?php }  
			    ?>
</select><br />
<?php
		}
			
		if($project_array['IsQuantity'] ==1){

   ?>
<br />
<b>Quantity <b>
  <input type="text"  <?php  if($project_array['IsQuantity'] != 0) { ?>
            value="<?php echo $project_array['IsQuantity'];?>"   <?php } ?>/><?php }
			}
	?>  
        </form>