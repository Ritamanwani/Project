<?php 
include("connection.php");

     $fix=$_GET['fix'];
     $amount=mysql_query("SELECT IsFixamount FROM subproject where SubProjID='".$fix."';");
	  														
    $a=mysql_fetch_array($amount);
   if($a['IsFixamount'] !=0){

	   ?>
      
<?php    
}?>

<b>Ammount US$ <b>
  <input type="text" name="amount" <?php  if($a['IsFixamount'] != 0) { ?>
              value="<?php echo $a['IsFixamount'];?>"   <?php } else {?>
				  value=0<?php
				  
				  } ?> />