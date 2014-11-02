<?php
require("sessionv.php");
require_once("connect.php");
	
	if(isset($_REQUEST["category"])&&isset($_REQUEST["sub_category"])&&isset($_REQUEST["message"]))
	{
		$category=strip_tags($_REQUEST['category']);
		$sub_category=strip_tags($_REQUEST['sub_category']);
	    $message=strip_tags($_REQUEST['message']);
	try
	{

		switch($category){
			case '1':switch($sub_category){
						case '1':$email="a@gmail.com";break;
						case '2';$email="b@gmail.com";break;
						case '3':$email="c@gmail.com";break;
						case '4':$email="d@gmail.com";break;
					}break;
			case '2':switch($sub_category){
						case '1':$email="e@gmail.com";break;
						case '2';$email="amandeeptheviper@gmail.com";break;
						case '3':$email="g@gmail.com";break;
						case '4':$email="h@gmail.com";break;
					}break;
			case '3':switch($sub_category){
						case '1':$email="i@gmail.com";break;
						case '2';$email="pappupandey.0028@gmail.com";break;
						case '3':$email="k@gmail.com";break;
					}break;
			case '4':switch($sub_category){
						case '1':$email="l@gmail.com";break;
						case '2';$email="laxmikant.4644@gmail.com";break;
						case '3':$email="n@gmail.com";break;
					}break;
		}
    $message="Subject : Complaint from SMVDU student <br/>Message : ".$message."<br/> Sender Mail : ".$_SESSION["email"];
	require ("phpmailer\PHPMailerAutoload.php");

	$mail = new PHPMailer;
	 
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = '';                   // SMTP username
	$mail->Password = '';               // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
	$mail->setFrom($_SESSION["email"], $_SESSION["user"]);     //Set who the message is to be sent from
	//$mail->addReplyTo('amandeeptheviper@gmail.com', 'First Last');  //Set an alternative reply-to address
	$mail->addAddress($email, "SMVDU Complaint");
	//$mail->addAddress("amandeeptheviper@gmail.com", "Amandeep Gupta");   // Add a recipient      
	$mail->addCC('');
	$mail->addBCC('');
	$mail->WordWrap = 400;                                 // Set word wrap to 50 characters
	//`$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
	//$mail->addAttachment('20725.jpg', 'new.jpg'); // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	 
	$mail->Subject = "Complaint from SMVDU student";
	$mail->Body    = $message;
	$mail->AltBody = $message;
	 
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	 
	if(!$mail->send()) {
	   //echo 'Message could not be sent.';
	  // echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}
	 
	//echo 'Message has been sent';

}
catch(Exception $en)
{ 
	echo "";
}
}
/*localhost/interaction-smvdu/Public/php/complaint.php?category=3&sub_category=2&message="Hello%20Vishal"*/
?>