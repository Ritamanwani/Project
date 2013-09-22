<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<img src="images/bismillah.png" alt="" width="400" height="100" style="z-index:1001" align="right">
<title>Hidaya Foundation</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="js/js_js.js"></script>
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
        <center>
        <h3><span>Personal Information</span></h3>
        <?php

include("connection.php");

	$query = mysql_query("SELECT * FROM state;");
	$q = mysql_query("SELECT * FROM receipt;");
	$s = mysql_query("SELECT * FROM cardtype");


	

?>
        <!--onsubmit="return ValidateForm();
-->
        <form method="post" action="p-process.php" name="RegisterForm" >
          <div style="width : 440px; padding-bottom:10px;background-color: #ffffff;" id="form">
            <table width="300px">
              <tr>
                <td>First Name*</td>
                <td ><input name="fname" type="text" size="25" placeholder="Sana" id="name" onblur="return FN();"/></td>
                  <strong>
                <div id="fname-error" ></div>
                  <strong>
              </tr>
              <tr>
                <td>Middle Name:</td>
                <td><input name="mname" type="text" size="25" placeholder="Naz"/></td>
              </tr>
              <tr>
                <td>Last Name*:</td>
                <td><input name="lname" type="text" size="25" placeholder="Mallah"  onblur="return LN();"/></td>
                <strong id="lname-error" style="color:red;"></strong> </tr>
              <tr>
                <td>Email:</td>
                <td><input name="mail" type="text" size="25" placeholder="Email" onblur="return Email();"/></td>
                <span id="mail-error" style="color:red;"></span>
                  </td>
              </tr>
              <tr>
                <td>Street Address:</td>
                <td><input name="address" type="text" size="25" placeholder="Street Address" onblur="return Address();" /></td>
                <span id="address-error" style="color:red;"></span> </tr>
              <tr>
                <td>City:</td>
                <td><input name="city" type="text" size="25" placeholder="City" /></td>
                <td><span id="city-error" style="color:red;"></span></td>
              </tr>
              <tr>
                <td> State(USA)</td>
                <td><select name="statee" id="drops" onchange="enableOther(this);dropdown()";/>
                  
                  <option value="USA">Select State</option>
                  <option value="Non">Non USA</option>
                  <?php
							while($row = mysql_fetch_array($query))
							{?>
                  <option value="<?php echo $row['StateID']?> "><?php echo $row['State'] ?></option>
                  <?php }?></td>
                  </select>
                <span id="state-error" style="color:red;"></span> </tr>
              <tr>
                <td>State/Province(Non USA):</td>
                <td><input name="province" type="text" size="25" placeholder="Province" disabled id="province"/></td>
                <td><span id="province-error" style="color:red;"></span></td>
              </tr>
              <tr>
                <td>Zip / Postal Code:</td>
                <td><input name="zip" type="text" size="25" placeholder="Postal Code"/></td>
                <br>
                <strong id="zip-error" style="color:red;"></strong> </tr>
              <tr>
                <td>Country:</td>
                <td><input id="country" name="country" type="text" size="25" placeholder="Country" disabled /></td>
                <span id="country-error" style="color:red;"></span> </tr>
              <tr>
                <td>Phone:</td>
                <td><input id="phone" name="phone" type="text" size="25" placeholder="Phone"/></td>
                <span id="phone-error" style="color:red;"></span> </tr>
              <tr>
                <td> Receipt</td>
                <td><select name = "receipt" id="receipt" />
                  
                  <option value = "Select" > Select Receipt </option>
                  <?php
							while($row = mysql_fetch_array($q))
							{?>
                  <option value="<?php echo $row['ReceiptID']?> "><?php echo $row['ReceiptType'] ?></option>
                  <?php }?></td>
                <td><span id="receipt-error" style="color:red;"></span></td>
              </tr>
            </table>
          </div>
          <h3><span>Create a Profile For me</span></h3>
          <div style="width : 430px; padding-bottom:10px;background-color: #fffff;">
            <input name="answer" value="yes" type="radio"  id="yes" onClick="Answer();" />
            Yes
            <input name="answer" id="no"  value="no" type="radio"  checked="checked" onClick="Answer();"/>
            No
            <table>
              <tr>
                <td  id="passLabel" style="visibility:hidden">Password:</td>
                <td ><input style="visibility:hidden" name="pass" type="text" size="25" id="pass" onblur="return checkForm(this);" /></td>
                  </td>
                  </td>
              </tr>
              <tr>
                <td id="CpassLabel" style="visibility:hidden">Confirm Password:</td>
                <td><input style="visibility:hidden" name="cpass"  id="cpass" type="text" size="25" onkeyup="return checkForm(this);" /></td>
                  </td>
              </tr>
            </table>
          </div>
          <h3><span>Payment Method</span></h3>
          <input name="chk" value="check" type="radio" id="check" 
            onclick="setVisibility('sub3', 'inline');setVisibility('sub4','none');";/>
          Check
          <input name="chk" id="credit"  value="credit" type="radio" 
            onclick="setVisibility('sub3', 'none');setVisibility('sub4','inline');";/>
          Credit Card
          <div style="width : 430px; background-color: #ffffff;" id="sub3" hidden="hidden">
            <table >
              <tr>
                <td id="bankLabel">Bank Name:</td>
                <td><input name="bname"  type="text" size="25" id="bname" /></td>
                  </td>
                <td></td>
              </tr>
              <tr>
                <td id="RoutLabel">Routing Number:</td>
                <td><input name="rnumber"  type="text" size="25" id="rnumber" /></td>
                  </td>
                <td></td>
              </tr>
              <tr>
                <td id="AcountLabel">Account Number:</td>
                <td><input name="anumb"  type="text" size="25" id="anumb" /></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div style="display:none; width : 430px; padding-bottom:10px;background-color: #ffffff;" id="sub4">
           
           
           
  <table width="350" border="1">
  <tr>
    <td id="CardTypeLabel" style="text-align:right;" >Card Type:
    <td><select name = "cardtype" style="text-align:left;" >
                    <option value = "Select"  > Select Card</option>
                    <?php
							
							while($row = mysql_fetch_array($s))
							{?>
                    <option value="<?php echo $row['CardTypeID']?> "><?php echo $row['CardType'] ?></option>
                    <?php }?>
                  </select></td></td></tr>
    <tr>
    <td id="CardNumLabel" style="text-align:right;" >Card Number:</td>
   	<td style="text-align:left;"><input name="cnumber"  type="text" size="25"  id="cnumber"/></td>

  </tr>
  <tr>
    <td id="CvLabel" >CVV Number:</td>
    <td><input name="cvnumber"  type="text" size="25"  id="cvnumber"  /></td>
  </tr>
  <tr>
    <td id="ExpLabel" style="text-align:right;" >Expiration Date:
                  <td><select name = "month" style="text-align:left;" />
                  
                  <option selected = "Selected" > Select Month</option>
                  <option value="1">Jan(1)</option>
                  <option value="2">Feb(2)</option>
                  <option value="3">Mar(3)</option>
                  <option value="4">Apr(4)</option>
                  <option value="5">May(5)</option>
                  <option value="6">Jun(6)</option>
                  <option value="7">Jul(7)</option>
                  <option value="8">Aug(8)</option>
                  <option value="9">Sep(9)</option>
                  <option value="10">Oct(10)</option>
                  <option value="11">Nov(11)</option>
                  <option value="12">Dec(12)</option>
                  </select></td>
    <td>&nbsp;</td>
  </tr>
