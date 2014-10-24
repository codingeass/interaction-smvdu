function d_profile(){
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "block";
	document.getElementById("others_profile").style.display = "none";
}

function d_search(){
	document.getElementById("search").style.display = "block";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
}

function othersearch(em){
	var xmlhttp=false;
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			var text=document.getElementById("others_profile");
			if(xmlhttp)
			{
				
				xmlhttp.open("GET",'public/php/otherprofile.php?v='+em);
				xmlhttp.send();
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
						text.innerHTML=xmlhttp.responseText;
					document.getElementById("search").style.display = "none";
					document.getElementById("profile").style.display = "none";
					document.getElementById("others_profile").style.display = "block";				
				}				
			}
}