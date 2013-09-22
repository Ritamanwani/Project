


function getproject(id){

			xhr = new XMLHttpRequest();
			xhr.open("get","donprocess.php?pid="+id);
			xhr.send();
			xhr.onreadystatechange =function(){
				if(xhr.readyState == 4 && xhr.status ==200 ){
					document.getElementById("program").innerHTML = xhr.responseText;	
				}				
			}	
		}
		
function subproject(id){			
			 xhr = new XMLHttpRequest();
			 xhr.open("get","subprocess.php?ProjID="+id);
			 xhr.send();
			 xhr.onreadystatechange =function(){
				if(xhr.readyState == 4 && xhr.status ==200 ){
					document.getElementById("subpro").innerHTML = xhr.responseText;
					document.getElementById("subpro").style.display='block';	
				}
				
			}	
		}
	
		function fixamount(id){
				//alert('fix amount');		
			 xhr = new XMLHttpRequest();
			 xhr.open("get","fix.php?fix="+id);
			 xhr.send();
			 xhr.onreadystatechange =function(){
				if(xhr.readyState == 4 && xhr.status ==200 ){
					document.getElementById("getfix").innerHTML = xhr.responseText;
					document.getElementById("getfix").style.display='block';	
				}
				
			}	
		}


function adddonation(){
		
			amount=document.getElementById("amount").value;
			xhr = new XMLHttpRequest();
			xhr.open("get","process.php?amount="+amount);
			xhr.send(null);
			xhr.onreadystatechange =function(){
				if(xhr.readyState == 4 && xhr.status ==200 ){
					
					document.getElementById("add_donation").innerHTML= xhr.responseText;	
					document.getElementById("add_donation").style.display="block";
					}
				
				}
			}


 function FN()
{
	var fname = document.RegisterForm.fname;
 	var re = /^[a-zA-Z]{3,15}$/;
		
	if (fname.value == "")
    {
       	document.getElementById('fname-error').innerHTML = "First Name Required";
	   fname.focus();
        return false;
    }
	
	
	if (!fname.value.match(re) )
    {
       	document.getElementById('fname-error').innerHTML = "<font color='red'>First Name Contains Only Alphabets";
        fname.focus();
        return false;
    }
	
	else{
		document.getElementById('fname-error').innerHTML = "";
        
	
	}
}

 function LN()
{
	var lname = document.RegisterForm.lname;
 	var re = /^[a-zA-Z]{3,15}$/;
		
	if (lname.value == "")
    {
       	document.getElementById('lname-error').innerHTML = "Last Name Required";
	   lname.focus();
        return false;
    }
	
	
	if (!lname.value.match(re) )
    {
       	document.getElementById('lname-error').innerHTML = "<font color='red'>Last Name Contains Only Alphabets";
        lname.focus();
        return false;
    }
	
	else{
		document.getElementById('lname-error').innerHTML = "";
        
	
	}
}




 function Address()
{
	var address = document.RegisterForm.address;

		
	if (address.value == "")
    {
       	document.getElementById('address-error').innerHTML = "Street Address Required";
	   	address.focus();
        return false;
    }
	
	else{
		document.getElementById('address-error').innerHTML = "";
        
	
	}
}



 function Email()
{
	var Email = document.RegisterForm.mail;


 if (Email.value == "")
    {
        document.getElementById('mail-error').innerHTML = "E-mail address Can't b Blank.";
        Email.focus();
        return false;
    }
    if (Email.value.indexOf("@", 0) < 0)
    {
        document.getElementById('mail-error').innerHTML = "Please enter a valid e-mail address.";
        Email.focus();
        return false;
    }
    if (Email.value.indexOf(".", 0) < 0)
    {
        document.getElementById('mail-error').innerHTML = "Please enter a valid e-mail address.";
       	Email.focus();
        return false;
    }
	else{
		document.getElementById('mail-error').innerHTML = "";
        
	
	}

	
}



function dropdown(){
	
	
	var drop = document.RegisterForm.statee.value;

		
	if (drop=="-1")
    {
       	document.getElementById('state-error').innerHTML = "Please Select State";
	   	drop.focus();
        return false;
    }
	
	else{
		document.getElementById('state-error').innerHTML = "";
        
	
	}

	
	}
 
function Answer() { 
if(document.getElementById("yes").checked)
{
   var answer = document.getElementById("yes").value;
   document.getElementById("pass").style.visibility="visible";
   document.getElementById("cpass").style.visibility="visible";
   document.getElementById("passLabel").style.visibility="visible";
   document.getElementById("CpassLabel").style.visibility="visible";
}
else if(document.getElementById("no").checked)
{
	 answer = document.getElementById("no").value;
	 document.getElementById("pass").style.visibility="hidden";
   	 document.getElementById("cpass").style.visibility="hidden";
     document.getElementById("passLabel").style.visibility="hidden";
     document.getElementById("CpassLabel").style.visibility="hidden"; 
}
	 
} 




 
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}


	
		
function enableOther(selObj)
{
    
    textObj = document.getElementById('province'); 
	textObj2 = document.getElementById('country');
    
    if(selObj.options[selObj.selectedIndex].value=='Non')
    {
       
        textObj.disabled = false;
		textObj2.disabled = false;
    }
	else
	{
        textObj.disabled = true;
        textObj.value    = '';
		textObj2.disabled = true;
        textObj2.value    = '';
	}
    return;
}

function createlightbox()
    {
        document.getElementById('light').style.display='block';
        document.getElementById('fade').style.display='block'
    }
    function closelightbox()
    {
        document.getElementById('light').style.display='none';
        document.getElementById('fade').style.display='none'
    }





   