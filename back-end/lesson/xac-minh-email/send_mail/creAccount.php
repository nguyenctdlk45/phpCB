<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
require 'sendemail.php';
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
require 'helper/format.php';
require 'db/config.php';
require 'db/database.php';
db_connect($config);
//send_mail('nguyenb1906725@student.ctu.edu.vn','nguyen chi nguyen','thu',"jkd");
if (isset($_POST['btn_reg'])) {
    global $error, $fullname, $username, $password, $email;
    
    $error = array();
    
    if (empty($_POST['username'])) {
        $error['username'] = "Tài khoản không được trống";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Tài khoản có độ dài từ 6 đến 32 kí tự";
        } else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($partten, $_POST['username'], $matchs)) {
                $error['username'] = "Tài khoản chứa các chữ cái in hoa, thường, dấu gạch dưới và dấu chấm";
            } else {
                $username = $_POST['username'];
                //echo $username . "<br>";
            }
        }
    }
    //
    if (empty($_POST['password'])) {
        $error['password'] = "Mật khẩu không được trống";
    } else {
        if (!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
            $error['password'] = "Mật khẩu có độ dài từ 6 đến 32 kí tự";
        } else {
            $partten = "/^[A-Z]{1}[\w_\.!@#$%^&*()+]{6,32}$/";
            if (!preg_match($partten, $_POST['password'], $matchs)) {
                $error['password'] = "Mật khẩu chứa các chữ 1 chữ cái in hoa, thường, dấu gạch dưới và dấu chấm";
            } else {
                $password = $_POST['password'];
                //echo $password . "<br>";
            }
        }
    }
    // Tên
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Tên không được trống";
    } else {

        $fullname = $_POST['fullname'];
        //echo $password . "<br>";
    }
    //
    if (empty($_POST['email'])) {
        $error['email'] = "email không được trống";
    } else {

        $email = $_POST['email'];
        //echo $password . "<br>";
    }
    //
    if (empty($error)) {
        if(!user_exists($username,$email)){
            $active_token = md5($username.time());
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'password' => $password,
                'email'    => $email,
                'active_token' => $active_token
            );
            add_user($data);
            $link_active = "http://localhost/phpCB/back-end/lesson/xac-minh-email/send_mail/active_account.php?active_token={$active_token}";
            $contentEmail = "<p>chào bạn {$fullname}</p>
            <p>Bạn vui lòng kích hoạt vào đường link để kích hoạt tài khoản: {$link_active}</p>";
            send_mail($email,$fullname,'Thử nghiệm',$contentEmail);
        }else{
            $error['account']= "Email hoặc tài khoản đã tồn tại trên hệ thống";
        }
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
        Tài khoản:<input type="text" name="username"><br><br>
        Mật khẩu:<input type="text" name="password"><br><br>
        <input type="submit" name="btn_reg" value="gửi">
    </form>
</body>

</html>