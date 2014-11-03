<?php
	require("sessionv.php");
	if(isset($_REQUEST["title"])&&isset($_REQUEST["content"])){
		$time=date("F j, Y, g:i a");
		$_REQUEST["content"]=htmlspecialchars(urldecode(strip_tags($_REQUEST["content"])), ENT_QUOTES);
		$_REQUEST["title"]=htmlspecialchars(urldecode(strip_tags($_REQUEST["title"])), ENT_QUOTES);
		$xml=simplexml_load_file("../xml/blog/".strip_tags($_SESSION['email']).".xml");		
		$blogsection=$xml->addChild('BlogSection');		
		$blogsection->addChild('title',$_REQUEST["title"]);
		$blogsection->addChild('author',$_SESSION["user"]);
		$blogsection->addChild('time',$time);
		$blogsection->addChild('content',$_REQUEST["content"]);
		$blogsection->addChild('comments');
		$xml->saveXML('../xml/blog/'.$_SESSION["email"].'.xml');

		$xml1=simplexml_load_file("../xml/blog/blog.xml");		
		$blogsection=$xml1->addChild('BlogSection');
		$blogsection->addChild('title',$_REQUEST["title"]);		
		$blogsection->addChild('author',$_SESSION["user"]);
		$blogsection->addChild('email',$_SESSION["email"]);
		$blogsection->addChild('time',$time);
		$xml1->saveXML('../xml/blog/blog.xml');
		echo "Correct";
	}
	else
		echo "Error occured"; 		
?>