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

function editcontent(){
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="block";
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("message_wr").style.display="none";	
	document.getElementById("message_inbox").style.display="none";
	document.getElementById("feedback").style.display="none";
	//alert();
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }

		xmlhttp.open("GET","public\\xml\\blog\\"+decodeURIComponent(getCookie("em"))+".xml",false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML; 

		var mg=document.getElementById("select_post");

		x=xmlDoc.getElementsByTagName("BlogSection");
		var mk=mg.innerHTML;		
		for (i=0;i<x.length;i++)
		{
			mk=mk+"<h3><a href=javascript:display_edit('"+i+"')>"+x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue+"</a></h3>";
		}
		mg.innerHTML=mk;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
    }
    return "";
}

var k=0;

function display_edit(i){
	document.getElementById("edit_content").style.display="block";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";	
	document.getElementById("message_inbox").style.display="none";
	document.getElementById("feedback").style.display="none";
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  k=i;
		xmlhttp.open("GET","public\\xml\\blog\\"+decodeURIComponent(getCookie("em"))+".xml",false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML; 
		var x=xmlDoc.getElementsByTagName("BlogSection");
		document.getElementsByName('title')[1].value=x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue;
		document.getElementsByName('content')[1].value=x[i].getElementsByTagName("content")[0].childNodes[0].nodeValue;
		var mg=document.getElementById("edit_comment");
		var s=x[i].getElementsByTagName("comment");
		var mk="<h3>Comment</h3>";
		for(j=0;j<s.length;j++)
		{ 
		  	mk=mk+"<li style='list-style:none;'>"+x[i].getElementsByTagName("comment")[j].childNodes[0].nodeValue+"&nbsp;&nbsp;&nbsp;x</li>"
		}
		mg.innerHTML=mk;
}

function adduback(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="block";
	document.getElementById("feedback").style.display="none";	
}

function upcontent(){
		var title= document.getElementsByName('title')[1].value;
	var content=document.getElementsByName("content")[1].value;	
			var xmlhttp=false;
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			if(xmlhttp)
			{				
				xmlhttp.open("GET",'public/php/upcontent.php?title='+title+'&content='+content+'&i='+k);
				xmlhttp.send();
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						if(xmlhttp.responseText=="Correct")
						{
							alert("Updated Successfully");							//window.location.assign('admin.php');
						}
						else
							alert("Error occured");
					}				
				}				
			}

}