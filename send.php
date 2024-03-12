<?php
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
// $inquiry = $_POST['inquiry'];
$message = strip_tags($_POST['message']);



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


//Load Composer's autoloader
require 'vendor/autoload.php';







//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.zoho.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'laravel_learning_project'; //SMTP username
    $mail->Password = 'laravel10-12-23'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('laravel_learning_project@zohomail.com', 'Mailer');
    $mail->addAddress($email, $name); //Add a recipient


    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->CharSet = "UTF-8";
    $mail->Subject = 'Tiếp nhận email';
    $str = 'Chúng tôi đã tiếp nhận email của bạn và sẽ nhanh chóng phản hồi.';
    $mail->Body = '<p>Chúng tôi đã tiếp nhận email của bạn và sẽ nhanh chóng phản hồi.<p>';
    $mail->AltBody = $str;

    $mail->send();


    // Remove previous recipients
    $mail->ClearAllRecipients();

    //Recipients
    $admin_email = 'laravel_learning_project@zohomail.com';
    $mail->setFrom('laravel_learning_project@zohomail.com', 'Mailer');
    $mail->addAddress($admin_email, 'admin'); //Add a recipient


    //Content
    $mail->Subject = 'Mail từ khách hàng';
    $mail->Body = $message;
    $mail->AltBody = $message;

    $mail->send();

    echo $_SERVER['SERVER_NAME'];
    header("Location: {$_REQUEST["destination"]}?sent=true");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}