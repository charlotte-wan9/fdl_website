<?php
$email_from = 'no-reply@foundlandmusicaluw.org'; // doesn't need to exist
$email_subject = 'New Contact Form Submission';

$email_body = "User Name: $name\n".
              "User Email: $visitor_email\n".
              "Subject: $subject\n\n".
              "Message:\n$message\n";

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

mail('fdlandmusical@gmail.com', $email_subject, $email_body, $headers);

?>
