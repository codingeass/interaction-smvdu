<?php
if(isset($_REQUEST["comment"])&&isset($_REQUEST["em"])&&isset($_REQUEST["no"]))
{
	$xml=simplexml_load_file("..\/xml\/blog\/".urldecode($_REQUEST["em"]).".xml");

	$mk=intval($_REQUEST["no"]);

    $xml->BlogSection[$mk]->comments->addChild('comment',htmlspecialchars(urldecode(strip_tags($_REQUEST["comment"])), ENT_QUOTES));
}
else
{
	echo "Error";
}
$xml->saveXML("..\/xml\/blog\/".urldecode($_REQUEST["em"]).".xml"); 

?>
