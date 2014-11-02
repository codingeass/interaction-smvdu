<?php
require("sessionv.php");
require("connect.php");
if(isset($_FILES['file'])){
	$file=$_FILES['file'];

	$file_name=$file['name'];
	$file_tmp=$file['tmp_name'];
	$file_size=$file['size'];
	$file_error=$file['error'];

	$file_ext=explode('.',$file_name);
	$file_ext=strtolower(end($file_ext));

	$allowed=array('jpg','jpeg','png');

	if(in_array($file_ext, $allowed)){
		if($file_error==0){
			if($file_size<=1048576){
				$file_name_new=$_SESSION["email"].uniqid('',true).'.'.$file_ext;
				$file_destination='../img/profile/'.$file_name_new;
				if(move_uploaded_file($file_tmp, $file_destination))
				{
					$query="update user set image='".$file_name_new."' where email='".$_SESSION["email"]."';";
					$result=mysql_query($query)
                    or die("Invalid Entry");
					echo "<script>alert('image uploaded successfully');</script>";						
				}	
			}
			else
				"<script>alert('Image Size exceeded 1MB');</script>";
		}
	}
	else
		echo "<script>alert('image format only jpeg,jpg,png allowed');</script>";
}
	echo "<script>window.location.assign('../../pro.php');</script>";	
 ?>