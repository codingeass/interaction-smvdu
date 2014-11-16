function first_fun()
{
	if(document.getElementsByName("full_name")[0].value!=""&&document.getElementsByName("email")[1].value!=""&&document.getElementsByName("password")[0].value!=""&&document.getElementsByName("confir_pass")[0].value!=""&&(document.getElementsByName("user_type")[0].checked||document.getElementsByName("user_type")[1].checked)&&(document.getElementsByName("sex")[0].checked||document.getElementsByName("sex")[1].checked))
	{
		var pass = document.getElementsByName("password")[0].value;
		var repass = document.getElementsByName("confir_pass")[0].value;
		if(pass.length<6)
		{
			alert("Password length less than 6");
			return;
		}
		if(pass!=repass)
		{
			alert("Password don't match");
			return 0;
		}
	}
	else
	{
		alert("Some Fields are Empty");
		return ;
	}
		
	if(document.getElementsByName("user_type")[0].checked)
	{
		document.getElementById("next_entry_stu").style.display = "block";
		document.getElementById("first_all").style.display = "none";
		document.getElementById("second_all").style.display="none";
	}
	if(document.getElementsByName("user_type")[1].checked)
	{
		document.getElementById("next_entry_fac").style.display = "block";
		document.getElementById("first_all").style.display = "none";
		document.getElementById("second_all").style.display="none";
	}
}

function stu_submit()
{
	//alert(document.getElementsByName("join_date")[0].value);2014-10-01
	if(document.getElementsByName("entry_no")[0].value!=""&&document.getElementsByName("branch")[0].value!=""&&document.getElementsByName("semester")[0].value!=""&&document.getElementsByName("birth_date")[0].value!=""&&document.getElementsByName("join_date")[0].value!="")
	{
		 var name = encodeURIComponent(document.getElementsByName("full_name")[0].value);
		 var email = encodeURIComponent(document.getElementsByName("email")[1].value);
		 var pass =encodeURIComponent(document.getElementsByName("password")[0].value);
		 if(document.getElementsByName("user_type")[0].checked)
		{	
			var type="student";
		}
		if(document.getElementsByName("user_type")[1].checked)
		{
			var type="faculty";
		}	
		//image is set to no in php file
		if(document.getElementsByName("sex")[1].checked)
		var sex ="female";
	    else
	    if (document.getElementsByName("sex")[0].checked)
	    var sex="male";

        var ent = encodeURIComponent(document.getElementsByName("entry_no")[0].value);
        var bran=encodeURIComponent(document.getElementsByName("branch")[0].value);
        var sem=encodeURIComponent(document.getElementsByName("semester")[0].value);
        var bir=encodeURIComponent(document.getElementsByName("birth_date")[0].value);
        var join=encodeURIComponent(document.getElementsByName("join_date")[0].value);
        if(document.getElementsByName("address")[0].value!='')
        	var add=encodeURIComponent(document.getElementsByName("address")[0].value);
        else
        	var add= "-1";
        if(document.getElementsByName("contact_no")[0].value!='')
        	var cont=encodeURIComponent(document.getElementsByName("contact_no")[0].value);
        else
        	var cont= "-1";
        if(document.getElementsByName("projects")[0].value!='')
        	var pro=encodeURIComponent(document.getElementsByName("projects")[0].value);
        else
        	var pro= "-1";
        if(document.getElementsByName("area_interest")[0].value!='')
        	var are=encodeURIComponent(document.getElementsByName("area_interest")[0].value);
        else
        	var are= "-1";
        
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
			
			xmlhttp.open("GET",'public/php/stureg.php?name='+name+'&email='+email+'&pass='+pass+'&type='+type+'&sex='+sex+'&ent='+ent+'&bran='+bran+'&sem='+sem+'&bir='+bir+'&join='+join+'&add='+add+'&cont='+cont+'&pro='+pro+'&are='+are);
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
					alert(""+xmlhttp.responseText);		
			}
			xmlhttp.send();
			//obj.innerHTML="<a href='../public/php/student_autosearch.php?name=aman'>lko</a>";			
//response is not coming correct			
		}				
	}
	else
	{
		alert("Some Fields are Empty");
		return ;
	}
}

function fac_submit()
{
	//alert(document.getElementsByName("join_date")[0].value);2014-10-01
	if(document.getElementsByName("department")[0].value!=""&&document.getElementsByName("designation")[0].value!=""&&document.getElementsByName("qualification")[0].value!=""&&document.getElementsByName("birth_date")[1].value!=""&&document.getElementsByName("join_date")[1].value!="")
	{
			 var name = encodeURIComponent(document.getElementsByName("full_name")[0].value);
		 var email = encodeURIComponent(document.getElementsByName("email")[1].value);
		 var pass =encodeURIComponent(document.getElementsByName("password")[0].value);
		 if(document.getElementsByName("user_type")[0].checked)
		{	
			var type="student";
		}
		if(document.getElementsByName("user_type")[1].checked)
		{
			var type="faculty";
		}	
		//image is set to no in php file
		if(document.getElementsByName("sex")[1].checked)
		var sex ="female";
	    else
	    if (document.getElementsByName("sex")[0].checked)
	    var sex="male";

        var dep = encodeURIComponent(document.getElementsByName("department")[0].value);
        var desi=encodeURIComponent(document.getElementsByName("designation")[0].value);
        var qua=encodeURIComponent(document.getElementsByName("qualification")[0].value);
        var bir=encodeURIComponent(document.getElementsByName("birth_date")[1].value);
        var join=encodeURIComponent(document.getElementsByName("join_date")[1].value);
        if(document.getElementsByName("address")[1].value!='')
        	var add=encodeURIComponent(document.getElementsByName("address")[1].value);
        else
        	var add= "-1";
        if(document.getElementsByName("contact_no")[1].value!='')
        	var cont=encodeURIComponent(document.getElementsByName("contact_no")[1].value);
        else
        	var cont= "-1";
        if(document.getElementsByName("projects")[1].value!='')
        	var pro=encodeURIComponent(document.getElementsByName("projects")[1].value);
        else
        	var pro= "-1";
        if(document.getElementsByName("area_interest")[1].value!='')
        	var are=encodeURIComponent(document.getElementsByName("area_interest")[1].value);
        else
        	var are= "-1";
        if(document.getElementsByName("area_specialization")[0].value!='')
        	var spec=encodeURIComponent(document.getElementsByName("area_specialization")[0].value);
        else
        	var spec= "-1";
        
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
			xmlhttp.open("GET",'public/php/facreg.php?name='+name+'&email='+email+'&pass='+pass+'&type='+type+'&sex='+sex+'&dep='+dep+'&desi='+desi+'&qua='+qua+'&bir='+bir+'&join='+join+'&add='+add+'&cont='+cont+'&pro='+pro+'&are='+are+'&spec='+spec);
			xmlhttp.send();
			//obj.innerHTML="<a href='../public/php/student_autosearch.php?name=aman'>lko</a>";			
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
					alert(xmlhttp.responseText);		
			}
		}	
	}
	else
	{
		alert("Some Fields are Empty");
		return ;
	}
}