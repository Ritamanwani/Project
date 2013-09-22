 <?php 
include("connection.php"); 

    $Iscount=$_POST['count'];
     $proj=mysql_query("SELECT IsCountry FROM project where ProjID='".$Iscount."';");
	 										
    $a=mysql_fetch_array($proj);
   if($a['IsCountry'] == 1){

     $sql=mysql_query ("select * from country");
	  mysql_num_rows($sql);
	   	   ?>
           <b>Country<b>
      <select id="Dcountry">    
              <option value="0">country</option>
	   <?php  while($row = mysql_fetch_array( $sql)){
		?>
		     
        <option value="<?php echo $row['CountryID']?>"><?php echo $row['CountryName'];?></option>
			
			<?php	
    }       
} ?>
</select>