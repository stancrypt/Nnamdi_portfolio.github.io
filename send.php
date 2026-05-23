<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your receiving email
    $to = "stanley.ogb11@gmail.com";

    // Email subject
    $subject = "New Contact Form Message";

    // Email body
    $body = "
    You received a new message from your website.

    Name: $name
    Email: $email

    Message:
    $message
    ";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {

        echo "
        <h2 style='color:green; text-align:center;'>
            Message sent successfully!
        </h2>
        ";

    } else {

        echo "
        <h2 style='color:red; text-align:center;'>
            Failed to send message.
        </h2>
        ";

    }
}

?>