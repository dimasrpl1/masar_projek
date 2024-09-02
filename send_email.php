<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "muhdimassusanto12@gmail.com"; // Ganti dengan email Anda
    $subject = "Contact Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: " . $email;

    mail($to, $subject, $message, $headers);
    echo "Message sent successfully!";
}
?>
