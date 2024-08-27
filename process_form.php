<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Simple validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }

    echo 'You Fill';
    echo $name."<br/>".$email."<br/>".$phone."<br/>".$message;
    // // Set the recipient email address
    // $to = "your-email@example.com"; // Replace with your email address
    // $subject = "Contact Form Submission from $name";
    // $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    // $headers = "From: $email";

    // // Send email
    // if (mail($to, $subject, $body, $headers)) {
    //     echo "Thank you for your message. It has been sent.";
    // } else {
    //     echo "Sorry, something went wrong. Please try again later.";
    // }
} else {
    echo "Invalid request method.";
}
?>
