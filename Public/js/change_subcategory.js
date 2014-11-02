function update(){
	category=document.forms[0].category.value;
	switch(category){
		case '1':
				document.getElementById('sub').innerHTML="<option value=1>Finance</option><option value=2>A & E Section</option><option value=3>XYZ</option><option value=4>ABC</option>";	
		       break;
		case '2':
		       	document.getElementById('sub').innerHTML="<option value=1>Computer Science and Engineering</option><option value=2>Electroics And Communication Engineering</option><option value=3>Mechanical Engineering</option><option value=4>Bio Technology</option>";
			   break;
		case '3':
				document.getElementById('sub').innerHTML="<option value=1>Room Maintainence</option><option value=2>Mess</option><option value=3>Bathroom</option>";					
			   break;
		case '4':
				document.getElementById('sub').innerHTML="<option value=1>Forgot Password</option><option value=2>Internet Speed Problem</option><option value=3>Malicious Activity</option>";
			   break;
	}
}