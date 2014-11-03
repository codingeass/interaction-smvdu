<?php
	require("sessionv.php");
	if(isset($_REQUEST["title"])&&isset($_REQUEST["content"])&&isset($_REQUEST["i"])){
		$xml=simplexml_load_file("../xml/blog/".$_SESSION["email"].".xml");
		$blogsection=$xml->BlogSection[intval($_REQUEST["i"])];
		$blogsection->title=urldecode(strip_tags($_REQUEST["title"]));
		$blogsection->content=urldecode(strip_tags($_REQUEST["content"]));
		$xml->saveXML("../xml/blog/".$_SESSION["email"].".xml");
		echo "Correct";
	}
	else
		echo "Error occured"; 		
?>