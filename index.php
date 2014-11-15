<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="public/css/front.css"/>
    <title>SMVDU INTERACTION</title>
	</head>
	<body> 
	<section id="first_all">
		<section id="first_login">
			<form action="public\php\verify.php" method="post"> 
			<div>Login : Email : &nbsp;<input type="email" placeholder="Email id" name="email"></div>
			<div>Password : &nbsp;&nbsp;<input type="password" placeholder="password" name="pass"></div>
			<div><input type="submit" value="submit"></div>
			</form>
		</section>
	<?php
		if(isset($_REQUEST["v"]))
		{
			if($_REQUEST["v"]=="false")
				echo "<section id='popup'><script>alert('Wrong Password');</script></section>";
		  if($_REQUEST['v']=="er")
        echo "<section id='popup'><script>alert('Check Username and password');</script></section>";
    }
	?>
	<section id="text_display">
		Login here : <br> To connect with of your classmate
	</section>

	<section id="registration_section">
		<div id="first_form">
  <form id="first_page">
    Register
    <hr>
    <table>
     <tr><td>Name:</td><td><input type="text" placeholder="Full Name" name="full_name"></td></tr> 
     <tr><td>Email:</td><td><input type="text" placeholder="@smvdu.ac.in" name="email"></td> </tr>
     <tr><td>Password:</td><td><input type="password" placeholder="password" name="password"></td></tr>
     <tr><td>Re-Password:</td><td><input type="password" placeholder="Confirm Password" name="confir_pass"></td></tr>
     <tr><td>Select :</td><td><input type="radio" name="user_type" value="student">Student<input type="radio" name="user_type" value="faculty">Faculty</td></tr>
     <tr><td>Sex :</td><td><input type="radio" name="sex" value="m">Male&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="f">Female</td></tr>
     <tr><td><center><input type="reset" value="Reset" ></center></td><td><center><input type="button" value="Next" onclick="first_fun()"></center></td></tr>
     <tr><td colspan="2" id="f_warning"></td></tr>
    </table>
  </form>
  <div id="note_email">Note: Use college provided Email-id to register</div>
  </div>
	</section>
	</section>



<section id="next_entry_stu" class="student">
  <div id="first_form">
  <form id="second_stu">
    <div style="text-align:center;">Student Entry</div>
    <hr>
  <table>
    <tr><td>Entry No. *:</td><td><input type="text" placeholder="like.,2012ecs10" name="entry_no"></td></tr> 
     <tr><td>Branch *:</td><td><select name="branch" selected="none">  
              <option value="default" disabled="disabled" selected>--Select one--</option>
              <option value="Computer Science and Engineering">Computer Science and Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
              <option value="Industrial Bio Technology">Industrial Bio Technology</option>
              <option value="Architecture">Architecture</option>
              <option value="Master of Business Administration">Master of Business Administration</option>
        </select>
    </td></tr>
    <tr><td>Semester *:</td><td><input type="number" name="semester" min="1" max="10">
    </td></tr>
    <tr><td>Date of Birth *:</td><td><input type="date" name="birth_date"></td></tr>
    <tr><td>Date of Joining *:</td><td><input type="date" name="join_date"></td></tr> 
    <tr><td>Address :</td><td><input type="text" placeholder="address" name="address"></td></tr>
    <tr><td>Contact Number :</td><td><input type="text" placeholder="i.e.9797521898" name="contact_no"></td></tr> 
    <tr><td>Projects :</td><td><input type="text" placeholder="like.library system,animation" name="projects"></td></tr> 
    <tr><td>Area of Interest:</td><td><input type="text" placeholder="like java,robotics" name="area_interest"></td></tr> 
    	<tr><td><input type="button" value="Cancel" onclick="window.location.assign('');"></td><td><input type="button" value="Submit" onclick="stu_submit()"></td></tr>
    <tr><td colspan="2" id="stu_warning"></td></tr> 
     </table>
     </form>
   </div>
</section>

<section id="next_entry_fac">
  <div id="first_form" >
     <form id="third_fac">
      <div style="text-align:center;">Faculty Entry</div>

      <hr>
    <table> 
     <div><tr><td>Department *:</td><td><select name="department"> 
              <option value="default" disabled="disabled" selected>--Select one--</option>
              <option value="Computer Science and Engineering">Computer Science and Engineering</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
              <option value="Industrial Bio Technology">Industrial Bio Technology</option>
              <option value="Architecture">Architecture</option>
              <option value="Master of Business Administration">Master of Business Administration</option>
        </select>
    </td></tr></div>
    <div><tr><td>Designation *:</td><td><input type="text" placeholder="like.,professor" name="designation"></td></tr></div> 
    <div><tr><td>Qualification *:</td><td><input type="text" placeholder="like.B.tech,MBA" name="qualification"></td></tr></div>
    <div><tr><td>Date of Birth *:</td><td><input type="date" name="birth_date"></td></tr></div>
    <div><tr><td>Date of Joining *:</td><td><input type="date" name="join_date"></td></tr></div> 
    <div><tr><td>Address :</td><td><input type="text" placeholder="address" name="address"></td></tr></div> 
    <div><tr><td>Contact Number :</td><td><input type="text" placeholder="i.e.9797521898" name="contact_no"></td></tr></div> 
    <div><tr><td>Projects :</td><td><input type="text" placeholder="like.library system,animation" name="projects"></td></tr></div> 
    <div><tr><td>Area of Interest:</td><td><input type="text" placeholder="like java,robotics" name="area_interest"></td></tr></div> 
    <div><tr><td>Area of Specialization *:</td><td><input type="text" placeholder="eg.django,python" name="area_specialization"></td></tr></div> 
    <div><tr><td><input type="button" value="Cancel" onclick="window.location.assign('');"></td><td><input type="button" value="Submit" onclick="fac_submit()"></td></tr></div> 
    <tr><td colspan="2" id="fac_warning"></td></tr>
    </table>
    </form>
  </div>
</section>

<script type="text/javascript" src="public/js/reg.js"></script>
	</body>
</html> 
