<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
$name = $_POST['name'];
$email_address = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email === FALSE) {
    echo 'Invalid email';
    exit(1);
}
$phone = $_POST['phone'];
$message = $_POST['message'];
// Create the email and send the message
$to = '471816299@.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "联系方式来自网页版简历的:  $name";
$email_body = "您收到一份邮件来自: $name\n\邮件地址: $email_address\n\n手机号码: $phone\n\n信息:\n$message";
$headers = "收件人：471816299@qq.com"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "发件人: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
