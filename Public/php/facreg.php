<?php
try{
if( isset($_REQUEST["name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["pass"]) && isset($_REQUEST["type"]) && isset($_REQUEST["sex"]) && isset($_REQUEST["dep"]) &&isset($_REQUEST["desi"]) && isset($_REQUEST["qua"]) &&isset($_REQUEST["bir"]) &&isset($_REQUEST["join"]) && isset($_REQUEST["add"]) &&isset($_REQUEST["cont"]) &&isset($_REQUEST["pro"]) && isset($_REQUEST["are"]) && isset($_REQUEST["spec"])){
	if($_REQUEST['add']=='-1')
		$_REQUEST['add']=' ';
	if($_REQUEST['cont']=='-1')
		$_REQUEST['cont']=' ';
	if($_REQUEST['pro']=='-1')
		$_REQUEST['pro']=' ';
	if($_REQUEST['are']=='-1')
		$_REQUEST['are']=' ';	
	if($_REQUEST['spec']=='-1')
		$_REQUEST['spec']=' ';
	if ($_REQUEST["type"]=="student") {
			exit();
	}
		///we can remove these if we make sure null value comes from the get request of ajax
	require_once("connect.php");
     // if using above php 5.5 then try to use password_hash than md5 as its better than md5
	//**check if email is already registered
	$query="Select * from user where email='".urldecode(strip_tags($_REQUEST["email"]))."';";
	$result=mysql_query($query);
	while($res=mysql_fetch_array($result))
		exit ('Email is already registered');

	$query="Insert into user (name,email,password,type)values('".strtolower(urldecode(strip_tags($_REQUEST["name"])))."','".urldecode(strip_tags($_REQUEST["email"]))."','".md5(md5(urldecode(strip_tags($_REQUEST["pass"]))))."','".urldecode(strip_tags($_REQUEST["type"]))."');";
	$result=mysql_query($query)
                    or die("Invalid Entry");

    $quert="Select * from user where email='".urldecode(strip_tags($_REQUEST["email"]))."';";
	$resulty=mysql_query($quert)
				or die("Invalid Entry");
	while($res=mysql_fetch_array($resulty))
	{                
    $quer="Insert into faculty (id,name,sex,designation,department,qualification,date_of_birth,date_of_joining,address,contact,project,area_of_interest,  area_of_specialization )values('".$res["id"]."','".urldecode(strip_tags($_REQUEST["name"]))."','".urldecode(strip_tags($_REQUEST["sex"]))."','".urldecode(strip_tags($_REQUEST["desi"]))."','".urldecode(strip_tags($_REQUEST["dep"]))."','".urldecode(strip_tags($_REQUEST["qua"]))."','".urldecode(strip_tags($_REQUEST["bir"]))."','".urldecode(strip_tags($_REQUEST["join"]))."','".urldecode(strip_tags($_REQUEST["add"]))."','".urldecode(strip_tags($_REQUEST["cont"]))."','".urldecode(strip_tags($_REQUEST["pro"]))."','".urldecode(strip_tags($_REQUEST["are"]))."','".urldecode(strip_tags($_REQUEST["spec"]))."');";
	$resul=mysql_query($quer)
                    or die("Invalid Entry");
      echo "You are registered successfully";
      //check for parameter of exit when change login page
	$myfile = fopen("../xml/blog/".urldecode(strip_tags($_REQUEST["email"])).".xml", "w") or die("Unable to open file!");
	$txt = "<?xml version='1.0' encoding='utf-8' standalone='no'?>
	<!DOCTYPE chatting [
	<!ELEMENT Complete (BlogSection , title , author , content , comments , comment)>
	<!ELEMENT BlogSection (title , author , content , comments , comment)>
	<!ELEMENT title (#PCDATA)>
	<!ELEMENT author (#PCDATA)>
	<!ELEMENT time (#PCDATA)>
	<!ELEMENT content (#PCDATA)>
	<!ELEMENT comments (comment)>
	<!ELEMENT comment (#PCDATA)>
	]>
	<Complete>
	</Complete>
	";
	fwrite($myfile, $txt);
	fclose($myfile);
    }
}
else
echo "Invalid Entry";
}
catch (Exception $e) {
    echo  "<script>alert(".$e->getMessage().");</script>";
}
?>