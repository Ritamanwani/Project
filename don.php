<?Php
session_start();
error_reporting(0);
//session_destroy();
include('connection.php');

$q=mysql_query("SELECT * FROM program;");

?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<img src="images/bismillah.png" alt="" width="200" height="100" >
<title>Hidaya Foundation</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<!--/*<link rel="stylesheet" href="css/add.css" type="text/css">
--><script src="js/js_js.js"></script>
</head><body>
<div class="border">
  <div id="bg"> background </div>
  <div id="fade" class="grey_overlay"></div>
  <div class="page">
    <div class="sidebar"> <img src="images/quran.png" alt="logo" width="200" height="200"></a>
      <ul>
        <li class="selected"> <a href="index.php">Home</a> </li>
        <li> <a href="don.php"  target="_self">Select Donation</a> </li>
        <li> <a href="register.php">Register</a> </li>
        <li> <a href="help.php">Help</a> </li>
      </ul>
      <form action="about.html">
        <span>NEWSLETTER SIGNUP</span>
        <input type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter Valid Email Address':this.value;" value="Enter Valid Email Address">
        <input type="submit" id="submit" value="submit">
      </form>
      <div class="connect"> <a href="https://www.facebook.com/HidayaFoundation" id="facebook">facebook</a> <a href="https://twitter.com/HidayaUpdates" id="twitter">twitter</a> <a href="https://twitter.com/HidayaUpdates" id="googleplus">youtube</a> </div>
      <p> Copyright 2023 </p>
      <p> Hidaya Foundation </p>
    </div>
    <div class="body">
      <div class="portfolio">
        <ul class="navigation">
          <body>
          <li> <a href="services.html">Login</a> </li>
          <li> <a href="services.html">help</a> </li>
        </ul>
        <h3><span>Select Donation</span></h3>
        <form action="#" method="post">
          <table >
            <tr>
              <td><b>Program</b></td>
              <td></td>
            </tr>
            <?php 
				while($row = mysql_fetch_array($q)){ 
				?>
            <tr>
              <td><input type='radio' name="project" onchange="getproject(this.value)"
				
              value="<?php echo $row['ProgID'];?> "/>
                <?php echo $row['ProgName']."</td></tr>"; 
				 	
					}?>
            </tr>
              <tr>
            
              <td id='program'>
            
            <b>Project</b>
              <select id="pid" name="pid" display='none'>
            
            <option value="0">Select Project</option>
              </td>
            
              </tr>
            
              <tr id='subpro' style="display:none" name="subproj">
            
              </tr>
            
              <tr id='getfix'>
            
              <td>
            
              <b>
              
              Amount us$
              
              </b>
            
              </td>
            
              <td>
            
              <input type="text" name="amount" id="fix" value="0"/>
            
              <span>
            
            <?php  
												if(isset($_POST['add_donation'])){
													if($_POST['amount'] == 0){
													echo "Invalid Amount";
											}		
												}
												?>
              </span>
            
              </td>
            
              </tr>
            
              <tr>
            
              <td colspan="2" align="right">
            
              <input type="submit" name="add_donation"  value="ADD" id="add_donationt"  />
            
              </td>
            
              </tr>
            
          </table>
        </form>
        <?php  if(isset($_POST['add_donation']) && $_POST['amount'] > 0 ) {
					?>
        <table border="1" width="80%" height="" c>
          <tr  height="40px" align="center" >
            <th>X</th>
            <th>No.</th>
            <th>Program</th>
            <th>Project</th>
            <th>Country</th>
            <th>Donation Type</th>
            <th>Amount Us$</th>
            <th>Qty</th>
            <th>Sub Total</th>
          </tr>
          <?php  
							
							$_SESSION['count']=isset($_SESSION['count'])?($_SESSION['count']+=1):1;
						
							$count=$_SESSION['count'];
							
							for($i=1; $i <= $count; $i++){
							?>
          <tr>
            <td><input type="checkbox" name="chk<?php echo $i;?>" /></td>
            <td><?php  //echo $i; ?></td>
            <td><?php
										  
										$val = mysql_query("SELECT ProgName FROM program WHERE ProgID =".$_POST['project']);
												$program = mysql_fetch_array($val);
													if(!isset($_SESSION['prog'.$i]))
													 {
														echo $_SESSION['prog'.$i] = array('prog'.$i => $program['ProgName'] );
													 }
													$_SESSION['prog'.$i]=$program['ProgName'];
													echo $_SESSION['prog'.$i]['prog'.$i];
										print_r($_POST);
											?></td>
            <td><?php
                                        
													//echo $_POST['prjj'];
										$val2 = mysql_query("SELECT ProjName FROM project WHERE ProjID =".$_POST['subpro']);
													$val5 = mysql_query("SELECT SprojName FROM subproject WHERE SubProjID = ".$_POST['subpro']);
													$project = mysql_fetch_array($val5);
													$program = mysql_fetch_array($val2);
													//echo $program['project']." - ".$project['subproject_name'];

														
													if(!isset($_SESSION['proj'.$i]) || !isset($_SESSION['sbproj'.$i]))	{
													$_SESSION['proj'.$i]=array('proj'.$i => $program['project'] );
													$_SESSION['sbproj'.$i]=array('sbproj'.$i => $project['SprojName'] );
														}
													echo $_SESSION['proj'.$i]['proj'.$i]." - ".$_SESSION['sbproj'.$i]['sbproj'.$i];
										print_r($_POST);
											?></td>
            <td><?php
											if(isset($_POST['country']) == ""){
												
												echo 'N/A';
												}else {
													
													$val4 = mysql_query("SELECT CountryName FROM country WHERE CountryID =".$_POST['country']);
													$program = mysql_fetch_array($val4);
													
													if(!isset($_SESSION['countr'.$i])){
													$_SESSION['countr'.$i]=array('countr'.$i => $program['CountryName'] );
													
													}
													
													echo $_SESSION['countr'.$i]['countr'.$i];
													}
											//}
											?></td>
            <td><?php
                                        
													
													if(isset($_POST['donation']) == ""){
														echo 'N/A';
														
														
														}else {
													$val3 = mysql_query("SELECT DonationName FROM donationtype WHERE DonTypeID = ".$_POST['donation']);
													$program = mysql_fetch_array($val3);
													
													if(!isset($_SESSION['dont'.$i])){
													$_SESSION['dont'.$i] = array('dont'.$i => $program['DonationName'] );
													}
														
														echo $_SESSION['dontype'.$i]['dontype'.$i];
														
														}
											?></td>
            <td><?php
												if(isset($_POST['amount']) == 0){
													//echo "its zero";
													header("Location:don.php?val=Invalid Amount");
													}else{
                                            	//echo "$".$_POST['amount'];
												if(!isset($_SESSION['amnt'.$i])){
												$_SESSION['amnt'.$i]= array('amnt'.$i => $_POST['amount'] );
												
												}
												echo  "$".$_SESSION['amnt'.$i]['amnt'.$i];
												
												
													}
											?></td>
            <td><?php
												if($_POST['quantity'] > 1){
											//echo $_POST['quantity'];
											
											if(!isset($_SESSION['quant'.$i])){
											$_SESSION['quant'.$i]= array('prj'.$i => $_POST['quantity'] );
											}
											
											echo $_SESSION['quant'.$i]['proj'.$i];
											
												}else if($_POST['quantity'] == 1 || 
												$_POST['quantity'] == ""){
													
													//echo $qty = 1;
													$_SESSION['quant'.$i]['proj'.$i] = 1;
													echo $_SESSION['quant'.$i]['proj'.$i];
													}
												?></td>
            <td><?php
													if($_POST['quantity'] == 1 || $_POST['quantity'] == ""){
                                            		$total = $_SESSION['amnt'.$i]['amnt'.$i] * $_SESSION['quant'.$i]['prj'.$i];
													//echo "$".$total;
													
															if(!isset($_SESSION['total'.$i])){
															$_SESSION['total'.$i]= array('total'.$i => $total );
															}
															echo "$".$_SESSION['total'.$i]['total'.$i];
															//echo 	$i = $_SESSION['count'][0];
														
														
													}else {
														
														$total = $_SESSION['amnt'.$i]['amnt'.$i] * $_SESSION['quant'.$i]['proj'.$i];
												
														
														if(!isset($_SESSION['total'.$i])){
														$_SESSION['total'.$i]= array('total'.$i => $total );
														}
														echo "$".$_SESSION['total'.$i]['total'.$i];
														
														
													//echo 	$i = $_SESSION['count'][0];
													
														}
							}
																												
														
							}//echo 	$i = $_SESSION['count'][0];
																								?></td>
          </tr>
          <tr>
            <td colspan="9"><input type="submit" name="remove" value="Remove" style="border-radius:8px;"/>
              &nbsp;&nbsp;Remove Selected Donation from List 
              <!--
                                        	<div style="background-color:#336; border-radius:10px; width:50px;">Remove</div>--></td>
          </tr>
        </table>
        <span style="float:right; color:#CCC;"> <?php echo "Total Amount =>  $".$total; ?></span> </div>
      <!--<div style="background-color:#0CF; width:100px; float:right"></div> -->
      <?php ?>
      <br />
      <form action="">
      </form>
      <div align="center"><span>Press 'Continue' button to review your donation and payment information<br />
        <input type="submit" name="continue" value="Continue" id="some" onclick="a()"/>
        </span></div>
    </div>
    <!--
					<div>
<tr>
    
 </tr>
						<h3><span></span></h3>
						<p>
					<ul>
							<li id="link1">
								<a href="services.html"><span>Design</span></a>
							</li>
							<li id="link2">
								<a href="services.html"><span>Seo</span></a>
							</li>
							<li id="link3">
								<a href="services.html"><span>Copywriting</span></a>
							</li>
						</ul>
					</div>-->
    <div class="section"> </div>
  </div>
</div>
</div>
</div>
</body>
</html>