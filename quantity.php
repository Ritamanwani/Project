 <?php 
include("connection.php");

     $qua=$_POST['qua'];
     $amount=mysql_query("SELECT IsQuantity FROM project where ProjID='".$qua."';");
	  														
    $a=mysql_fetch_array($amount);
   if($a['IsQuantity'] !=0){

	   ?>
      
<?php    
?><b>Quantity <b><input type="text"  <?php  if($a['IsQuantity'] != 0) { ?>
                                value="<?php echo $a['IsQuantity'];?>"   <?php } ?>/><?php }?>