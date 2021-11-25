
<?php

// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

// Define variable and empty it //
$companyErr = $firstnameErr = $lastnameErr = $emailErr = $genderErr = $subjectErr = $messageErr = "";
$company = $firstname = $lastname = $email = $gender = $subject = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["company"])) {
        $companyErr = "Company name is required";
    } else {
    $company = test_input($_POST["company"]);
    }

    if (empty($_POST["firstname"])) {
        $firstnameErr = "Firstame is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        // check if there are others characters than letters & whitespaces //
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
          $firstnameErr = "Only letters and white space are allowed, try again please";
        }
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
          $lastnameErr = "Only letters and white space are allowed, try again please";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // sanitisation of email //
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
    }
    
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
    $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "please select a subject";
    } else {
    $subject = test_input($_POST["subject"]);
    }
    
    if (empty($_POST["message"])) {
        $message = "";
    } else {
    $message = test_input($_POST["message"]);
    }
    
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

 // protect password //
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $mail = new PHPMailer(true);

$mail = new PHPMailer();

$mail->setFrom('contact@sarah-dade.dev', 'First Last', 0);

$mail->addReplyTo('contact@sarah-dade.dev', 'First Last');

$mail->addAddress('contact@sarah-dade.dev');

$mail->Subject = 'PHPMailer mail() test';

$mail->Body = $company.'      '.$firstname.'     '.$lastname.'      '.$email.'      '.$gender.'      '.$subject.'      '.$message;

$mail->send();

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

// $mail -> Host = 'ssl0.ovh.net';
// $mail -> port = 993;
// $mail -> SMTPAuth = true;
// $mail -> SMTPSecure = 'ssl';
// $mail -> Username = $_ENV['login'];
// $mail -> pasword = $_ENV['password'];

// echo $_ENV['password'];
// echo  $_ENV['login'];

// $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
// $mail -> isSMTP();

// $mail->SMTPDebug = 4; 

// try {
//     // $mail->AddReplyTo('contact@sarah-dade.dev', 'Sarah Dade');
//     $mail->AddAddress($email);
//     $mail->SetFrom('contact@sarah-dade.dev', 'Sarah Dade');
//     $mail->AddReplyTo('contact@sarah-dade.dev', 'Sarah Dade');
//     $mail->Subject = $subject;
//     $mail->Body = $message; 
//     $mail->Send();
//     echo "Message Sent OK\n";
//   } catch (phpmailerException $e) {
//     echo $e->errorMessage(); 
//   }

?>

