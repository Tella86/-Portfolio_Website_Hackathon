<?php
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);

    $to = 'info@ezems.co.ke'; 
    $subject = 'New Contact Us Message';
    $body = "Name: $name<br>Email: $email<br><br>Message:<br>$message";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ezems.developers@gmail.com';
        $mail->Password = 'glgu ktrc jcgf jety ';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('info@ezems.co.ke', 'EZEMS TECH DEVELOPER');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();

        $mail->clearAddresses();
        $mail->clearAttachments();

        $mail->addAddress($email);
        $mail->Subject = 'Thank You for Reaching Out!';
        $mail->Body = "
            <p>Dear $name,</p>
            <p>Thank you for reaching out to us! We appreciate the time you took to share your feedback and inquiries with EZEMS TECH DEVELOPERS. Your input is valuable to us, and we are committed to providing you with the best possible experience.</p>
            <p>Our team is currently reviewing your message, and we will get back to you as soon as possible. If your inquiry is time-sensitive, rest assured that we are working diligently to address it promptly.</p>
            <p>In the meantime, feel free to explore our website for additional resources. If you have any urgent matters, please don't hesitate to contact us directly at (254) 101086123.</p>
            <p>Once again, thank you for choosing EZEMS TECH DEVELOPERS. We look forward to assisting you and appreciate your continued support.</p>
            <p>Best regards,</p>
            <p>EZEMS TECH DEVELOPERS</p>
            <p>+254101086123</p>
            <p>24/7 Support</p>
        ";
        $mail->send();
          header('Location: ../index.html');

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    include '../config.php';  

    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $stmt->close();

    $notification = "New message from $name";
    $stmt = $conn->prepare("INSERT INTO notifications (notification) VALUES (?)");
    $stmt->bind_param("s", $notification);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    header('Location: index.html');
    exit;
}
