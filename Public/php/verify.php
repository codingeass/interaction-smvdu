<?php

	if(isset($_REQUEST["email"])&&isset($_REQUEST["pass"]))
	{
		require("connect.php");
		$query="Select * from user where email ='".strip_tags($_REQUEST["email"])."' and password='".md5(md5(strip_tags($_REQUEST["pass"])))."';";
		$result=mysql_query($query);
		$i=0;
		while($res=mysql_fetch_array($result))
		{
			session_start();
			$_SESSION["email"] = strip_tags($_REQUEST["email"]);
			$_SESSION["type"]=$res['type'];
			$_SESSION["logti"]=time();
			$_SESSION["user"]=$res['name'];
			$_SESSION["uuid"]=md5($_SESSION["logti"].strip_tags($_REQUEST["pass"]));
			$i++;
			//print_r($_SESSION);
			echo "<script>window.location.assign('../../pro.php');</script>";			
		}
		if($i==0)
		echo "<script>window.location.assign('../../index.php?v=er');</script>"; 
	} 
	else
		echo "<script>window.location.assign('../../index.php?v=false');</script>";


?>