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
	}
	if(document.getElementsByName("user_type")[1].checked)
	{
		document.getElementById("next_entry_fac").style.display = "block";
		document.getElementById("first_all").style.display = "none";
	}
}

function stu_submit()
{
	//alert(document.getElementsByName("join_date")[0].value);2014-10-01
	if(document.getElementsByName("entry_no")[0].value!=""&&document.getElementsByName("branch")[0].value!=""&&document.getElementsByName("semester")[0].value!=""&&document.getElementsByName("birth_date")[0].value!=""&&document.getElementsByName("join_date")[0].value!="")
	{
		
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
		
	}
	else
	{
		alert("Some Fields are Empty");
		return ;
	}
}