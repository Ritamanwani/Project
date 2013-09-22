
<?php

include("connection.php");

	$query = mysql_query("SELECT StateID,State FROM state;");
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Donation</title>

        
    </head>	

    <body>
        <center>
            
            
            <form method="post" action="p-process.php" id="form"  >
               <div style="width : 550px; border : 1px solid; padding-bottom:10px;background-color: #c89806;">
               <h3 style="width : 535px;">Personal Information</h3>
                <table>
                    <tr>
                        <td>First Name:</td>
                        <td><input name="fname" type="text" size="25" placeholder="e.g Abdul" required="required" /></td>
                        <td><span id="fname-error" style="color:red;"></span></td>
                    </tr>
                    <tr>
                        <td>Middle Name:</td>
                        <td><input name="mname" type="text" size="25" placeholder="e.g Rehman" REQUIRED/></td>
                        <td><span id="mname-error" style="color:red;"></span></td>
                    </tr>

                    <tr>
                        <td>Last Name:</td>
                        <td><input name="lname" type="text" size="25" placeholder="e.g Memon" REQUIRED/></td>
                        <td><span id="lname-error" style="color:red;"></span></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input name="mail" type="EMAIL" size="25" placeholder="Email" REQUIRED/></td>
                        <td><span id="mail-error" style="color:red;"></span></td>
                    </tr>
                    <tr>
                        <td>Street Address:</td>
                        <td><input name="address" type="text" size="25" placeholder="Street Address" REQUIRED /></td>
                        <td><span id="address-error" style="color:red;"></span></td>
                    </tr>
                    
                    <tr>
                        <td>City:</td>
                        <td><input name="city" type="text" size="25" placeholder="City" REQUIRED /></td>
                        <td><span id="city-error" style="color:red;"></span></td>
                    </tr>

                    <tr>
                        <td> State(USA)</td>
                        <td> <select name = "state" id="state" />
                            <option value = "Select" > Select State </option></td>
                				 <?php
							while($row = mysql_fetch_array($query))
							{?>
						<option value="<?php echo $row['StateID']?> "><?php echo $row['State'] ?></option>
						<?php }?>

                        
						
                        <td><span id="state-error" style="color:red;"></span></td>
                        </select>
                    </tr>
                    
                    <tr>
                        <td>State/Province(Non USA):</td>
                        <td><input name="province" type="text" size="25" placeholder="Province" required="required"  /></td>
                        <td><span id="state-error" style="color:red;"></span></td>
                    </tr>

                    <tr>
                        <td>Zip / Postal Code:</td>
                        <td><input name="zip" type="text" size="25" placeholder="Postal Code" required="required" /></td>
                        <td><span id="zip-error" style="color:red;"></span>
                    </tr>
                    
                    <tr>
                        <td>Country:</td>
                        <td><input id="country" name="country" type="text" size="25" placeholder="Country" required="required" /></td>
                        <td><span id="email-error" style="color:red;"></span>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input id="phone" name="phone" type="text" size="25" placeholder="Phone" required="required" /></td>
                        <td><span id="email-error" style="color:red;"></span>
                    </tr>

                   <tr>
                        <td> Receipt</td>
                        <td> <select name = "receipt" id="receipt" />
                            <option value = "Select" > Select Receipt </option></td>
                

                        <td><span id="receipt-error" style="color:red;"></span></td>
                   		 </tr>
                
                        
                </table>
                </div>
                
                
                <!--<br><br>
                 <div style="width : 550px; border : 1px solid; padding-bottom:10px;background-color: #c89806;">
               	 <h3 style="width : 535px;">Create a Profile for me</h3><input name="yes"  type="radio" />
                <table>
                    <tr>
                        <td>Password:</td>
                        <td><input name="pass"  type="text" size="25"  /></td>
                        <td><span id="pass-error" style="color:red;"></span></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input name="cpass"  type="text" size="25"  /></td>
                        <td><span id="cpass-error" style="color:red;"></span></td>
                    </tr>

                 </div>
                
                
                
                 
                 <br><br>
                 <div style="width : 550px; border : 1px solid; padding-bottom:10px;background-color: #c89806;">
               	 <h3 style="width : 535px;">Payment method</h3><input name="yes"  type="radio" />
                <table>
                    <tr>
                        <td>Bank Name:</td>
                        <td><input name="bname"  type="text" size="25"  /></td>
                        <td><span id="bank-error" style="color:red;"></span></td>
                    </tr>
                    <tr>
                        <td>Routing Number:</td>
                        <td><input name="rnumber"  type="text" size="25"  /></td>
                        <td><span id="rn-error" style="color:red;"></span></td>
                    </tr>
                     <tr>
                        <td>Account Number:</td>
                        <td><input name="anumber"  type="text" size="25"  /></td>
                        <td><span id="account-error" style="color:red;"></span></td>
                    </tr>

                 </div>
                --><tr>
                        
                        <td><input name="contiune"  type="submit" value="Continue"/></td>
                       
                    </tr>

            </form>
        </center>
    </body>

</html>
