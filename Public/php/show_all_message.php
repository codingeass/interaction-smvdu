<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Laxmikant Revdikar  <laxmikant.4644@gmail.com>
 */
require("sessionv.php");
require_once("connect.php");
	$to=$_SESSION['id'];
	$query="SELECT `from`, `content`, `time` ,`read` FROM `message` WHERE `to`=".$to." order by `time` desc";
	echo "<table><tr><th>From</th> <th>Message</th> <th>Time</th></tr>";
	$result=mysql_query($query);
	while ($msg=mysql_fetch_assoc($result)) {
		$query2="SELECT `name` FROM user WHERE `id`=".$msg['from'];
		$result2=mysql_query($query2);
		if($msg["read"]==0)
		echo "<tr id='message_new'><td>".mysql_fetch_assoc($result2)['name']."</td> <td>".$msg['content']."</td> <td>".$msg['time']."</td></tr>";
		else
		echo "<tr><td>".mysql_fetch_assoc($result2)['name']."</td> <td>".$msg['content']."</td> <td>".$msg['time']."</td></tr>";			
	}
	echo "</table>";
	$query2="UPDATE `message` SET `read`=1 WHERE `to`=".$to." AND `read`=0";
	mysql_query($query2);
?>