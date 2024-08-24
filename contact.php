<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'muthuvicky7777@gmail.com';
    
    // Proper email headers
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    $body = "From: $name\nE-Mail: $email\nSubject: $subject\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html");
        exit();
    } else {
        die("Error sending email!");
    }
}
?>
