function message_send (id,name) {
	document.getElementsByName("to_email")[0].value=name;
	document.getElementsByName("email_h")[0].value=id;	
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="block";	
	document.getElementById("message_inbox").style.display="none";
}

function message_com(){
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
				
				xmlhttp.open("GET",'public/php/send_message.php?id='+document.getElementsByName("email_h")[0].value+'&message='+document.getElementsByName("content_message")[0].value);
				xmlhttp.send();
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						if(xmlhttp.responseText=="Correct")
						{
							alert("Message Send");							//window.location.assign('admin.php');
						}
						else
							alert("Error occured");
					}				
				}				
			}
}

function message_inbox(){
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
				
				xmlhttp.open("GET",'public/php/show_all_message.php');
				xmlhttp.send();
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("message_inbox").innerHTML="<center>Inbox</center>"+xmlhttp.responseText;						
					}				
				}				
			}	
}