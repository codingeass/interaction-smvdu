<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Laxmikant Revdikar  <laxmikant.4644@gmail.com>
 */
require_once("sessionv.php");
if(isset($_REQUEST["message"])&&isset($_REQUEST["id"])){
		require_once("connect.php");
		$from=$_SESSION['id'];
		$to=strip_tags(urldecode($_REQUEST["id"]));
		$content=strip_tags(mysql_real_escape_string(urldecode($_REQUEST['message'])));
		$query="INSERT INTO `message`(`from`, `to`, `content`) VALUES (".$from.",".$to.",'".$content."');";
		if(mysql_query($query)or die(mysql_error())){
			echo "Correct";
		}
		else{
			echo "Sorry, there was some error. Try again after some time.";
		}	
}
?>