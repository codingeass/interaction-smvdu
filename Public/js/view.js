function d_profile(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "block";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";		
	document.getElementById("message_inbox").style.display="none";	
	document.getElementById("feedback").style.display="none";
}

function d_search(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "block";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";		
	document.getElementById("message_inbox").style.display="none";
	document.getElementById("feedback").style.display="none";
}

function editacontent(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="block";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";		
	document.getElementById("message_inbox").style.display="none";
	document.getElementById("feedback").style.display="none";
}

function d_post(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="block";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";		
	document.getElementById("message_inbox").style.display="none";
	document.getElementById("feedback").style.display="none";
	listpost();
}

function d_edit(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="block";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";		
	document.getElementById("message_inbox").style.display="none";
	document.getElementById("feedback").style.display="none";
}

function d_inbox(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";	
	document.getElementById("message_inbox").style.display="block";
	document.getElementById("feedback").style.display="none";	
	message_inbox();
}

function d_complaint(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";	
	document.getElementById("message_inbox").style.display="none";	
	//document.getElementById("complaint").style.display="block";
	document.getElementById("feedback").style.display="none";				
}

function d_feedback(){
	document.getElementById("edit_content").style.display="none";	
	document.getElementById("search").style.display = "none";
	document.getElementById("profile").style.display = "none";
	document.getElementById("others_profile").style.display = "none";
	document.getElementById("blogposts").style.display="none";
	document.getElementById("editfirst").style.display="none";
	document.getElementById("add_content").style.display="none";
	document.getElementById("select_post").style.display="none";	
	document.getElementById("message_wr").style.display="none";	
	document.getElementById("message_inbox").style.display="none";	
	//document.getElementById("complaint").style.display="none";	
	document.getElementById("feedback").style.display="block";				
}

function addback(){
	d_edit();
}

function addcontent(){
	var title= document.getElementsByName('title')[0].value;
	var content=document.getElementsByName("content")[0].value;	
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
				
				xmlhttp.open("GET",'public/php/addcontent.php?title='+title+'&content='+content);
				xmlhttp.send();
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						if(xmlhttp.responseText=="Correct")
						{
							alert("Added Successfully");							//window.location.assign('admin.php');
						}
						else
							alert("Error occured");
					}				
				}				
			}
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
					document.getElementById("message_inbox").style.display = "none";	
				}				
			}
}

function upload_image(){
	document.getElementById("profile_section").style.display = "block";
}

function close_imageupload(){
	document.getElementById("profile_section").style.display = "none";	
}