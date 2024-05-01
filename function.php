<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function handle_form_submission() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $street_address = $_POST['street-address'];
        $phone_number = $_POST['phone-number'];
        $message = $_POST['message'];

        try {
            
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'azhar.wigatech@gmail.com'; 
            $mail->Password = 'czailvgmwppnmikp'; 
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

          
            $mail->setFrom($email, $name);
            $mail->addAddress('azhar.wigatech@gmail.com'); 
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = "Name: $name<br>Email: $email<br>Address: $street_address<br>Phone: $phone_number<br>Message:<br>$message";

           
            $mail->send();
            echo "<script>alert('Thank you for your message! We will get back to you soon.')</script>";
        } catch (Exception $e) {
            echo "<script>alert('Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}')</script>";
        }
    }
}

?>
