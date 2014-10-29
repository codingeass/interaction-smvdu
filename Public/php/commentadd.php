<?php
if(isset($_REQUEST["comment"])&&isset($_REQUEST["em"])&&isset($_REQUEST["no"]))
{
	$xml=simplexml_load_file("..\/xml\/blog\/".$_REQUEST["em"].".xml");

	$mk=intval($_REQUEST["no"]);

    $xml->BlogSection[$mk]->comments->addChild('comment',$_REQUEST["comment"]);
}
else
{
	echo "Error";
}
$xml->saveXML("..\/xml\/blog\/".$_REQUEST["em"].".xml"); 

?>
