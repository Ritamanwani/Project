<?PHP
 include("connection.php");
$type =$_POST['dontype'];

  $sql = mysql_query("SELECT * FROM project WHERE ProjID='".$type."'");
  $result= mysql_fetch_array( $sql );

if($result['IsDonation']==1){
$q=mysql_query("SELECT * FROM donationtype");

?>

<b>Donation Type</b>
  <select name="DoType" >Donation Type</option>
      <?php while($row = mysql_fetch_array( $q)){
				?>
      <option value="<?php echo $row['DonTypeID']?>"><?php echo $row['DonationName'];?></option>
      <?php	
					}  ?>
    </select>
    <?php }?>