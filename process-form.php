<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email content
    $to = "bac.teria.ab@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";

    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Message:\n$message";

    // Send email
    mail($to, $subject, $emailContent, $headers);

    // Redirect back to the form or a thank you page
    header("Location: thank-you.html");
    exit();
}
?>
