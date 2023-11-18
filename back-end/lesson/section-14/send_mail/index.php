<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'sendemail.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if (isset($_POST['btn_reg'])) {
    // // $infor_email = array();
    // // $infor_email['email'] = $_POST['email'];
    // // $infor_email['fullname'] = $_POST['fullname'];
    // // print_r($infor_email);
    // send_mail();


    //Create an instance; passing `true` enables exceptions
    // global $infor_email;
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                        //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'chin62758@gmail.com';                     //SMTP username
        $mail->Password   = 'uyqqpjlcqzoibtxk';                         //SMTP password
        $mail->SMTPSecure = 'tls';                                   //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('chin62758@gmail.com', 'Nguyen');
        $mail->addAddress($_POST['email'], $_POST['fullname']);     //Add a recipient
        // $mail->addAddress('ellen@example.com');                                //Name is optional
        $mail->addReplyTo('chin62758@gmail.com', 'Nguyen');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Gửi thành công';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Email:<input type="text" name="email"><br><br>
        Tên:<input type="text" name="fullname"><br><br>
        <input type="submit" name="btn_reg" value="gửi">
    </form>
</body>

</html>