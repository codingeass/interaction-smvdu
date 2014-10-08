<html>
<head>
<link href="../css/main1.css" rel="stylesheet">
</head>

<body>


<center>

<h2>
	Faculty Details
</h2>

</center>

<div id="back_page"><a href="javascript: history.go(-1)">Go Back</a>
</div>


<table id="stu_tab">
<?php
require_once("connect.php");
	if(isset($_REQUEST['name'])){
		$name=strip_tags($_REQUEST['name']);
		$query=mysql_query("SELECT * FROM faculty WHERE `name`='".$name."'");
		if($query){
			while($result=mysql_fetch_assoc($query)){
				echo "<tr><td>Name:</td><td>".$result['name']."</td></tr>";
				echo "<tr><td>Age:</td><td>".$result['age']."</td></tr>";
				echo "<tr><td>DOB:</td><td>".$result['dob']."</td></tr>";
				echo "<tr><td>Unique No.:</td><td>".$result['unique_no']."</td></tr>";
				echo "<tr><td>Department:</td><td>".$result['department']."</td></tr>";
				echo "<tr><td>Date of Joining:</td><td>".$result['doj']."</td></tr>";
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