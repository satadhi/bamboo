<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "emailaddress@here.com";
$mailheader = "From: $email \r\n";
if(($name="")||($email="")||($subject="")||($message=""))
{
	echo "All fields are required to send your message";
}

else
{
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!";
}
?>
