<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Laxmikant Revdikar  <laxmikant.4644@gmail.com>
 */
require("sessionv.php");
require_once("connect.php");
	$from=$_SESSION['id'];
	$query="SELECT `to`, `content`, `time` FROM `message` WHERE `from`=".$from." order by `time` desc";
	echo "<table><tr><th>To</th> <th>Message</th> <th>Time</th></tr>";
	$result=mysql_query($query);
	while ($msg=mysql_fetch_assoc($result)) {
		$query2="SELECT `name` , `email` FROM user WHERE `id`=".$msg['to'];
		$result2=mysql_query($query2);
		$temp=mysql_fetch_assoc($result2);
		echo "<tr><td onclick=\"othersearch('".$temp['email']."')\" style='cursor:pointer;'>".$temp['name']."</td> <td>".$msg['content']."</td> <td>".$msg['time']."</td></tr>";		
	}
	echo "</table>";
?>