function listpost(){
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.open("GET","public\\xml\\blog\\blog.xml?"+Math.random(),false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML; 
		var mg=document.getElementById("blogposts");

		x=xmlDoc.getElementsByTagName("BlogSection");
		var mk="";
		var cont="";
		var mlink="";
		for (i=x.length-1;i>-1;i--)
		{
			mlink="<a href='blog.html?t="+x[i].getElementsByTagName("time")[0].childNodes[0].nodeValue+"&em="+x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue+"' target='_blank'>";
			mk=mk+"<section style='border:1px solid #d0ced4;border-radius:3px;padding:15px;margin:50px;margin-bottom:0px;background-color:#f1eef7;'><h2>"+mlink+x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue+"</a></h2><hr>";
			mk=mk+"<div style='right:23px;font-size:17px;'>Author:"+x[i].getElementsByTagName("author")[0].childNodes[0].nodeValue+"</div>";
			{
				 if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp1=new XMLHttpRequest();
				  }
				 else
				  {// code for IE6, IE5
				  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				 xmlhttp1.open("GET","public\\xml\\blog\\"+x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue+".xml?",false);
				 xmlhttp1.send();
				 xmlDoc1=xmlhttp1.responseXML; 
				 x1=xmlDoc1.getElementsByTagName("BlogSection");
				 cont="";
				 for (i1=x1.length-1;i1>-1;i1--)
				 {
				 	if(x1[i1].getElementsByTagName("time")[0].childNodes[0].nodeValue==x[i].getElementsByTagName("time")[0].childNodes[0].nodeValue)
				 	{
				 		cont=x1[i1].getElementsByTagName("content")[0].childNodes[0].nodeValue.substring(0,300);
				 		break;
				 	}
				 }
			}
			mk=mk+"<div style='right:23px;font-size:18px;'>"+cont+"<b>&nbsp;&nbsp;&nbsp;"+mlink+"Continue...</a></b></div></section>";
		}
		mg.innerHTML="<center style='font-size:26px;margin-top:10px;'><b>BlogPosts</b></center>"+mk;
		// for (i=0;i<x.length;i++)
		// {
		// 	mk=mk+"<section style='border:1px solid black;border-radius:3px;padding:15px;margin:50px;'><h2><a href='blog.html?uv="+i+"'>"+x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue+"</a></h2>";
		// 	mk=mk+"<div style='font-size:19px'>"+x[i].getElementsByTagName("content")[0].childNodes[0].nodeValue.substring(0,300)+"</div>";
		// 	mk=mk+"<div style='right:23px;font-size:20px;'>Author:"+x[i].getElementsByTagName("author")[0].childNodes[0].nodeValue+"</div></section>"
		// }
		// mg.innerHTML=mk;
}