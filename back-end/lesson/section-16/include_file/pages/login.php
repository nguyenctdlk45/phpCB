<?php
//require 'lib/function.php';
//require 'lib/user.php';
if (isset($_POST['btn_login'])) {
    $error = array();
    //
    if (empty($_POST['username'])) {
        $error['username'] = "Tài khoản không được trống";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Tài khoản có độ dài từ 6 đến 32 kí tự";
        } else {
            //Nếu thông tin nhập vào không phải là username thì in ra
            if (!is_username($_POST['username'])) {
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
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu chứa các chữ 1 chữ cái in hoa, thường, dấu gạch dưới và dấu chấm";
            } else {
                $password = $_POST['password'];
                //echo $password . "<br>";
            }
        }
    }
    //
    if (empty($error)) {
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                header("location: ?page=home");
            } else $error['check_login'] = "Tai khoan hoac mat khau khong chinh xac";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>ĐĂNG NHẬP</title>
</head>

<body>
    <div id="wrapper">
        <form action="" method="POST">
            <h1>Đăng nhập</h1>
            <form action="" method="POST">
                Name:<br><input type="text" name="username"><br><br>
                <P class="error"><?php if (!empty($error['username'])) {
                                        echo $error['username'];
                                    } ?></P>
                password:<br><input type="password" name="password"><br><br>
                <P class="error"><?php if (!empty($error['password'])) {
                                        echo $error['password'];
                                    } ?></P>
                <P class="error"><?php if (!empty($error['check_login'])) {
                                        echo $error['check_login'];
                                    } ?></P>
                <input type="submit" name="btn_login" value="login">
            </form>
        </form>
    </div>
</body>

</html>