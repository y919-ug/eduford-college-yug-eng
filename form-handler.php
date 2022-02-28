<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$email_from = 'info@file:///C:/Users/Admin/Desktop/dreamweaver%203/contact.html';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name./n".
               "User Email: $visitor_email./n".
               "Subject: $subject./n".
               "User Message: $message./n";

$to = 'yugharia12@gmail.com';

$headers = "From: $email_from/r/n";

$headers = "Reply-To: $visitor_email /r";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>