</table>
              <tr>
                <td id="ExpLabel">Expiration Date:
                  <select name = "month" />
                  
                  <option selected = "Selected" > Select Month</option>
                  <option value="1">Jan(1)</option>
                  <option value="2">Feb(2)</option>
                  <option value="3">Mar(3)</option>
                  <option value="4">Apr(4)</option>
                  <option value="5">May(5)</option>
                  <option value="6">Jun(6)</option>
                  <option value="7">Jul(7)</option>
                  <option value="8">Aug(8)</option>
                  <option value="9">Sep(9)</option>
                  <option value="10">Oct(10)</option>
                  <option value="11">Nov(11)</option>
                  <option value="12">Dec(12)</option>
                  </select>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <select name="year" />
                  
                  <option value = "Select" > Select Year</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  </select></td>
              </tr>
            </table>
          </div>
          <!--<div id="save">-->
          <input type="checkbox" name="checked"/>
          Save information for future use 
          <!--</div><br>-->
          
          <div style="width : 430px; padding-bottom:10px;background-color: #ffffff;">
            </center>
            <center>
            <h3><span>Comments/FeedBack</span></h3>
            <textarea rows="10"  cols="50" style="margin:auto;"></textarea >
            <br>
            <br>
            <input type="submit" name="continue" value="Continue" />
          </div>
        </form>
        </center>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>