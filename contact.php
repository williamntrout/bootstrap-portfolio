<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = "William's contact page";
$email_subject = "New Contact Request";
$email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message.\n";

$to ="troutw5593@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

?>




