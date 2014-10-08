<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Laxmikant Revdikar  <laxmikant.4644@gmail.com>
 */
require_once("connect.php");
	if(isset($_POST['name'])){
		$name=strip_tags($_POST['name']);
	    $result=mysql_fetch_assoc(mysqli_query($conn,"SELECT `name` FROM faculty WHERE `name` like '%{$name}%' ORDER BY `name`"));
		if($query){
			foreach ($name as $result) {
				echo '{$name}</br>';
			}
		}
	}
?>