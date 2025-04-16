<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'no-reply@foundlandmusicaluw.org'; // Use your domain email if you have one
    $email_subject = 'New Contact Form Submission';

    $email_body = "User Name: $name\n".
                  "User Email: $visitor_email\n".
                  "Subject: $subject\n\n".
                  "User Message:\n$message\n";

    $to = 'fdlandmusical@gmail.com';

    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visitor_email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.html?status=success");
    } else {
        header("Location: contact.html?status=error");
    }
    exit();
} else {
    http_response_code(405); // triggers only if someone tries GET
    echo "405 Method Not Allowed";
}
?>
