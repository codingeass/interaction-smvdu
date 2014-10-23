function search_pro(){
	var name = document.getElementsByName("search_value")[0].value;
	var xmlhttp=false;
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			var text=document.getElementById("search_text");
			if(xmlhttp)
			{
				
				xmlhttp.open("GET",'public/php/search.php?v='+name);
				xmlhttp.send();
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
						text.innerHTML=xmlhttp.responseText;
					document.getElementById("search").style.paddingTop = "100px";
					document.getElementById("search").style.height = "569px";				
				}				
			}
}