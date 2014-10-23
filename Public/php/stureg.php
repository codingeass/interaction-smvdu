<?php
try{
if( isset($_REQUEST["name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["pass"]) && isset($_REQUEST["type"]) && isset($_REQUEST["sex"]) && isset($_REQUEST["ent"]) &&isset($_REQUEST["bran"]) && isset($_REQUEST["sem"]) &&isset($_REQUEST["bir"]) &&isset($_REQUEST["join"]) && isset($_REQUEST["add"]) &&isset($_REQUEST["cont"]) &&isset($_REQUEST["pro"]) && isset($_REQUEST["are"])){
	if($_REQUEST['add']=='-1')
		$_REQUEST['add']=' ';
	if($_REQUEST['cont']=='-1')
		$_REQUEST['cont']=' ';
	if($_REQUEST['pro']=='-1')
		$_REQUEST['pro']=' ';
	if($_REQUEST['are']=='-1')
		$_REQUEST['are']=' ';
	if ($_REQUEST["type"]=="faculty") {
			exit();
	}
		///we can remove these if we make sure null value comes from the get request of ajax
	require_once("connect.php");
     // if using above php 5.5 then try to use password_hash than md5 as its better than md5
	//**check if email is already registered
	$query="Select * from user where email='".strip_tags($_REQUEST["email"])."';";
	$result=mysql_query($query);
	while($res=mysql_fetch_array($result))
	{
		echo ('Email is already registered');		
	}
		

	$query="Insert into user (name,email,password,type)values('".strip_tags($_REQUEST["name"])."','".strip_tags($_REQUEST["email"])."','".md5(md5(strip_tags($_REQUEST["pass"])))."','".strip_tags($_REQUEST["type"])."');";
	$result=mysql_query($query)
                    or die('Invalid Entry');

    $quert="Select * from user where email='".strip_tags($_REQUEST["email"])."';";
	$resulty=mysql_query($quert)
				or die('Invalid Entry');
	while($res=mysql_fetch_array($resulty))
	{                
    $quer="Insert into student (id,name,sex,entry_no,branch,semester,date_of_birth,date_of_joining,address,contact,project,area_of_interest)values('".$res["id"]."','".strip_tags($_REQUEST["name"])."','".strip_tags($_REQUEST["sex"])."','".strip_tags($_REQUEST["ent"])."','".strip_tags($_REQUEST["bran"])."','".strip_tags($_REQUEST["sem"])."','".strip_tags($_REQUEST["bir"])."','".strip_tags($_REQUEST["join"])."','".strip_tags($_REQUEST["add"])."','".strip_tags($_REQUEST["cont"])."','".strip_tags($_REQUEST["pro"])."','".strip_tags($_REQUEST["are"])."');";
	$resul=mysql_query($quer)
                    or die('Invalid Entry');
      echo 'You are registered successfully';
      //check for parameter of exit when change login page
    }
}
else
echo "Invalid Entry";
}
catch (Exception $e) {
    echo  "<script>alert(".$e->getMessage().");</script>";
}
?>