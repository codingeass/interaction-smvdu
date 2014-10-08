<?php

/**
 * MYSQL Cerendentials Include Page
 *
 * @author Laxmikant Revdikar  <laxmikant.4644@gmail.com>
 */
 
require_once("connect.php");
	if(isset($_REQUEST['name'])){
		$name=strip_tags($_REQUEST['name']);
		$query=mysql_query("SELECT `name` FROM student WHERE `name` like '%{$name}%'");
		$mk="";
		if($query){
			while($result=mysql_fetch_array($query)) {
				$mk=$mk."<li><a href='../public/php/student_profile.php?name={$result['name']}'>{$result['name']}</a></li>";
			}
		}
		echo $mk;
	}
?>