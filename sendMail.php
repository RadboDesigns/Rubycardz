<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_POST['submitcontact'])) 
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];




    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'teamradbo@gmail.com';                     //SMTP username
        $mail->Password   = 'lxpphbliadmzuuyf';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //ENCRYPTION_SMTPS:Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('rubycardzindia@gmail.com', 'Admin');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Subject';
        $mail->Body    = '<h3>Hello, you got a new message</h3>
                <h4>Name: '.$name.'</h4>
                <h4>Phone: '.$phone.'</h4>
                <h4>Email: '.$email.'</h4>
                <h4>Message: '.$message.'</h4>
        ';

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        

        if($mail->send()){
            $_SESSION['status'] = "Message sent successfully";
            header("location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }
        else{
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }


    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    echo "Error: Form not submitted.";
    header('location: contact.php');
    exit(0);
}