<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "cyberwareedugame@gmail.com"; // Your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect the user back to the homepage or a thank you page
    header("Location: homepage.html");
    exit();
}
?>
