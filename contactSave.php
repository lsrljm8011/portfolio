<?php
    include "PHPMailer.php"; 
    include "SMTP.php";
    $contactFrom = $_POST['contactFrom'];
    $contactTo = $_POST['contactTo'];
    $contactSubject = $_POST['contactSubject'];
    $contactContent = $_POST['contactContent'];
    $mail = new PHPMailer();
    $mail->isSMTP();
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8'; 
    $mail->Username = 'lsrljm98@gmail.com';
    $mail->Password = 'ujcz cnxl ztsj cmuj';
    $mail->setFrom($contactFrom, 'Sender');
    $mail->addReplyTo($contactFrom, '보낸사람');
    $mail->addAddress('lsrljm98@gmail.com', 'Receiver');
    $mail->Subject = $contactSubject;
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    $mail->msgHTML($contactContent);
    $mail->AltBody = $contactContent;
    //$mail->addAttachment('../assets/img/post01.jpg');
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
?>
<script>
    location.href = "index.html";
</script>