<?php
require("sessionv.php");
require_once("connect.php");
	
	if(isset($_REQUEST["subject"])&&isset($_REQUEST["message"]))
	{
		$subject=urldecode(strip_tags($_REQUEST['subject']));
	    $message=urldecode(strip_tags($_REQUEST['message']));
	try
	{
    $message="Subject : ".$subject."<br/>Message : ".$message."<br/> Sender Mail : ".$_SESSION["email"];
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
	$mail->addAddress("laxmikant.4644@gmail.com", "Laxmikant Revdikar");  // Add a recipient
	$mail->addAddress("amandeeptheviper@gmail.com", "Amandeep Gupta");               // Name is optional
	$mail->addCC('');
	$mail->addBCC('');
	$mail->WordWrap = 400;                                 // Set word wrap to 50 characters
	//`$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
	//$mail->addAttachment('20725.jpg', 'new.jpg'); // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	 
	$mail->Subject = 'Feedback of interaction website';
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
?>