<?php

	session_start();
	if(isset($_SESSION["type"]))
	{
		if($_SESSION["type"]=="faculty"||$_SESSION["type"]=="student")
		{

		}
		else
		{
			session_unset(); 
			session_destroy();
			echo "<script>window.location.assign('../../index.php');</script>";			
		}
	}
	else
	{
		session_unset(); 
		session_destroy();
		echo "<script>window.location.assign('../../index.php');</script>";
	}
?>