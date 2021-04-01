<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

//Instantiation and passing `true` enables exceptions
    $name = $_POST['name'];
    $visitor = $_POST['email'];
    $message = $_POST['message'];

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();

    //Server settings                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ahmedyakoubi@gmail.com';                     //SMTP username
    $mail->Password   = 'lovebaba2018';                               //SMTP password
    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Content
    $mail->isHTML();                                  //Set email format to HTML
    $mail->CharSet = "UTF-8";
    $mail->setFrom('email', 'name');
    $mail->addAddress('ahmedyakoubi913@gmail.com');
    $mail->Subject = 'new form submission';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>'; 
    $mail->send();
?>
