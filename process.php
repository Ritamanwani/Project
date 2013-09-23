if($_GET['amount']!=""){
 
?>
<style>
	*{
		color:red;	
	}
</style>
 <article class="box is-post" style="height:auto;" >
                                    	<table border="5" width="100%" >
                                        	<tr  bgcolor="#003300"  height="40px" align="center" >
                                              <th>x</th>
                                              <th>No.</th>
                                              <th>Program</th>
                                              <th>Project</th>
                                              <th>Country</th>
                                              <th>Donation Type</th>
                                              <th>Amount</th>
                                              <th>Qty</th>
                                              <th>Sub Total</th>
                                           </tr><?php 
										   $i=1;
										   foreach($_SESSION as $key => $program){
											 ?>
                                             <pre>
                                             <?php
											print_r( $_SESSION);
											?>
                                            </pre>
