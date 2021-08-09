<?php
$name=$_POT['name'];
$visitor_email=$_PST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject:" $subject.\n".
"User Mesage: $message.\n".
$to = 'maryam23ashraf@gmail.com';

$headers="From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>