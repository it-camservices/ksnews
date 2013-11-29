<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<style>
#displaybox {
	z-index: 999999999;
	filter: alpha(opacity=95); /*older IE*/
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=95); /* IE */
	-moz-opacity: .95; /*older Mozilla*/
	-khtml-opacity: .95;   /*older Safari*/
	opacity: .95;   /*supported by current Mozilla, Safari, and Opera*/
	background-color:#428BCA;
	position:fixed; top:0px; left:0px; width:100%; height:100%; color:#FFFFFF; text-align:center; vertical-align:middle;
}
</style>
<script>
function clicker(){
	var thediv=document.getElementById('displaybox');
	if(thediv.style.display == "none"){
		thediv.style.display = "";
		thediv.innerHTML = "<table width='100%' height='100%'><tr><td align='center' valign='middle' width='100%' height='100%'><br><br><div class='container'><div class='progress progress-striped active'><div id='d2'class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='45' style='width: 45%' ></div></div></div><p onclick='return clicker();'>Close</p></td></tr></table>";
		setTimeout("clicker()",5000);
	}else{
		thediv.style.display = "none";
		thediv.innerHTML = '';
	}
	return false;
}
</script>
