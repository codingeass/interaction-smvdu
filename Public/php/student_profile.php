<html>
<head>
<link rel="stylesheet" href="../css/main1.css" />
</head>

<body>


<center>

<h2>
	Student Details
</h2>

<div id="back_page"><a href="javascript: history.go(-1)">Go Back</a>
</div>

</center>

<table id="stu_tab">
<?php
require_once("connect.php");
	if(isset($_REQUEST['name'])){
		$name=strip_tags($_REQUEST['name']);
		$query=mysql_query("SELECT * FROM student WHERE `name`='".$name."'");
		if($query){
			while($result=mysql_fetch_assoc($query)){
				echo "<tr><td>Name:</td><td>".$result['name']."</td></tr>";
				echo "<tr><td>Age:</td><td>".$result['age']."</td></tr>";
				echo "<tr><td>DOB:</td><td>".$result['dob']."</td></tr>";
				echo "<tr><td>Entry No.:</td><td>".$result['entry_no']."</td></tr>";
				echo "<tr><td>Branch:</td><td>".$result['branch']."</td></tr>";
				echo "<tr><td>Semester:</td><td>".$result['semester']."</td></tr>";
				echo "<tr><td>Projects:</td><td>".$result['projects']."</td></tr>";
				echo "<tr><td>Contact No.:</td><td>".$result['contact_no']."</td></tr>";
			}
		}
	}
/**
 * MYSQL Cerendentials Include Page
 *
 * @author Amandeep Gupta  <amandeeptheviper@gmail.com>
 */
?>

</table>

</body>
</html>