function student_search()
{
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		if(XMLhttp)
		{
			obj=document.getElementById("search_result");

			xmlhttp.open("GET",'public/php/student_autosearch.php?entry='+mk);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
					obj.innerHTML=xmlhttp.responseText;		
			}
		}	
}			