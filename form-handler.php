<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'Info@your website.com'

$email_subject = 'New form Submission'

$email_body = "user name: $name.\n".
                 "user email: $visitor_email.\n".
                 "subkect: $subject.\n".
                 "user message: $message.\n".;


$to = 'mk7986892@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$email_headers);
header("location: contact.html.html");

?>