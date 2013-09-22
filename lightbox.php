<style>
		#bg{
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
			background-color:#9FF;
			opacity:0.5;
			-moz-opacity:0.5;
			filter:alpha(opacity=50);
			z-index:101;
			display:none;
			}
		#fg{
			background-color: #CCF;
			position:relative;
			margin:0 auto;					
			width:300px;
			height:300px;
			margin_top:100px;
			border:pink solid;
			z-index:102;
			display:none;
			opacity:1;
			}

</style>
<input type="button" id="open_lightbox" value="open" onclick="lightbox(this)">
<div id="bg"></div>
<div id="fg"><br>
<input type="button" id="close_lightbox" value="close" onclick="lightbox(this)">
</div>


<script language="javascript" type="text/javascript">
function lightbox(ele){
	var backg=document.getElementById("bg");
	var foreg=document.getElementById("fg");
	
		if(ele.value=="open"){
				backg.style.display="block";
				foreg.style.display="block";
	   }
	   else if(ele.value=="close"){
			   backg.style.display="none";
			   foreg.style.display="none";
		   
		   }
	}
</script>